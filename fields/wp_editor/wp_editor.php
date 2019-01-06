<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Field: wp_editor
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! class_exists( 'CSF_Field_wp_editor' ) ) {
  class CSF_Field_wp_editor extends CSF_Fields {

    public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
      parent::__construct( $field, $value, $unique, $where, $parent );
    }

    public function render() {

      echo $this->field_before();

      $default_settings = array(
        'textarea_rows' => 10,
        'textarea_name' => $this->field_name()
      );

      $settings = ( ! empty( $this->field['settings'] ) ) ? $this->field['settings'] : array();
      $settings = wp_parse_args( $settings, $default_settings );

      $field_id = ( ! empty( $this->field['id'] ) ) ? $this->field['id'] : '';

      wp_editor( $this->value, $field_id, $settings );

      echo $this->field_after();

    }

  }
}
