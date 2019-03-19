<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.
/**
 *
 * Field: dimensions
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! class_exists( 'CSF_Field_dimensions' ) ) {
  class CSF_Field_dimensions extends CSF_Fields {

    public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
      parent::__construct( $field, $value, $unique, $where, $parent );
    }

    public function render() {

      $args = wp_parse_args( $this->field, array(
        'width_icon'         => '<i class="fa fa-arrows-h"></i>',
        'height_icon'        => '<i class="fa fa-arrows-v"></i>',
        'width_placeholder'  => esc_html__( 'width', 'csf' ),
        'height_placeholder' => esc_html__( 'height', 'csf' ),
        'width'              => true,
        'height'             => true,
        'unit'               => true,
        'units'              => array( 'px', '%', 'em' )
      ) );

      $default_values = array(
        'width'  => '',
        'height' => '',
        'unit'   => 'px',
      );

      $value = wp_parse_args( $this->value, $default_values );

      echo $this->field_before();

      if( ! empty( $args['width'] ) ) {

        $placeholder = ( ! empty( $args['width_placeholder'] ) ) ? ' placeholder="'. $args['width_placeholder'] .'"' : '';

        echo '<div class="csf--input">';
        echo ( ! empty( $args['width_icon'] ) ) ? '<span class="csf--label csf--label-icon">'. $args['width_icon'] .'</span>' : '';
        echo '<input type="text" name="'. $this->field_name('[width]') .'" value="'. $value['width'] .'"'. $placeholder .' class="csf-number" />';
        echo ( count( $args['units'] ) === 1 && ! empty( $args['unit'] ) ) ? '<span class="csf--label csf--label-unit">'. $args['units'][0] .'</span>' : '';
        echo '</div>';

      }

      if( ! empty( $args['height'] ) ) {

        $placeholder = ( ! empty( $args['height_placeholder'] ) ) ? ' placeholder="'. $args['height_placeholder'] .'"' : '';

        echo '<div class="csf--input">';
        echo ( ! empty( $args['height_icon'] ) ) ? '<span class="csf--label csf--label-icon">'. $args['height_icon'] .'</span>' : '';
        echo '<input type="text" name="'. $this->field_name('[height]') .'" value="'. $value['height'] .'"'. $placeholder .' class="csf-number" />';
        echo ( count( $args['units'] ) === 1 && ! empty( $args['unit'] ) ) ? '<span class="csf--label csf--label-unit">'. $args['units'][0] .'</span>' : '';
        echo '</div>';

      }

      if( ! empty( $args['unit'] ) && count( $args['units'] ) > 1 ) {
        echo '<select name="'. $this->field_name('[unit]') .'">';
        foreach( $args['units'] as $unit ) {
          $selected = ( $value['unit'] === $unit ) ? ' selected' : '';
          echo '<option value="'. $unit .'"'. $selected .'>'. $unit .'</option>';
        }
        echo '</select>';
      }

      echo '<div class="clear"></div>';

      echo $this->field_after();

    }

    public function output() {

      $output    = '';
      $element   = ( is_array( $this->field['output'] ) ) ? join( ',', $this->field['output'] ) : $this->field['output'];
      $prefix    = ( ! empty( $this->field['output_prefix'] ) ) ? $this->field['output_prefix'] .'-' : '';
      $important = ( ! empty( $this->field['output_important'] ) ) ? '!important' : '';
      $unit      = ( ! empty( $this->value['unit'] ) ) ? $this->value['unit'] : 'px';
      $width     = ( isset( $this->value['width'] ) && $this->value['width'] !== '' ) ? $prefix .'width:'. $this->value['width'] . $unit . $important .';' : '';
      $height    = ( isset( $this->value['height'] ) && $this->value['width'] !== '' ) ? $prefix .'height:'. $this->value['height'] . $unit . $important .';' : '';

      if( $width !== '' || $height !== '' ) {
        $output = $element .'{'. $width . $height .'}';
      }

      $this->parent->output_css .= $output;

      return $output;

    }

  }
}
