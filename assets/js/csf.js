/**
 *
 * -----------------------------------------------------------
 *
 * Codestar Framework
 * A Simple and Lightweight WordPress Option Framework
 *
 * -----------------------------------------------------------
 *
 */
;(function( $, window, document, undefined ) {
  'use strict';

  //
  // Constants
  //
  var CSF   = CSF || {};
  CSF.funcs = {};
  CSF.vars  = {};

  CSF.vars.onloaded  = false;
  CSF.vars.$window   = $(window);
  CSF.vars.$document = $(document);
  CSF.vars.is_rtl    = $('body').hasClass('rtl');

  //
  // Helper Functions
  //
  CSF.helper = {

    //
    // Reneme input names
    //
    inputs_rename: function( $selector ) {
      $selector.each( function( index ) {
        $(this).find(':input').each( function() {
          this.name = this.name.replace(/\[(\d+)\]/, '['+ index +']');
        });
      });
    },

    //
    // Generate UID
    //
    uid: function( prefix ) {
      return ( prefix || '' ) + Math.random().toString(36).substr(2, 9);
    },

    //
    // Debounce
    //
    debounce: function( callback, threshold, immediate ) {
      var timeout;
      return function() {
        var context = this, args = arguments;
        var later = function() {
          timeout = null;
          if ( !immediate ) {
            callback.apply(context, args);
          }
        };
        var callNow = ( immediate && !timeout );
        clearTimeout( timeout );
        timeout = setTimeout( later, threshold );
        if ( callNow ) {
          callback.apply(context, args);
        }
      };
    },

    //
    // Get a cookie
    //
    get_cookie: function( name ) {

      var e, b, cookie = document.cookie, p = name + '=';

      if ( ! cookie ) {
        return;
      }

      b = cookie.indexOf( '; ' + p );

      if ( b === -1 ) {
        b = cookie.indexOf(p);

        if ( b !== 0 ) {
          return null;
        }
      } else {
        b += 2;
      }

      e = cookie.indexOf( ';', b );

      if ( e === -1 ) {
        e = cookie.length;
      }

      return decodeURIComponent( cookie.substring( b + p.length, e ) );

    },

    //
    // Set a cookie
    //
    set_cookie: function( name, value, expires, path, domain, secure ) {

      var d = new Date();

      if ( typeof( expires ) === 'object' && expires.toGMTString ) {
        expires = expires.toGMTString();
      } else if ( parseInt( expires, 10 ) ) {
        d.setTime( d.getTime() + ( parseInt( expires, 10 ) * 1000 ) );
        expires = d.toGMTString();
      } else {
        expires = '';
      }

      document.cookie = name + '=' + encodeURIComponent( value ) +
        ( expires ? '; expires=' + expires : '' ) +
        ( path    ? '; path=' + path       : '' ) +
        ( domain  ? '; domain=' + domain   : '' ) +
        ( secure  ? '; secure'             : '' );

    },

    //
    // Remove a cookie
    //
    remove_cookie: function( name, path, domain, secure ) {
      CSF.helper.set_cookie( name, '', -1000, path, domain, secure );
    },

  };

  //
  // Custom clone for textarea and select clone() bug
  //
  $.fn.csf_clone = function() {

    var base   = $.fn.clone.apply(this, arguments),
        clone  = this.find('select').add(this.filter('select')),
        cloned = base.find('select').add(base.filter('select'));

    for( var i = 0; i < clone.length; ++i ) {
      for( var j = 0; j < clone[i].options.length; ++j ) {

        if( clone[i].options[j].selected === true ) {
          cloned[i].options[j].selected = true;
        }

      }
    }

    return base;

  };

  //
  // Expand All Options
  //
  $.fn.csf_expand_all = function() {
    return this.each( function() {
      $(this).on('click', function( e ) {

        e.preventDefault();
        $('.csf-wrapper').toggleClass('csf-show-all');
        $('.csf-section').csf_reload_script();
        $(this).find('.fa').toggleClass('fa-indent').toggleClass('fa-outdent');

      });
    });
  };

  //
  // Options Navigation
  //
  $.fn.csf_nav_options = function() {
    return this.each( function() {

      var $nav    = $(this),
          $links  = $nav.find('a'),
          $hidden = $nav.closest('.csf').find('.csf-section-id'),
          $last_section;

      $(window).on('hashchange', function() {

        var hash  = window.location.hash.match(new RegExp('tab=([^&]*)'));
        var slug  = hash ? hash[1] : $links.first().attr('href').replace('#tab=', '');
        var $link = $('#csf-tab-link-'+ slug);

        if( $link.length > 0 ) {

          $link.closest('.csf-tab-depth-0').addClass('csf-tab-active').siblings().removeClass('csf-tab-active');
          $links.removeClass('csf-section-active');
          $link.addClass('csf-section-active');

          if( $last_section !== undefined ) {
            $last_section.hide();
          }

          var $section = $('#csf-section-'+slug);
          $section.css({display: 'block'});
          $section.csf_reload_script();

          $hidden.val(slug);

          $last_section = $section;

        }

      }).trigger('hashchange');

    });
  };

  //
  // Metabox Tabs
  //
  $.fn.csf_nav_metabox = function() {
    return this.each( function() {

      var $nav      = $(this),
          $links    = $nav.find('a'),
          unique_id = $nav.data('unique'),
          post_id   = $('#post_ID').val() || 'global',
          $last_section,
          $last_link;

      $links.on('click', function( e ) {

        e.preventDefault();

        var $link      = $(this),
            section_id = $link.data('section');

        if( $last_link !== undefined ) {
          $last_link.removeClass('csf-section-active');
        }

        if( $last_section !== undefined ) {
          $last_section.hide();
        }

        $link.addClass('csf-section-active');

        var $section = $('#csf-section-'+section_id);
        $section.css({display: 'block'});
        $section.csf_reload_script();

        CSF.helper.set_cookie('csf-last-metabox-tab-'+ post_id +'-'+ unique_id, section_id);

        $last_section = $section;
        $last_link    = $link;

      });

      var get_cookie = CSF.helper.get_cookie('csf-last-metabox-tab-'+ post_id +'-'+ unique_id);

      if( get_cookie ) {
        $nav.find('a[data-section="'+ get_cookie +'"]').trigger('click');
      } else {
        $links.first('a').trigger('click');
      }

    });
  };

  //
  // Metabox Page Templates Listener
  //
  $.fn.csf_page_templates = function() {

    if( this.length ) {

      $(document).on('change', '.editor-page-attributes__template select, #page_template', function() {

        $('.csf-page-templates').addClass('csf-hide');
        $('.csf-page-'+$(this).val().toLowerCase().replace(/[^a-zA-Z0-9]+/g,'-')).removeClass('csf-hide');

      });

    }

  };

  //
  // Metabox Post Formats Listener
  //
  $.fn.csf_post_formats = function() {

    if( this.length ) {

      $(document).on('change', '.editor-post-format select, #formatdiv input[name="post_format"]', function() {

        $('.csf-post-formats').addClass('csf-hide');
        $('.csf-post-format-'+$(this).val()).removeClass('csf-hide');

      });

    }

  };

  //
  // Search
  //
  $.fn.csf_search = function() {
    return this.each( function() {

      var $this    = $(this),
          $input   = $this.find('input');

      $input.on('change keyup', function() {

        var value    = $(this).val(),
            $wrapper = $('.csf-wrapper'),
            $section = $wrapper.find('.csf-section'),
            $fields  = $section.find('> .csf-field:not(.hidden)'),
            $titles  = $fields.find('> .csf-title, .csf-search-tags');

        if( value.length > 3 ) {

          $fields.addClass('csf-hidden');
          $wrapper.addClass('csf-search-all');

          $titles.each( function() {

            var $title = $(this);

            if( $title.text().match( new RegExp('.*?' + value + '.*?', 'i') ) ) {

              var $field = $title.closest('.csf-field');

              $field.removeClass('csf-hidden');
              $field.parent().csf_reload_script();

            }

          });

        } else {

          $fields.removeClass('csf-hidden');
          $wrapper.removeClass('csf-search-all');

        }

      });

    });
  };

  //
  // Sticky Header
  //
  $.fn.csf_sticky = function() {
    return this.each( function() {

      var $this     = $(this),
          $window   = $(window),
          $inner    = $this.find('.csf-header-inner'),
          padding   = parseInt( $inner.css('padding-left') ) + parseInt( $inner.css('padding-right') ),
          offset    = 32,
          scrollTop = 0,
          lastTop   = 0,
          ticking   = false,
          stickyUpdate = function() {

            var offsetTop = $this.offset().top,
                stickyTop = Math.max(offset, offsetTop - scrollTop ),
                winWidth  = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);

            if ( stickyTop <= offset && winWidth > 782 ) {
              $inner.css({width: $this.outerWidth()-padding});
              $this.css({height: $this.outerHeight()}).addClass( 'csf-sticky' );
            } else {
              $inner.removeAttr('style');
              $this.removeAttr('style').removeClass( 'csf-sticky' );
            }

          },
          requestTick = function() {

            if( !ticking ) {
              requestAnimationFrame( function() {
                stickyUpdate();
                ticking = false;
              });
            }

            ticking = true;

          },
          onSticky  = function() {

            scrollTop = $window.scrollTop();
            requestTick();

          };

      $window.on( 'scroll resize', onSticky);

      onSticky();

    });
  };

  //
  // Dependency System
  //
  $.fn.csf_dependency = function( has_sub ) {
    return this.each( function() {

      var $this   = $(this),
          is_sub  = ( has_sub === 'sub' ) ? 'sub-' : '',
          ruleset = $.csf_deps.createRuleset();

      var depends = [];

      $this.find('[data-'+ is_sub +'controller]').not('.csf-no-script').each( function() {

        var $field      = $(this),
            controllers = $field.data( is_sub +'controller' ).split('|'),
            conditions  = $field.data( is_sub +'condition' ).split('|'),
            values      = $field.data( is_sub +'value' ).toString().split('|'),
            rules       = ruleset;

        $.each(controllers, function( index, depend_id ) {

          var value     = values[index] || '',
              condition = conditions[index] || conditions[0];

          rules = rules.createRule('[data-'+ is_sub +'depend-id="'+ depend_id +'"]', condition, value);

          rules.include($field);

          depends.push(depend_id);

        });

      });

      $.csf_deps.enable($this, ruleset, depends);

    });
  };

  //
  // Field: accordion
  //
  $.fn.csf_field_accordion = function() {
    return this.each( function() {

      var $titles = $(this).find('.csf-accordion-title');

      $titles.on('click', function() {

        var $title   = $(this),
            $icon    = $title.find('.csf-accordion-icon'),
            $content = $title.next();

        if( $icon.hasClass('fa-angle-right') ) {
          $icon.removeClass('fa-angle-right').addClass('fa-angle-down');
        } else {
          $icon.removeClass('fa-angle-down').addClass('fa-angle-right');
        }

        if( !$content.data( 'opened' ) ) {

          $content.find('.csf-field').removeClass('csf-no-script');
          $content.csf_reload_script('sub');
          $content.data( 'opened', true );

        }

        $content.toggleClass('csf-accordion-open');

      });

    });
  };

  //
  // Field: backup
  //
  $.fn.csf_field_backup = function() {
    return this.each( function() {

      if( window.wp.customize === undefined ) { return; }

      var $this    = $(this),
          $body    = $('body'),
          $import  = $this.find('.csf-import'),
          $reset   = $this.find('.csf-reset'),
          flooding = false;

      $reset.on('click', function( e ) {

        e.preventDefault();

        if( !flooding ) {

          $body.addClass('csf-opacity');

          window.wp.ajax.post( 'csf-reset', {
            unique: $reset.data('unique'),
            nonce: $reset.data('nonce')
          })
          .done( function( response ) {
            window.location.reload(true);
          })
          .fail( function( response ) {
            alert( response.error );
            flooding = false;
            $body.removeClass('csf-opacity');
          });

        }

        flooding = true;

      });

      $import.on('click', function( e ) {

        e.preventDefault();

        if( !flooding ) {

          $body.addClass('csf-opacity');

          window.wp.ajax.post( 'csf-import', {
            unique: $import.data('unique'),
            nonce: $import.data('nonce'),
            import_data: $this.find('.csf-import-data').val()
          }).done( function( response ) {
            window.location.reload(true);
          }).fail( function( response ) {
            alert( response.error );
            flooding = false;
            $body.removeClass('csf-opacity');
          });

        }

        flooding = true;

      });

    });
  };

  //
  // Field: code_editor
  //
  $.fn.csf_field_code_editor = function() {
    return this.each( function() {

      if( typeof CodeMirror !== 'function' ) { return; }

      var $this       = $(this),
          $textarea   = $this.find('textarea'),
          data_editor = $textarea.data('editor'),
          code_editor = CodeMirror.fromTextArea( $textarea[0], data_editor );

      // load code-mirror theme css.
      if( data_editor.theme !== 'default' ) {

        var $cssLink = $('<link>');

        $('#csf-codemirror-css').append( $cssLink );

        $cssLink.attr({
          rel: 'stylesheet',
          type: 'text/css',
          href: data_editor.cdnURL +'/theme/'+ data_editor.theme +'.min.css'
        });

      }

      CodeMirror.modeURL = data_editor.cdnURL +'/mode/%N/%N.min.js';
      CodeMirror.autoLoadMode(code_editor, data_editor.mode);

      code_editor.on( 'change', function( editor, event ) {
        $textarea.val( code_editor.getValue() ).trigger('change');
      });

    });
  };

  //
  // Field: color
  //
  if( typeof Color === 'function' ) {

    Color.fn.toString = function() {

      if ( this._alpha < 1 ) {
        return this.toCSS('rgba', this._alpha).replace(/\s+/g, '');
      }

      var hex = parseInt( this._color, 10 ).toString( 16 );

      if ( this.error ) { return ''; }

      if ( hex.length < 6 ) {
        for (var i = 6 - hex.length - 1; i >= 0; i--) {
          hex = '0' + hex;
        }
      }

      return '#' + hex;

    };

  }

  CSF.funcs.parse_color = function( color ) {

    var value = color.replace(/\s+/g, ''),
        trans = ( value.indexOf('rgba') !== -1 ) ? parseFloat( value.replace(/^.*,(.+)\)/, '$1') * 100 ) : 100,
        rgba  = ( trans < 100 ) ? true : false;

    return { value: value, transparent: trans, rgba: rgba };

  };

  $.fn.csf_field_color = function() {
    return this.each( function() {

      var $this         = $(this),
          $input        = $this.find('.csf-color-picker'),
          $wppicker     = $this.find('.wp-picker-container'),
          picker_color  = CSF.funcs.parse_color( $input.val() ),
          palette_color = window.csf_vars.color_palette.length ? window.csf_vars.color_palette : true,
          $container;

      // Destroy and Reinit
      if( $wppicker.length ) {
        $wppicker.after($input).remove();
      }

      $input.wpColorPicker({
        palettes: palette_color,
        clear: function() {
          $input.trigger('keyup');
        },
        change: function( event, ui ) {

          var ui_color_value = ui.color.toString();

          $container.removeClass('csf--transparent-active');
          $container.find('.csf--transparent-offset').css('background-color', ui_color_value);
          $input.val(ui_color_value).trigger('change');

        },
        create: function() {

          $container = $this.find('.wp-picker-container');

          var a8cIris = $input.data('a8cIris'),
              $transparent_wrap = $('<div class="csf--transparent-wrap">' +
                                '<div class="csf--transparent-slider"></div>' +
                                '<div class="csf--transparent-offset"></div>' +
                                '<div class="csf--transparent-text"></div>' +
                                '<div class="csf--transparent-button button button-small">transparent</div>' +
                                '</div>').appendTo( $container.find('.wp-picker-holder') ),
              $transparent_slider = $transparent_wrap.find('.csf--transparent-slider'),
              $transparent_text   = $transparent_wrap.find('.csf--transparent-text'),
              $transparent_offset = $transparent_wrap.find('.csf--transparent-offset'),
              $transparent_button = $transparent_wrap.find('.csf--transparent-button');

          if( $input.val() === 'transparent' ) {
            $container.addClass('csf--transparent-active');
          }

          $transparent_button.on('click', function() {
            if( $input.val() !== 'transparent' ) {
              $input.val('transparent').trigger('change');
              $container.addClass('csf--transparent-active');
            } else {
              $input.val( a8cIris._color.toString() ).trigger('change');
              $container.removeClass('csf--transparent-active');
            }
          });

          $transparent_slider.slider({
            value: picker_color.transparent,
            step: 1,
            min: 0,
            max: 100,
            slide: function( event, ui ) {

              var slide_value = parseFloat( ui.value / 100 );
              a8cIris._color._alpha = slide_value;
              $input.wpColorPicker( 'color', a8cIris._color.toString() );
              $transparent_text.text( ( slide_value === 1 || slide_value === 0 ? '' : slide_value ) );

            },
            create: function() {

              var slide_value = parseFloat( picker_color.transparent / 100 ),
                  text_value  = slide_value < 1 ? slide_value : '';

              $transparent_text.text(text_value);
              $transparent_offset.css('background-color', picker_color.value);

              $container.on('click', '.wp-picker-clear', function() {

                a8cIris._color._alpha = 1;
                $transparent_text.text('').trigger('change');
                $transparent_slider.slider('option', 'value', 100).trigger('slide');

              });

              $container.on('click', '.wp-picker-default', function() {

                var default_color = CSF.funcs.parse_color( $input.data('default-color') ),
                    default_value = parseFloat( default_color.transparent / 100 ),
                    default_text  = default_value < 1 ? default_value : '';

                a8cIris._color._alpha = default_value;
                $transparent_text.text(default_text);
                $transparent_slider.slider('option', 'value', default_color.transparent).trigger('slide');

              });

              $container.on('click', '.wp-color-result', function() {
                $transparent_wrap.toggle();
              });

              $('body').on( 'click.wpcolorpicker', function() {
                $transparent_wrap.hide();
              });

            }
          });
        }
      });

    });

  };

  //
  // Field: date
  //
  $.fn.csf_field_date = function() {
    return this.each( function() {

      var $this    = $(this),
          $input   = $this.find('input'),
          settings = JSON.parse( $this.find('.csf-datepicker-settings').val() ),
          wrapper  = '<div class="csf-datepicker-wrapper"></div>',
          $datepicker;

      var defaults = {
        beforeShow: function(input, inst) {
          $datepicker = $('#ui-datepicker-div');
          $datepicker.wrap(wrapper);
        },
        onClose: function() {
          var cancelInterval = setInterval( function() {
            if( $datepicker.is( ':hidden' ) ) {
              $datepicker.unwrap(wrapper);
              clearInterval(cancelInterval);
            }
          }, 100 );
        }
      };

      settings = $.extend({}, settings, defaults);

      $input.datepicker(settings);

    });
  };

  //
  // Field: gallery
  //
  $.fn.csf_field_gallery = function() {
    return this.each( function() {

      var $this  = $(this),
          $edit  = $this.find('.csf-edit-gallery'),
          $clear = $this.find('.csf-clear-gallery'),
          $list  = $this.find('ul'),
          $input = $this.find('input'),
          $img   = $this.find('img'),
          wp_media_frame;

      $this.on('click', '.csf-button, .csf-edit-gallery', function( e ) {

        var $el   = $(this),
            ids   = $input.val(),
            what  = ( $el.hasClass('csf-edit-gallery') ) ? 'edit' : 'add',
            state = ( what === 'add' && !ids.length ) ? 'gallery' : 'gallery-edit';

        e.preventDefault();

        if ( typeof window.wp === 'undefined' || ! window.wp.media || ! window.wp.media.gallery ) { return; }

         // Open media with state
        if( state === 'gallery' ) {

          wp_media_frame = window.wp.media({
            library: {
              type: 'image'
            },
            frame: 'post',
            state: 'gallery',
            multiple: true
          });

          wp_media_frame.open();

        } else {

          wp_media_frame = window.wp.media.gallery.edit( '[gallery ids="'+ ids +'"]' );

          if( what === 'add' ) {
            wp_media_frame.setState('gallery-library');
          }

        }

        // Media Update
        wp_media_frame.on( 'update', function( selection ) {

          $list.empty();

          var selectedIds = selection.models.map( function( attachment ) {

            var item  = attachment.toJSON();
            var thumb = ( typeof item.sizes.thumbnail !== 'undefined' ) ? item.sizes.thumbnail.url : item.url;

            $list.append('<li><img src="'+ thumb +'"></li>');

            return item.id;

          });

          $input.val( selectedIds.join( ',' ) ).trigger('change');
          $clear.removeClass('hidden');
          $edit.removeClass('hidden');

        });

      });

      $clear.on('click', function( e ) {
        e.preventDefault();
        $list.empty();
        $input.val('').trigger('change');
        $clear.addClass('hidden');
        $edit.addClass('hidden');
      });

    });

  };

  //
  // Field: group
  //
  $.fn.csf_field_group = function() {
    return this.each( function() {

      var $this    = $(this),
          $wrapper = $this.find('.csf-cloneable-wrapper'),
          $hidden  = $this.find('.csf-cloneable-hidden'),
          $max     = $this.find('.csf-cloneable-max'),
          $min     = $this.find('.csf-cloneable-min'),
          unique   = $wrapper.data('unique-id'),
          max      = parseInt( $wrapper.data('max') ),
          min      = parseInt( $wrapper.data('min') );

      $wrapper.accordion({
        header: '.csf-cloneable-title',
        collapsible : true,
        active: false,
        animate: false,
        heightStyle: 'content',
        icons: {
          'header': 'csf-cloneable-header-icon fa fa-angle-right',
          'activeHeader': 'csf-cloneable-header-icon fa fa-angle-down'
        },
        beforeActivate: function( event, ui ) {

          var $panel  = ui.newPanel;
          var $header = ui.newHeader;

          if( $panel.length && !$panel.data( 'opened' ) ) {

            var $fields = $panel.children();
            var $first  = $fields.first().find(':input').first();
            var $title  = $header.find('.csf-cloneable-value');

            $first.on('change keyup', function( event ) {
              $title.text($first.val());
            });

            $fields.removeClass('csf-no-script');
            $panel.csf_reload_script('sub');
            $panel.data( 'opened', true );
            $panel.data( 'retry', false );

          } else if( $panel.data( 'retry' ) ) {

            $panel.csf_reload_script_retry();
            $panel.data( 'retry', false );

          }

        }
      });

      $wrapper.sortable({
        axis: 'y',
        handle: '.csf-cloneable-title, .csf-cloneable-sort',
        helper: 'original',
        cursor: 'move',
        placeholder: 'widget-placeholder',
        start: function( event, ui ) {

          $wrapper.accordion({ active:false });
          $wrapper.sortable('refreshPositions');
          ui.item.find('.csf-cloneable-content').data('retry', true);

        },
        update: function( event, ui ) {

          CSF.helper.inputs_rename( $wrapper.find('.csf-cloneable-item') );
          $wrapper.csf_customizer_refresh();

        },
      });

      $this.on('click', '.csf-cloneable-add', function( e ) {

        e.preventDefault();

        var count = $wrapper.find('.csf-cloneable-item').length;

        $min.hide();

        if( max && (count+1) > max ) {
          $max.show();
          return;
        }

        var $cloned_item = $hidden.csf_clone().removeClass('csf-cloneable-hidden');

        $cloned_item.find(':input').each( function() {
          this.name = this.name.replace('_nonce', unique).replace('num', count);
        });

        $wrapper.append($cloned_item);
        $wrapper.accordion('refresh');
        $wrapper.accordion({active: count});
        $wrapper.csf_customizer_refresh();
        $wrapper.csf_customizer_listen(true);

      });

      $wrapper.on('click', '.csf-cloneable-clone', function( e ) {

        e.preventDefault();

        var count = $wrapper.find('.csf-cloneable-item').length;

        $min.hide();

        if( max && (count+1) > max ) {
          $max.show();
          return;
        }

        var $this   = $(this),
            $parent = $this.closest('.csf-cloneable-item'),
            $cloned = $parent.csf_clone().addClass('csf-cloned'),
            $childs = $wrapper.children();

        $childs.eq($parent.index()).after($cloned);

        CSF.helper.inputs_rename( $wrapper.find('.csf-cloneable-item') );

        $wrapper.accordion('refresh');
        $wrapper.csf_customizer_refresh();
        $wrapper.csf_customizer_listen(true);

      });

      $wrapper.on('click', '.csf-cloneable-remove', function( e ) {

        e.preventDefault();

        var count = $wrapper.find('.csf-cloneable-item').length;

        $max.hide();
        $min.hide();

        if( min && (count-1) < min ) {
          $min.show();
          return;
        }

        $(this).closest('.csf-cloneable-item').remove();

        CSF.helper.inputs_rename( $wrapper.find('.csf-cloneable-item') );

        $wrapper.csf_customizer_refresh();

      });

    });
  };

  //
  // Field: icon
  //
  $.fn.csf_field_icon = function() {

    return this.each( function() {

      var $this = $(this);

      $this.on('click', '.csf-icon-add', function( e ) {

        e.preventDefault();

        var $button = $(this);
        var $modal  = $('#csf-modal-icon');

        $modal.show();

        CSF.vars.$icon_target = $this;

        if( !CSF.vars.icon_modal_loaded ) {

          $modal.find('.csf-modal-loading').show();

          window.wp.ajax.post( 'csf-get-icons', { nonce: $button.data('nonce') } ).done( function( response ) {

            $modal.find('.csf-modal-loading').hide();

            CSF.vars.icon_modal_loaded = true;

            var $load = $modal.find('.csf-modal-load').html( response.content );

            $load.on('click', 'a', function( e ) {

              e.preventDefault();

              var icon = $(this).data('csf-icon');

              CSF.vars.$icon_target.find('i').removeAttr('class').addClass(icon);
              CSF.vars.$icon_target.find('input').val(icon).trigger('change');
              CSF.vars.$icon_target.find('.csf-icon-preview').removeClass('hidden');
              CSF.vars.$icon_target.find('.csf-icon-remove').removeClass('hidden');

              $modal.hide();

            });

            $modal.on('change keyup', '.csf-icon-search', function() {

              var value  = $(this).val(),
                  $icons = $load.find('a');

              $icons.each( function() {

                var $elem = $(this);

                if ( $elem.data('csf-icon').search( new RegExp( value, 'i' ) ) < 0 ) {
                  $elem.hide();
                } else {
                  $elem.show();
                }

              });

            });

            $modal.on('click', '.csf-modal-close, .csf-modal-overlay', function() {

              $modal.hide();

            });

          });

        }

      });

      $this.on('click', '.csf-icon-remove', function( e ) {

        e.preventDefault();

        $this.find('.csf-icon-preview').addClass('hidden');
        $this.find('input').val('').trigger('change');
        $(this).addClass('hidden');

      });

    });
  };

  //
  // Field: media
  //
  $.fn.csf_field_media = function() {
    return this.each( function() {

      var $this          = $(this),
          $upload_button = $this.find('.csf--button'),
          $remove_button = $this.find('.csf--remove'),
          wp_media_frame;

      $upload_button.on('click', function( e ) {

        e.preventDefault();

        if ( typeof window.wp === 'undefined' || ! window.wp.media || ! window.wp.media.gallery ) {
          return;
        }

        if ( wp_media_frame ) {
          wp_media_frame.open();
          return;
        }

        wp_media_frame = window.wp.media({
          library: {
            type: $upload_button.data('library').split(',')
          }
        });

        wp_media_frame.on( 'select', function() {

          var thumbnail;
          var attributes   = wp_media_frame.state().get('selection').first().attributes;
          var preview_size = $upload_button.data('preview-size') || 'thumbnail';

          $this.find('.csf--url').val( attributes.url );
          $this.find('.csf--id').val( attributes.id );
          $this.find('.csf--width').val( attributes.width );
          $this.find('.csf--height').val( attributes.height );
          $this.find('.csf--alt').val( attributes.alt );
          $this.find('.csf--title').val( attributes.title );
          $this.find('.csf--description').val( attributes.description );

          if( typeof attributes.sizes !== 'undefined' && typeof attributes.sizes.thumbnail !== 'undefined' && preview_size === 'thumbnail' ) {
            thumbnail = attributes.sizes.thumbnail.url;
          } else if( typeof attributes.sizes !== 'undefined' && typeof attributes.sizes.full !== 'undefined' ) {
            thumbnail = attributes.sizes.full.url;
          } else {
            thumbnail = attributes.icon;
          }

          $remove_button.removeClass('hidden');
          $this.find('.csf--preview').removeClass('hidden');
          $this.find('.csf--src').attr('src', thumbnail);
          $this.find('.csf--thumbnail').val( thumbnail ).trigger('change');

        });

        wp_media_frame.open();

      });

      $remove_button.on('click', function( e ) {
        e.preventDefault();
        $remove_button.addClass('hidden');
        $this.find('.csf--preview').addClass('hidden');
        $this.find('input').val('');
        $this.find('.csf--thumbnail').trigger('change');
      });

    });

  };

  //
  // Field: repeater
  //
  $.fn.csf_field_repeater = function() {
    return this.each( function() {

      var $this    = $(this),
          $wrapper = $this.find('.csf-cloneable-wrapper'),
          $hidden  = $this.find('.csf-cloneable-hidden'),
          $max     = $this.find('.csf-cloneable-max'),
          $min     = $this.find('.csf-cloneable-min'),
          unique   = $wrapper.data('unique-id'),
          max      = parseInt( $wrapper.data('max') ),
          min      = parseInt( $wrapper.data('min') );

      $wrapper.sortable({
        axis: 'y',
        handle: '.csf-cloneable-sort',
        helper: 'original',
        cursor: 'move',
        placeholder: 'widget-placeholder',
        update: function( event, ui ) {

          CSF.helper.inputs_rename( $wrapper.find('.csf-cloneable-item') );
          $wrapper.csf_customizer_refresh();
          ui.item.csf_reload_script_retry();

        }
      });

      $this.on('click', '.csf-cloneable-add', function( e ) {

        e.preventDefault();

        var count = $wrapper.find('.csf-cloneable-item').length;

        $min.hide();

        if( max && (count+1) > max ) {
          $max.show();
          return;
        }

        var $cloned = $hidden.csf_clone().removeClass('csf-cloneable-hidden');

        $wrapper.append($cloned);

        $cloned.find(':input').each( function() {
          this.name = this.name.replace('_nonce', unique).replace('num', count);
        });

        $cloned.find('.csf-field').removeClass('csf-no-script');
        $cloned.csf_reload_script('sub');

        $wrapper.csf_customizer_refresh();
        $wrapper.csf_customizer_listen(true);

      });

      $wrapper.on('click', '.csf-cloneable-clone', function( e ) {

        e.preventDefault();

        var count = $wrapper.find('.csf-cloneable-item').length;

        $min.hide();

        if( max && (count+1) > max ) {
          $max.show();
          return;
        }

        var $this   = $(this),
            $parent = $this.closest('.csf-cloneable-item'),
            $index  = $parent.index(),
            $cloned = $parent.csf_clone(),
            $childs = $wrapper.children();

        $childs.eq($index).after($cloned);

        $cloned.addClass('csf-cloned').csf_reload_script('sub');

        CSF.helper.inputs_rename( $wrapper.find('.csf-cloneable-item') );

        $wrapper.csf_customizer_refresh();
        $wrapper.csf_customizer_listen(true);

      });

      $wrapper.on('click', '.csf-cloneable-remove', function( e ) {

        e.preventDefault();

        var count = $wrapper.find('.csf-cloneable-item').length;

        $max.hide();
        $min.hide();

        if( min && (count-1) < min ) {
          $min.show();
          return;
        }

        $(this).closest('.csf-cloneable-item').remove();

        CSF.helper.inputs_rename( $wrapper );

        $wrapper.csf_customizer_refresh();

      });

    });
  };

  //
  // Field: slider
  //
  $.fn.csf_field_slider = function() {
    return this.each( function() {

      var $this   = $(this),
          $input  = $this.find('input'),
          $slider = $this.find('.csf-slider-ui'),
          data    = $input.data(),
          value   = $input.val() || 0;

      $slider.slider({
        range: 'min',
        value: value,
        min: data.min,
        max: data.max,
        step: data.step,
        slide: function( e, o ) {
          $input.val( o.value ).trigger('change');
        }
      });

      $input.keyup( function() {
        $slider.slider('value', $input.val());
      });

    });
  };

  //
  // Field: sortable
  //
  $.fn.csf_field_sortable = function() {
    return this.each( function() {

      var $sortable = $(this).find('.csf--sortable');

      $sortable.sortable({
        axis: 'y',
        helper: 'original',
        cursor: 'move',
        placeholder: 'widget-placeholder',
        update: function( event, ui ) {
          $sortable.csf_customizer_refresh();
        }
      });

    });
  };

  //
  // Field: sorter
  //
  $.fn.csf_field_sorter = function() {
    return this.each( function() {

      var $this         = $(this),
          $enabled      = $this.find('.csf-enabled'),
          $has_disabled = $this.find('.csf-disabled'),
          $disabled     = ( $has_disabled.length ) ? $has_disabled : false;

      $enabled.sortable({
        connectWith: $disabled,
        placeholder: 'ui-sortable-placeholder',
        update: function( event, ui ) {

          var $el = ui.item.find('input');

          if( ui.item.parent().hasClass('csf-enabled') ) {
            $el.attr('name', $el.attr('name').replace('disabled', 'enabled'));
          } else {
            $el.attr('name', $el.attr('name').replace('enabled', 'disabled'));
          }

          $this.csf_customizer_refresh();

        }
      });

      if( $disabled ) {

        $disabled.sortable({
          connectWith: $enabled,
          placeholder: 'ui-sortable-placeholder'
        });

      }

    });
  };

  //
  // Field: spinner
  //
  $.fn.csf_field_spinner = function() {
    return this.each( function() {

      var $this = $(this),
          $input = $this.find('input');

      $input.spinner({
        max: $input.data('max') || 100,
        min: $input.data('min') || 0,
        step: $input.data('step') || 1,
        spin: function (event, ui ) {
          $input.val(ui.value).trigger('change');
        }
      });


    });
  };

  //
  // Field: switcher
  //
  $.fn.csf_field_switcher = function() {
    return this.each( function() {

      var $switcher = $(this).find('.csf--switcher');

      $switcher.on('click', function() {

        var value  = 0;
        var $input = $switcher.find('input');

        if( $switcher.hasClass('csf--active') ) {
          $switcher.removeClass('csf--active');
        } else {
          value = 1;
          $switcher.addClass('csf--active');
        }

        $input.val(value).trigger('change');

      });

    });
  };

  //
  // Field: tabbed
  //
  $.fn.csf_field_tabbed = function() {
    return this.each( function() {

      var $this    = $(this),
          $links   = $this.find('.csf-tabbed-nav a'),
          $section = $this.find('.csf-tabbed-section');

      $links.on( 'click', function( e ) {

       e.preventDefault();

        var $link = $(this),
            index = $link.index();

        $link.addClass('csf-tabbed-active').siblings().removeClass('csf-tabbed-active');
        $section.eq(index).removeClass('hidden').siblings().addClass('hidden');

      });

    });
  };

  //
  // Field: typography
  //
  $.fn.csf_field_typography = function() {
    return this.each(function () {

      var base          = this;
      var $this         = $(this);
      var loaded_fonts  = [];
      var webfonts      = csf_typography_json.webfonts;
      var googlestyles  = csf_typography_json.googlestyles;
      var defaultstyles = csf_typography_json.defaultstyles;

      //
      //
      // Sanitize google font subset
      base.sanitize_subset = function( subset ) {
        subset = subset.replace('-ext', ' Extended');
        subset = subset.charAt(0).toUpperCase() + subset.slice(1);
        return subset;
      };

      //
      //
      // Sanitize google font styles (weight and style)
      base.sanitize_style = function( style ) {
        return googlestyles[style] ? googlestyles[style] : style;
      };

      //
      //
      // Load google font
      base.load_google_font = function( font_family, weight, style ) {

        if( font_family && typeof WebFont === 'object' ) {

          weight = weight ? weight.replace('normal', '') : '';
          style  = style ? style.replace('normal', '') : '';

          if( weight || style ) {
            font_family = font_family +':'+ weight + style;
          }

          if ( loaded_fonts.indexOf( font_family ) === -1 ) {
            WebFont.load({ google: { families: [font_family] } });
          }

          loaded_fonts.push( font_family );

        }

      };

      //
      //
      // Append select options
      base.append_select_options = function( $select, options, condition, type, is_multi ) {

        $select.find('option').not(':first').remove();

        var opts = '';

        $.each( options, function( key, value ) {

          var selected;
          var name = value;

          // is_multi
          if( is_multi ) {
            selected = ( condition && condition.indexOf(value) !== -1 ) ? ' selected' : '';
          } else {
            selected = ( condition && condition === value ) ? ' selected' : '';
          }

          if( type === 'subset' ) {
            name = base.sanitize_subset( value );
          } else if( type === 'style' ){
            name = base.sanitize_style( value );
          }

          opts += '<option value="'+ value +'"'+ selected +'>'+ name +'</option>';

        });

        $select.append(opts).trigger('csf.change').trigger('chosen:updated');

      };

      base.init = function () {

        //
        //
        // Constants
        var selected_styles = [];
        var $typography     = $this.find('.csf--typography');
        var $type           = $this.find('.csf--type');
        var unit            = $typography.data('unit');
        var exclude_fonts   = $typography.data('exclude') ? $typography.data('exclude').split(',') : [];

        //
        //
        // Chosen init
        if( $this.find('.csf--chosen').length ) {
          $this.find('select').chosen({
            allow_single_deselect: true,
            disable_search_threshold: 15,
            width: '100%'
          });
        }

        //
        //
        // Font family select
        var $font_family_select = $this.find('.csf--font-family');
        var first_font_family   = $font_family_select.val();

        // Clear default font family select options
        $font_family_select.find('option').not(':first-child').remove();

        var opts = '';

        $.each(webfonts, function( type, group ) {

          // Check for exclude fonts
          if( exclude_fonts && exclude_fonts.indexOf(type) !== -1 ) { return; }

          opts += '<optgroup label="' + group.label + '">';

          $.each(group.fonts, function( key, value ) {

            // use key if value is object
            value = ( typeof value === 'object' ) ? key : value;
            var selected = ( value === first_font_family ) ? ' selected' : '';
            opts += '<option value="'+ value +'" data-type="'+ type +'"'+ selected +'>'+ value +'</option>';

          });

          opts += '</optgroup>';

        });

        // Append google font select options
        $font_family_select.append(opts).trigger('chosen:updated');

        //
        //
        // Font style select
        var $font_style_block = $this.find('.csf--block-font-style');

        if( $font_style_block.length ) {

          var $font_style_select = $this.find('.csf--font-style-select');
          var first_style_value  = $font_style_select.val() ? $font_style_select.val().replace(/normal/g, '' ) : '';

          //
          // Font Style on on change listener
          $font_style_select.on('change csf.change', function( event ) {

            var style_value = $font_style_select.val();

            // set a default value
            if( !style_value && selected_styles && selected_styles.indexOf('normal') === -1 ) {
              style_value = selected_styles[0];
            }

            // set font weight, for eg. replacing 800italic to 800
            var font_normal = ( style_value && style_value !== 'italic' && style_value === 'normal' ) ? 'normal' : '';
            var font_weight = ( style_value && style_value !== 'italic' && style_value !== 'normal' ) ? style_value.replace('italic', '') : font_normal;
            var font_style  = ( style_value && style_value.substr(-6) === 'italic' ) ? 'italic' : '';

            $this.find('.csf--font-weight').val( font_weight );
            $this.find('.csf--font-style').val( font_style );

          });

          //
          //
          // Extra font style select
          var $extra_font_style_block = $this.find('.csf--block-extra-styles');

          if( $extra_font_style_block.length ) {
            var $extra_font_style_select = $this.find('.csf--extra-styles');
            var first_extra_style_value  = $extra_font_style_select.val();
          }

        }

        //
        //
        // Subsets select
        var $subset_block = $this.find('.csf--block-subset');
        if( $subset_block.length ) {
          var $subset_select = $this.find('.csf--subset');
          var first_subset_select_value = $subset_select.val();
          var subset_multi_select = $subset_select.data('multiple') || false;
        }

        //
        //
        // Backup font family
        var $backup_font_family_block = $this.find('.csf--block-backup-font-family');

        //
        //
        // Font Family on Change Listener
        $font_family_select.on('change csf.change', function( event ) {

          // Hide subsets on change
          if( $subset_block.length ) {
            $subset_block.addClass('hidden');
          }

          // Hide extra font style on change
          if( $extra_font_style_block.length ) {
            $extra_font_style_block.addClass('hidden');
          }

          // Hide backup font family on change
          if( $backup_font_family_block.length ) {
            $backup_font_family_block.addClass('hidden');
          }

          var $selected = $font_family_select.find(':selected');
          var value     = $selected.val();
          var type      = $selected.data('type');

          if( type && value ) {

            // Show backup fonts if font type google or custom
            if( ( type === 'google' || type === 'custom' ) && $backup_font_family_block.length ) {
              $backup_font_family_block.removeClass('hidden');
            }

            // Appending font style select options
            if( $font_style_block.length ) {

              // set styles for multi and normal style selectors
              var styles = defaultstyles;

              // Custom or gogle font styles
              if( type === 'google' && webfonts[type].fonts[value][0] ) {
                styles = webfonts[type].fonts[value][0];
              } else if ( type === 'custom' && webfonts[type].fonts[value] ) {
                styles = webfonts[type].fonts[value];
              }

              selected_styles = styles;

              // Set selected style value for avoid load errors
              var set_auto_style  = ( styles.indexOf('normal') !== -1 ) ? 'normal' : styles[0];
              var set_style_value = ( first_style_value && styles.indexOf(first_style_value) !== -1 ) ? first_style_value : set_auto_style;

              // Append style select options
              base.append_select_options( $font_style_select, styles, set_style_value, 'style' );

              // Clear first value
              first_style_value = false;

              // Show style select after appended
              $font_style_block.removeClass('hidden');

              // Appending extra font style select options
              if( type === 'google' && $extra_font_style_block.length && styles.length > 1 ) {

                // Append extra-style select options
                base.append_select_options( $extra_font_style_select, styles, first_extra_style_value, 'style', true );

                // Clear first value
                first_extra_style_value = false;

                // Show style select after appended
                $extra_font_style_block.removeClass('hidden');

              }

            }

            // Appending google fonts subsets select options
            if( type === 'google' && $subset_block.length && webfonts[type].fonts[value][1] ) {

              var subsets          = webfonts[type].fonts[value][1];
              var set_auto_subset  = ( subsets.length < 2 && subsets[0] !== 'latin' ) ? subsets[0] : '';
              var set_subset_value = ( first_subset_select_value && subsets.indexOf(first_subset_select_value) !== -1 ) ? first_subset_select_value : set_auto_subset;

              // check for multiple subset select
              set_subset_value = ( subset_multi_select && first_subset_select_value ) ? first_subset_select_value : set_subset_value;

              base.append_select_options( $subset_select, subsets, set_subset_value, 'subset', subset_multi_select );

              first_subset_select_value = false;

              $subset_block.removeClass('hidden');

            }

          } else {

            // Clear subsets options if type and value empty
            if( $subset_block.length ) {
              $subset_select.find('option').not(':first-child').remove();
              $subset_select.trigger('chosen:updated');
            }

            // Clear font styles options if type and value empty
            if( $font_style_block.length ) {
              $font_style_select.find('option').not(':first-child').remove();
              $font_style_select.trigger('chosen:updated');
            }

          }

          // Update font type input value
          $type.val(type);

        }).trigger('csf.change');

        //
        //
        // Preview
        var $preview_block = $this.find('.csf--block-preview');

        if( $preview_block.length ) {

          var $preview = $this.find('.csf--preview');

          // Set preview styles on change
          $this.on('change', CSF.helper.debounce( function( event ) {

            $preview_block.removeClass('hidden');

            var font_family       = $font_family_select.val(),
                font_weight       = $this.find('.csf--font-weight').val(),
                font_style        = $this.find('.csf--font-style').val(),
                font_size         = $this.find('.csf--font-size').val(),
                font_variant      = $this.find('.csf--font-variant').val(),
                line_height       = $this.find('.csf--line-height').val(),
                text_align        = $this.find('.csf--text-align').val(),
                text_transform    = $this.find('.csf--text-transform').val(),
                text_decoration   = $this.find('.csf--text-decoration').val(),
                text_color        = $this.find('.csf--color').val(),
                word_spacing      = $this.find('.csf--word-spacing').val(),
                letter_spacing    = $this.find('.csf--letter-spacing').val(),
                custom_style      = $this.find('.csf--custom-style').val(),
                type              = $this.find('.csf--type').val();

            if( type === 'google' ) {
              base.load_google_font(font_family, font_weight, font_style);
            }

            var properties = {};

            if( font_family     ) { properties.fontFamily     = font_family;           }
            if( font_weight     ) { properties.fontWeight     = font_weight;           }
            if( font_style      ) { properties.fontStyle      = font_style;            }
            if( font_variant    ) { properties.fontVariant    = font_variant;          }
            if( font_size       ) { properties.fontSize       = font_size + unit;      }
            if( line_height     ) { properties.lineHeight     = line_height + unit;    }
            if( letter_spacing  ) { properties.letterSpacing  = letter_spacing + unit; }
            if( word_spacing    ) { properties.wordSpacing    = word_spacing + unit;   }
            if( text_align      ) { properties.textAlign      = text_align;            }
            if( text_transform  ) { properties.textTransform  = text_transform;        }
            if( text_decoration ) { properties.textDecoration = text_decoration;       }
            if( text_color      ) { properties.color          = text_color;            }

            $preview.removeAttr('style');

            // Customs style attribute
            if( custom_style ) { $preview.attr('style', custom_style); }

            $preview.css(properties);

          }, 100 ) );

          // Preview black and white backgrounds trigger
          $preview_block.on('click', function() {

            $preview.toggleClass('csf--black-background');

            var $toggle = $preview_block.find('.csf--toggle');

            if( $toggle.hasClass('fa-toggle-off') ) {
              $toggle.removeClass('fa-toggle-off').addClass('fa-toggle-on');
            } else {
              $toggle.removeClass('fa-toggle-on').addClass('fa-toggle-off');
            }

          });

          if( !$preview_block.hasClass('hidden') ) {
            $this.trigger('change');
          }

        }

      };

      base.init();

    });
  };

  //
  // Field: upload
  //
  $.fn.csf_field_upload = function() {
    return this.each( function() {

      var $this          = $(this),
          $input         = $this.find('input'),
          $upload_button = $this.find('.csf--button'),
          $remove_button = $this.find('.csf--remove'),
          $library       = $upload_button.data('library') && $upload_button.data('library').split(','),
          wp_media_frame;

      $input.on('change', function( e ) {
        if( $input.val() ) {
          $remove_button.removeClass('hidden');
        } else {
          $remove_button.addClass('hidden');
        }
      });

      $upload_button.on('click', function( e ) {

        e.preventDefault();

        if ( typeof window.wp === 'undefined' || ! window.wp.media || ! window.wp.media.gallery ) {
          return;
        }

        if ( wp_media_frame ) {
          wp_media_frame.open();
          return;
        }

        wp_media_frame = window.wp.media({
          library: {
            type: $upload_button.data('library').split(',')
          },
        });

        wp_media_frame.on( 'select', function() {
          $input.val( wp_media_frame.state().get('selection').first().attributes.url ).trigger('change');
        });

        wp_media_frame.open();

      });

      $remove_button.on('click', function( e ) {
        e.preventDefault();
        $input.val('').trigger('change');
      });

    });

  };

  //
  // Confirm
  //
  $.fn.csf_confirm = function() {
    return this.each( function() {
      $(this).on('click', function( e ) {
        if ( !confirm('Are you sure?') ) {
          e.preventDefault();
        }
      });
    });
  };

  $.fn.serializeObject = function(){
    var obj = {};

    $.each( this.serializeArray(), function(i,o){
      var n = o.name,
        v = o.value;

        obj[n] = obj[n] === undefined ? v
          : $.isArray( obj[n] ) ? obj[n].concat( v )
          : [ obj[n], v ];
    });

    return obj;
  };

  //
  // Options Save
  //
  $.fn.csf_save = function() {
    return this.each( function() {

      var $this    = $(this),
          $buttons = $('.csf-save'),
          $panel   = $('.csf-options'),
          flooding = false,
          timeout;

      $this.on('click', function( e ) {

        if( !flooding ) {

          var $text  = $this.data('save'),
              $value = $this.val();

          $buttons.attr('value', $text);

          if( $this.hasClass('csf-save-ajax') ) {

            e.preventDefault();

            $panel.addClass('csf-saving');
            $buttons.prop('disabled', true);

            window.wp.ajax.post( 'csf_'+ $panel.data('unique') +'_ajax_save', {
              data: $('#csf-form').serializeJSONCSF()
            })
            .done( function( response ) {

              clearTimeout(timeout);

              var $result_success = $('.csf-form-success');

              $result_success.empty().append(response.notice).slideDown('fast', function() {
                timeout = setTimeout( function() {
                  $result_success.slideUp('fast');
                }, 2000);
              });

              // clear errors
              $('.csf-error').remove();

              var $append_errors = $('.csf-form-error');

              $append_errors.empty().hide();

              if( Object.keys( response.errors ).length ) {

                var error_icon = '<i class="csf-label-error csf-error">!</i>';

                $.each(response.errors, function( key, error_message ) {

                  var $field = $('[data-depend-id="'+ key +'"]'),
                      $link  = $('#csf-tab-link-'+ ($field.closest('.csf-section').index()+1)),
                      $tab   = $link.closest('.csf-tab-depth-0');

                  $field.closest('.csf-fieldset').append( '<p class="csf-text-error csf-error">'+ error_message +'</p>' );

                  if( !$link.find('.csf-error').length ) {
                    $link.append( error_icon );
                  }

                  if( !$tab.find('.csf-arrow .csf-error').length ) {
                    $tab.find('.csf-arrow').append( error_icon );
                  }

                  console.log(error_message);

                  $append_errors.append( '<div>'+ error_icon +' '+ error_message + '</div>' );

                });

                $append_errors.show();

              }

              $panel.removeClass('csf-saving');
              $buttons.prop('disabled', false).attr('value', $value);
              flooding = false;

            })
            .fail( function( response ) {
              alert( response.error );
            });

          }

        }

        flooding = true;

      });

    });
  };

  //
  // Taxonomy Framework
  //
  $.fn.csf_taxonomy = function() {
    return this.each( function() {

      var $this   = $(this),
          $parent = $this.parent();

      if( $parent.attr('id') === 'addtag' ) {

        var $submit  = $parent.find('#submit'),
            $clone   = $this.find('.csf-field').csf_clone(),
            $list    = $('#the-list'),
            flooding = false;

        $submit.on( 'click', function() {

          if( !flooding ) {

            $list.on( 'DOMNodeInserted', function() {

              if( flooding ) {

                $this.empty();
                $this.html( $clone );
                $clone = $clone.csf_clone();

                $this.csf_reload_script();

                flooding = false;

              }

            });

          }

          flooding = true;

        });

      }

    });
  };

  //
  // Shortcode Framework
  //
  $.fn.csf_shortcode = function() {

    var base = this;

    base.shortcode_parse = function( serialize, key ) {

      var shortcode = '';

      $.each(serialize, function( shortcode_key, shortcode_values ) {

        key = ( key ) ? key : shortcode_key;

        shortcode += '[' + key;

        $.each(shortcode_values, function( shortcode_tag, shortcode_value ) {

          if( shortcode_tag === 'content' ) {

            shortcode += ']';
            shortcode += shortcode_value;
            shortcode += '[/'+ key +'';

          } else {

            shortcode += base.shortcode_tags( shortcode_tag, shortcode_value );

          }

        });

        shortcode += ']';

      });

      return shortcode;

    };

    base.shortcode_tags = function( shortcode_tag, shortcode_value ) {

      var shortcode = '';

      if( shortcode_value !== '' ) {

        if( typeof shortcode_value === 'object' && !$.isArray( shortcode_value ) ) {

          $.each(shortcode_value, function( sub_shortcode_tag, sub_shortcode_value ) {

            // sanitize spesific key/value
            switch( sub_shortcode_tag ) {

              case 'background-image':
                sub_shortcode_value = ( sub_shortcode_value.url  ) ? sub_shortcode_value.url : '';
              break;

            }

            if( sub_shortcode_value !== '' ) {
              shortcode += ' ' + sub_shortcode_tag.replace('-', '_') + '="' + sub_shortcode_value.toString() + '"';
            }

          });

        } else {

          shortcode += ' ' + shortcode_tag.replace('-', '_') + '="' + shortcode_value.toString() + '"';

        }

      }

      return shortcode;

    };

    base.insertAtChars = function( _this, currentValue ) {

      var obj = ( typeof _this[0].name !== 'undefined' ) ? _this[0] : _this;

      if ( obj.value.length && typeof obj.selectionStart !== 'undefined' ) {
        obj.focus();
        return obj.value.substring( 0, obj.selectionStart ) + currentValue + obj.value.substring( obj.selectionEnd, obj.value.length );
      } else {
        obj.focus();
        return currentValue;
      }

    };

    base.send_to_editor = function( html, editor_id ) {

      var tinymce_editor;

      if ( typeof tinymce !== 'undefined' ) {
        tinymce_editor = tinymce.get( editor_id );
      }

      if ( tinymce_editor && !tinymce_editor.isHidden() ) {
        tinymce_editor.execCommand( 'mceInsertContent', false, html );
      } else {
        var $editor = $('#'+editor_id);
        $editor.val( base.insertAtChars( $editor, html ) ).trigger('change');
      }

    };

    return this.each( function() {

      var $modal   = $(this),
          $load    = $modal.find('.csf-modal-load'),
          $content = $modal.find('.csf-modal-content'),
          $insert  = $modal.find('.csf-modal-insert'),
          $loading = $modal.find('.csf-modal-loading'),
          $select  = $modal.find('select'),
          modal_id = $modal.data('modal-id'),
          nonce    = $modal.data('nonce'),
          editor_id,
          target_id,
          gutenberg_id,
          sc_key,
          sc_name,
          sc_view,
          sc_group,
          $cloned,
          $button;

      $(document).on('click', '.csf-shortcode-button[data-modal-id="'+ modal_id +'"]', function( e ) {

        e.preventDefault();

        $button      = $(this);
        editor_id    = $button.data('editor-id')    || false;
        target_id    = $button.data('target-id')    || false;
        gutenberg_id = $button.data('gutenberg-id') || false;

        $modal.show();

        // single usage trigger first shortcode
        if( $modal.hasClass('csf-shortcode-single') && sc_name === undefined ) {
          $select.trigger('change');
        }

      });

      $select.on( 'change', function() {

        var $option   = $(this);
        var $selected = $option.find(':selected');

        sc_key   = $option.val();
        sc_name  = $selected.data('shortcode');
        sc_view  = $selected.data('view') || 'normal';
        sc_group = $selected.data('group') || sc_name;

        $load.empty();

        if( sc_key ) {

          $loading.show();

          window.wp.ajax.post( 'csf-get-shortcode-'+ modal_id, {
            shortcode_key: sc_key,
            nonce: nonce
          })
          .done( function( response ) {

            $loading.hide();

            var $appended = $(response.content).appendTo($load);

            $insert.parent().removeClass('hidden');

            $cloned = $appended.find('.csf--repeat-shortcode').csf_clone();

            $appended.csf_reload_script('sub');

          });

        } else {

          $insert.parent().addClass('hidden');

        }

      });

      $insert.on('click', function( e ) {

        e.preventDefault();

        var shortcode = '';
        var serialize = $modal.find('.csf-field:not(.hidden)').find(':input').serializeObjectCSF();

        switch ( sc_view ) {

          case 'contents':
            var contentsObj = ( sc_name ) ? serialize[sc_name] : serialize;
            $.each(contentsObj, function( sc_key, sc_value ) {
              var sc_tag = ( sc_name ) ? sc_name : sc_key;
              shortcode += '['+ sc_tag +']'+ sc_value +'[/'+ sc_tag +']';
            });
          break;

          case 'group':

            shortcode += '[' + sc_name;
            $.each(serialize[sc_name], function( sc_key, sc_value ) {
              shortcode += base.shortcode_tags( sc_key, sc_value );
            });
            shortcode += ']';
            shortcode += base.shortcode_parse( serialize[sc_group], sc_group );
            shortcode += '[/' + sc_name + ']';

          break;

          case 'repeater':
            shortcode += base.shortcode_parse( serialize[sc_group], sc_group );
          break;

          default:
            shortcode += base.shortcode_parse( serialize );
          break;

        }

        if( gutenberg_id ) {

          var content = window.csf_gutenberg_props.attributes.hasOwnProperty('shortcode') ? window.csf_gutenberg_props.attributes.shortcode : '';
          window.csf_gutenberg_props.setAttributes({shortcode: content + shortcode});

        } else if ( editor_id ) {

          base.send_to_editor( shortcode, editor_id );

        } else {

          var $textarea = (target_id) ? $(target_id) : $button.parent().find('textarea');
          $textarea.val( base.insertAtChars( $textarea, shortcode ) ).trigger('change');

        }

        $modal.hide();

      });

      $modal.on('click', '.csf--repeat-button', function( e ) {

        e.preventDefault();

        var $repeatable = $modal.find('.csf--repeatable');
        var $new_clone  = $cloned.csf_clone();
        var $remove_btn = $new_clone.find('.csf--remove');

        $new_clone.appendTo( $repeatable );

        $new_clone.csf_reload_script('sub');

        CSF.helper.inputs_rename( $modal.find('.csf--repeat-shortcode') );

        $remove_btn.on('click', function() {

          $new_clone.remove();

          CSF.helper.inputs_rename( $modal.find('.csf--repeat-shortcode') );

        });

      });

      $modal.on('click', '.csf-modal-close, .csf-modal-overlay', function() {
        $modal.hide();
      });

    });
  };

  //
  // Helper Checkbox Checker
  //
  $.fn.csf_checker = function() {
    return this.each( function() {

      var $this = $(this);

      $this.on('click', function() {

        var value     = 0;
        var $input    = $this.find('.csf--input');
        var $checkbox = $this.find('.csf--checkbox');

        if( $input.val() === '1' ) {
          value = 0;
          $checkbox.prop('checked', false);
        } else {
          value = 1;
          $checkbox.prop('checked', true);
        }

        $input.val(value).trigger('change');

      });

    });
  };

  //
  // Helper Siblings
  //
  $.fn.csf_siblings = function() {
    return this.each( function() {

      var $this     = $(this),
          $siblings = $this.find('.csf--sibling'),
          multiple  = $this.data('multiple') || false;

      $siblings.on('click', function() {

        var $sibling = $(this);

        if( multiple ) {

          if( $sibling.hasClass('csf--active') ) {
            $sibling.removeClass('csf--active');
            $sibling.find('input').prop('checked', false).trigger('change');
          } else {
            $sibling.addClass('csf--active');
            $sibling.find('input').prop('checked', true).trigger('change');
          }

        } else {

          $this.find('input').prop('checked', false);
          $sibling.find('input').prop('checked', true).trigger('change');
          $sibling.addClass('csf--active').siblings().removeClass('csf--active');

        }

      });

    });
  };

  //
  // Chosen
  //
  $.fn.csf_chosen = function() {
    return this.each( function() {

      $(this).chosen({
        allow_single_deselect: true,
        disable_search_threshold: 15,
        width: '100%'
      });

    });
  };

  //
  // Helper Tooltip
  //
  $.fn.csf_tooltip = function() {
    return this.each( function() {

      var $this = $(this),
          $tooltip,
          offset_left;

      $this.on({
        mouseenter: function() {

          $tooltip = $( '<div class="csf-tooltip"></div>' ).html( $this.find('.csf-help-text').html() ).appendTo('body');
          offset_left = ( CSF.vars.is_rtl ) ? ( $this.offset().left + 24 ) : ( $this.offset().left - $tooltip.outerWidth() );

          $tooltip.css({
            top: $this.offset().top - ( ( $tooltip.outerHeight() / 2 ) - 14 ),
            left: offset_left,
          });

        },
        mouseleave: function() {

          if( $tooltip !== undefined ) {
            $tooltip.remove();
          }

        }

      });

    });
  };

  //
  // Customize Refresh
  //
  $.fn.csf_customizer_refresh = function() {
    return this.each( function() {

      var $this    = $(this),
          $complex = $this.closest('.csf-customize-complex');

      $(document).trigger('csf-customizer-refresh', $this);

      if( window.wp.customize === undefined || $complex.length === 0 ) { return; }

      var $input  = $complex.find(':input'),
          $unique = $complex.data('unique-id'),
          $option = $complex.data('option-id'),
          obj     = $input.serializeObjectCSF(),
          data    = ( !$.isEmptyObject(obj) ) ? obj[$unique][$option] : '';

      window.wp.customize.control( $unique +'['+ $option +']' ).setting.set( data );

    });
  };

  //
  // Customize Listen Form Elements
  //
  $.fn.csf_customizer_listen = function( has_closest ) {
    return this.each( function() {

      if( window.wp.customize === undefined ) { return; }

      var $this   = ( has_closest ) ? $(this).closest('.csf-customize-complex') : $(this),
          $input  = $this.find(':input'),
          $unique = $this.data('unique-id'),
          $option = $this.data('option-id');

      if( $unique === undefined ) { return; }

      $input.on('change keyup', CSF.helper.debounce( function() {

        var obj  = $this.find(':input').serializeObjectCSF();
        var data = ( !$.isEmptyObject(obj) ) ? obj[$unique][$option] : '';

        window.wp.customize.control( $unique +'['+ $option +']' ).setting.set( data );

      }, 250 ) );

    });
  };

  //
  // Customizer Listener for Reload JS
  //
  $(document).on( 'expanded', '.control-section-csf', function() {

    var $this = $(this);

    if( !$this.data('inited') ) {
      $this.csf_reload_script();
      $this.find('.csf-customize-complex').csf_customizer_listen();
    }

  });

  //
  // Widgets Framework
  //
  $.fn.csf_widgets = function() {
    return this.each( function() {

      $(this).find('.widget-liquid-right .widget').each( function() {

        var $this = $(this);

        $this.find('.widget-top').on('click', function() {
          $this.csf_reload_script();
        });

      });

    });
  };

  //
  // Widget Listener for Reload JS
  //
  $(document).on('widget-added widget-updated', function( event, $widget ) {
    $widget.csf_reload_script();
  });

  //
  // Field: wp_editor
  //
  $.fn.csf_field_wp_editor = function() {
    return this.each( function() {

      if( typeof window.wp.editor === 'undefined' || typeof window.tinyMCEPreInit === 'undefined' || typeof window.tinyMCEPreInit.mceInit.csf_wp_editor === 'undefined' ) {
        return;
      }

      var $this     = $(this),
          $editor   = $this.find('.csf-wp-editor'),
          $textarea = $this.find('textarea');

      // If there is wp-editor remove it for avoid dupliated wp-editor conflicts.
      var $has_wp_editor = $this.find('.wp-editor-wrap').length || $this.find('.mce-container').length;

      if( $has_wp_editor ) {
        $editor.empty();
        $editor.append($textarea);
        $textarea.css('display', '');
      }

      // Generate a unique id
      var uid = CSF.helper.uid('csf-editor-');

      $textarea.attr('id', uid);

      // Get default editor settings
      var default_editor_settings = {
        tinymce: window.tinyMCEPreInit.mceInit.csf_wp_editor,
        quicktags: window.tinyMCEPreInit.qtInit.csf_wp_editor
      };

      // Get default editor settings
      var field_editor_settings = $editor.data('editor-settings');

      // Add on change event handle
      var editor_on_change = function( editor ) {
        editor.on('keyup', CSF.helper.debounce( function() {
          editor.save();
          $textarea.trigger('change');
        }, 250 ) );
      };

      // Extend editor selector and on change event handler
      default_editor_settings.tinymce = $.extend( {}, default_editor_settings.tinymce, { selector: '#'+ uid, setup: editor_on_change } );

      // Override editor tinymce settings
      if( field_editor_settings.tinymce === false ) {
        default_editor_settings.tinymce = false;
        $editor.addClass('csf-no-tinymce');
      }

      // Override editor quicktags settings
      if( field_editor_settings.quicktags === false ) {
        default_editor_settings.quicktags = false;
        $editor.addClass('csf-no-quicktags');
      }

      // Wait until :visible
      setTimeout( function() {
        window.wp.editor.initialize(uid, default_editor_settings);
      }, 250);

      // Add Media buttons
      if( field_editor_settings.media_buttons && window.csf_media_buttons ) {

        var $media_buttons = $(window.csf_media_buttons);

        $media_buttons.find('.csf-shortcode-button').data('editor-id', uid);

        $(document).on('wp-before-tinymce-init', function( event, init ) {

          if ( init.selector === default_editor_settings.tinymce.selector ) {

            $editor.prepend( $media_buttons );

          }

        });
      }

    });

  };

  //
  // Retry Plugins
  //
  $.fn.csf_reload_script_retry = function() {
    return this.each( function() {

      var $this = $(this);

      $this.find('.csf-field-wp_editor').not('.csf-no-script').csf_field_wp_editor();

    });
  };

  //
  // Reload Plugins
  //
  $.fn.csf_reload_script = function( has_sub, force_trigger ) {
    return this.each( function() {

      var $this = $(this);

      // Avoid for conflicts
      if( !$this.data('inited') || force_trigger ) {

        // Field plugins
        $this.find('.csf-field-accordion').not('.csf-no-script').csf_field_accordion();
        $this.find('.csf-field-backup').not('.csf-no-script').csf_field_backup();
        $this.find('.csf-field-code_editor').not('.csf-no-script').csf_field_code_editor();
        $this.find('.csf-field-color').not('.csf-no-script').csf_field_color();
        $this.find('.csf-field-date').not('.csf-no-script').csf_field_date();
        $this.find('.csf-field-gallery').not('.csf-no-script').csf_field_gallery();
        $this.find('.csf-field-group').not('.csf-no-script').csf_field_group();
        $this.find('.csf-field-icon').not('.csf-no-script').csf_field_icon();
        $this.find('.csf-field-media').not('.csf-no-script').csf_field_media();
        $this.find('.csf-field-repeater').not('.csf-no-script').csf_field_repeater();
        $this.find('.csf-field-slider').not('.csf-no-script').csf_field_slider();
        $this.find('.csf-field-sortable').not('.csf-no-script').csf_field_sortable();
        $this.find('.csf-field-sorter').not('.csf-no-script').csf_field_sorter();
        $this.find('.csf-field-spinner').not('.csf-no-script').csf_field_spinner();
        $this.find('.csf-field-switcher').not('.csf-no-script').csf_field_switcher();
        $this.find('.csf-field-tabbed').not('.csf-no-script').csf_field_tabbed();
        $this.find('.csf-field-typography').not('.csf-no-script').csf_field_typography();
        $this.find('.csf-field-upload').not('.csf-no-script').csf_field_upload();
        $this.find('.csf-field-wp_editor').not('.csf-no-script').csf_field_wp_editor();

        // General plugins
        $this.find('.csf-help').not('.csf-no-script').csf_tooltip();
        $this.find('.csf-chosen').not('.csf-no-script').csf_chosen();
        $this.find('.csf-checker').not('.csf-no-script').csf_checker();
        $this.find('.csf-siblings').not('.csf-no-script').csf_siblings();

        $this.csf_dependency(has_sub);

        $this.data('inited', true);

        $(document).trigger('csf-reload-script', $this);

      }

    });
  };

  //
  // Window on resize
  //
  CSF.vars.$window.on('resize csf.resize', CSF.helper.debounce( function( event ) {

    var window_width = navigator.userAgent.indexOf('AppleWebKit/') > -1 ? CSF.vars.$window.width() : window.innerWidth;

    if( window_width <= 782 && !CSF.vars.onloaded ) {
      $('.csf-section').csf_reload_script();
      CSF.vars.onloaded  = true;
    }

  }, 200)).trigger('csf.resize');

  //
  // Document ready and run scripts
  //
  $(document).ready( function() {

    $('.csf-save').csf_save();
    $('.csf-confirm').csf_confirm();
    $('.csf-nav-options').csf_nav_options();
    $('.csf-nav-metabox').csf_nav_metabox();
    $('.csf-expand-all').csf_expand_all();
    $('.csf-search').csf_search();
    $('.csf-sticky-header').csf_sticky();
    $('.csf-taxonomy').csf_taxonomy();
    $('.csf-shortcode').csf_shortcode();
    $('.widgets-php').csf_widgets();
    $('.csf-onload').csf_reload_script();
    $('.csf-page-templates').csf_page_templates();
    $('.csf-post-formats').csf_post_formats();

  });

})( jQuery, window, document );
