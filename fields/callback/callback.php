<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.
/**
 *
 * Field: callback
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! class_exists( 'CSF_Field_callback' ) ) {
  class CSF_Field_callback extends CSF_Fields {

    public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
      parent::__construct( $field, $value, $unique, $where, $parent );
    }

    public function render() {

      if ( ! isset( $this->field['function'] ) ) return false;

      if ( is_array( $this->field['function'] ) ) {

        if ( ! isset( $this->field['function'][0] ) || ! isset( $this->field['function'][1] ) ) {
          return false;
        }

        if ( ! method_exists( $this->field['function'][0], $this->field['function'][1] ) ) {
          return false;
        }

      } else if ( ! function_exists( $this->field['function'] ) ) {
        return false;
      }

      $args = ( isset( $this->field['args'] ) ) ? $this->field['args'] : null;

      call_user_func( $this->field['function'], $args );
    }

  }
}
