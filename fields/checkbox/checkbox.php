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
        'inline'     => false,
        'query_args' => array(),
      ) );

      $inline_class = ( $args['inline'] ) ? ' class="csf--inline-list"' : '';

      echo $this->field_before();

      if( isset( $this->field['options'] ) ) {

        $value   = ( is_array( $this->value ) ) ? $this->value : array_filter( (array) $this->value );
        $options = $this->field['options'];
        $options = ( is_array( $options ) ) ? $options : array_filter( $this->field_data( $options, false, $args['query_args'] ) );

        if( is_array( $options ) && ! empty( $options ) ) {

          echo '<ul'. $inline_class .'>';
          foreach ( $options as $option_key => $option_value ) {

            if( is_array( $option_value ) && ! empty( $option_value ) ) {

              echo '<li>';
              echo '<ul>';
              echo '<li><strong>'. $option_key .'</strong></li>';
              foreach( $option_value as $sub_key => $sub_value ) {
                $checked = ( in_array( $sub_key, $value ) ) ? ' checked' : '';
                echo '<li><label><input type="checkbox" name="'. $this->field_name( '[]' ) .'" value="'. $sub_key .'"'. $this->field_attributes() . $checked .'/> '. $sub_value .'</label></li>';
              }
              echo '</ul>';
              echo '</li>';

            } else {

              $checked = ( in_array( $option_key, $value ) ) ? ' checked' : '';
              echo '<li><label><input type="checkbox" name="'. $this->field_name( '[]' ) .'" value="'. $option_key .'"'. $this->field_attributes() . $checked .'/> '. $option_value .'</label></li>';

            }

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
