<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.
/**
 *
 * Field: checkbox
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! class_exists( 'CSF_Field_checkbox' ) ) {
  class CSF_Field_checkbox extends CSF_Fields {

    public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
      parent::__construct( $field, $value, $unique, $where, $parent );
    }

    public function render() {

      $args = wp_parse_args( $this->field, array(
        'inline' => false,
      ) );

      $inline_class = ( $args['inline'] ) ? ' class="csf--inline-list"' : '';

      echo $this->field_before();

      if( ! empty( $this->field['options'] ) ) {

        $value   = ( is_array( $this->value ) ) ? $this->value : array_filter( (array) $this->value );
        $options = $this->field['options'];
        $options = ( is_array( $options ) ) ? $options : array_filter( $this->field_data( $options ) );

        if( ! empty( $options ) ) {

          echo '<ul'. $inline_class .'>';
          foreach ( $options as $option_key => $option_value ) {
            $checked = ( in_array( $option_key, $value ) ) ? ' checked' : '';
            echo '<li><label><input type="checkbox" name="'. $this->field_name( '[]' ) .'" value="'. $option_key .'"'. $this->field_attributes() . $checked .'/> '. $option_value .'</label></li>';
          }
          echo '</ul>';

        } else {

          echo ( ! empty( $this->field['empty_message'] ) ) ? $this->field['empty_message'] : esc_html__( 'No data provided for this option type.', 'csf' );

        }

      } else {
        echo '<label class="csf-checkbox">';
        echo '<input type="hidden" name="'. $this->field_name() .'" value="'. $this->value .'" class="csf--input"'. $this->field_attributes() .'/>';
        echo '<input type="checkbox" class="csf--checkbox"'. checked( $this->value, 1, false ) .'/>';
        echo ( ! empty( $this->field['label'] ) ) ? ' '. $this->field['label'] : '';
        echo '</label>';
      }

      echo $this->field_after();

    }

  }
}
