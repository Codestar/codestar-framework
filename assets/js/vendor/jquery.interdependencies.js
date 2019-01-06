/**
*
* jQuery Interdependencies library
* http://miohtama.github.com/jquery-interdependencies/
* Copyright 2012-2013 Mikko Ohtamaa, others
*
* Modifyed by Codestar
*
*/
(function($) {

  'use strict';

  function Rule(controller, condition, value) {
    this.init(controller, condition, value);
  }

  $.extend(Rule.prototype, {

    init: function(controller, condition, value) {

      this.controller = controller;
      this.condition  = condition;
      this.value      = value;
      this.rules      = [];
      this.controls   = [];

    },

    evalCondition: function(context, control, condition, val1, val2) {

      if( condition == '==' ) {

        return this.checkBoolean(val1) == this.checkBoolean(val2);

      } else if( condition == '!=' ) {

        return this.checkBoolean(val1) != this.checkBoolean(val2);

      } else if( condition == '>=' ) {

        return Number(val2) >= Number(val1);

      } else if( condition == '<=' ) {

        return Number(val2) <= Number(val1);

      } else if( condition == '>' ) {

        return Number(val2) > Number(val1);

      } else if( condition == '<' ) {

        return Number(val2) < Number(val1);

      } else if( condition == '()' ) {

        return window[val1](context, control, val2);

      } else if( condition == 'any' ) {

        //
        // if( control.attr('name').indexOf('[]') !== -1 && val2 !== null && val2.length ) {
        //
        if( control.length > 1 && val2.length ) {
          for (var i = val2.length - 1; i >= 0; i--) {
            if( $.inArray( val2[i], val1.split(',') ) !== -1 ) {
              return true;
            }
          }
        } else {
          if( $.inArray( val2, val1.split(',') ) !== -1 ) {
            return true;
          }
        }

        return false;

      } else if( condition == 'not-any' ) {

        if( control.length > 1 && val2.length ) {
          for (var i = val2.length - 1; i >= 0; i--) {
            if( $.inArray( val2[i], val1.split(',') ) == -1 ) {
              return true;
            }
          }
        } else {
          if( $.inArray( val2, val1.split(',') ) == -1 ) {
            return true;
          }
        }

        return false;

      }

      return false;

    },

    checkBoolean: function(value) {

      switch( value ) {

        case true:
        case 'true':
        case 1:
        case '1':
          value = true;
        break;

        case false:
        case 'false':
        case 0:
        case '0':
          value = false;
        break;

      }

      return value;
    },

    checkCondition: function( context ) {

      if( !this.condition ) {
        return true;
      }

      var control = context.find(this.controller);

      var control_value = this.getControlValue(context, control);

      if( control_value === undefined ) {
        return false;
      }

      control_value = this.normalizeValue(control, this.value, control_value);

      return this.evalCondition(context, control, this.condition, this.value, control_value);
    },

    normalizeValue: function( control, baseValue, control_value ) {

      if( typeof baseValue == 'number' ) {
        return parseFloat( control_value );
      }

      return control_value;
    },

    getControlValue: function(context, control) {

      if( control.length > 1 && ( control.attr('type') == 'radio' || control.attr('type') == 'checkbox' ) ) {

        return control.filter(':checked').map(function() { return this.value; }).get();

      } else if ( control.attr('type') == 'checkbox' || control.attr('type') == 'radio' ) {

        return control.is(':checked');

      }

      return control.val();

    },

    createRule: function(controller, condition, value) {
      var rule = new Rule(controller, condition, value);
      this.rules.push(rule);
      return rule;
    },

    include: function(input) {
      this.controls.push(input);
    },

    applyRule: function(context, enforced) {

      var result;

      if( typeof( enforced ) == 'undefined' ) {
        result = this.checkCondition(context);
      } else {
        result = enforced;
      }

      var controls = $.map(this.controls, function(elem, idx) {
        return context.find(elem);
      });

      if( result ) {

        $(controls).each(function() {
          $(this).removeClass('hidden');
        });

        $(this.rules).each(function() {
          this.applyRule(context);
        });

      } else {

        $(controls).each(function() {
          $(this).addClass('hidden');
        });

        $(this.rules).each(function() {
          this.applyRule(context, false);
        });

      }
    }
  });

  function Ruleset() {
    this.rules = [];
  };

  $.extend(Ruleset.prototype, {

    createRule: function(controller, condition, value) {
      var rule = new Rule(controller, condition, value);
      this.rules.push(rule);
      return rule;
    },

    applyRules: function(context) {
      $(this.rules).each(function() {
        this.applyRule(context);
      });
    }
  });

  $.csf_deps = {

    createRuleset: function() {
      return new Ruleset();
    },

    enable: function(selection, ruleset, depends) {

      selection.on('change', function(elem) {

        var depend_id = elem.target.getAttribute('data-depend-id') || elem.target.getAttribute('data-sub-depend-id');

        if( depends.indexOf( depend_id ) !== -1 ) {
          ruleset.applyRules(selection);
        }

      });

      ruleset.applyRules(selection);

      return true;
    }
  };

})(jQuery);
