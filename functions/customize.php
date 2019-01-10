<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * WP Customize custom panel
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! class_exists( 'WP_Customize_Panel_CSF' ) && class_exists( 'WP_Customize_Panel' ) ) {
  class WP_Customize_Panel_CSF extends WP_Customize_Panel {
    public $type = 'csf';
  }
}

/**
 *
 * WP Customize custom section
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! class_exists( 'WP_Customize_Section_CSF' ) && class_exists( 'WP_Customize_Section' ) ) {
  class WP_Customize_Section_CSF extends WP_Customize_Section {
    public $type = 'csf';
  }
}

/**
 *
 * WP Customize custom control
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! class_exists( 'WP_Customize_Control_CSF' ) && class_exists( 'WP_Customize_Control' ) ) {
  class WP_Customize_Control_CSF extends WP_Customize_Control {

    public $type   = 'csf';
    public $field  = '';
    public $unique = '';

    protected function render() {

      $depend = ( ! empty( $this->field['dependency'] ) ) ? ' csf-dependency-control' : '';
      $id     = 'customize-control-' . str_replace( array( '[', ']' ), array( '-', '' ), $this->id );
      $class  = 'customize-control customize-control-' . $this->type . $depend;

      echo sprintf( '<li id="%s" class="%s">', esc_attr( $id ), esc_attr( $class ) );
      $this->render_content();
      echo '</li>';

    }

    public function render_content() {

      $unallows   = array();
      $complex    = array( 'accordion', 'background', 'backup', 'border', 'button_set', 'checkbox', 'color_group', 'dimensions', 'fieldset', 'group', 'image_select', 'link_color', 'media', 'palette', 'repeater', 'sortable', 'sorter', 'switcher', 'tabbed' );
      $field_id   = ( ! empty( $this->field['id'] ) ) ? $this->field['id'] : '';
      $custom     = ( ! empty( $this->field['customizer'] ) ) ? true : false;
      $is_complex = ( in_array( $this->field['type'], $complex ) ) ? true : false;
      $class      = ( $is_complex || $custom ) ? ' csf-customize-complex' : '';
      $atts       = ( $is_complex || $custom ) ? ' data-unique-id="'. $this->unique .'" data-option-id="'. $field_id .'"' : '';

      if( ! $is_complex && ! $custom ) {
        $this->field['attributes']['data-customize-setting-link'] = $this->settings['default']->id;
      }

      $this->field['name'] = $this->settings['default']->id;

      if( in_array( $this->field['type'], $unallows ) ) { $this->field['_notice'] = true; }

      echo '<div class="csf-customize-field'. $class .'"'. $atts .'>';

      CSF::field( $this->field, $this->value(), $this->unique, 'customize' );

      echo '</div>';

    }

  }
}
