<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Field: border
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! class_exists( 'CSF_Field_border' ) ) {
  class CSF_Field_border extends CSF_Fields {

    public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
      parent::__construct( $field, $value, $unique, $where, $parent );
    }

    public function render() {

      $args = wp_parse_args( $this->field, array(
        'top_icon'           => '<i class="fa fa-long-arrow-up"></i>',
        'left_icon'          => '<i class="fa fa-long-arrow-left"></i>',
        'bottom_icon'        => '<i class="fa fa-long-arrow-down"></i>',
        'right_icon'         => '<i class="fa fa-long-arrow-right"></i>',
        'all_icon'           => '<i class="fa fa-arrows"></i>',
        'top_placeholder'    => 'top',
        'right_placeholder'  => 'right',
        'bottom_placeholder' => 'bottom',
        'left_placeholder'   => 'left',
        'all_placeholder'    => 'all',
        'top'                => true,
        'left'               => true,
        'bottom'             => true,
        'right'              => true,
        'all'                => false,
        'color'              => true,
        'style'              => true,
        'unit'               => 'px',
      ) );

      $default_values = array(
        'top'    => '',
        'right'  => '',
        'bottom' => '',
        'left'   => '',
        'color'  => '',
        'style'  => 'solid',
        'all'    => '',
      );

      $value = wp_parse_args( $this->value, $default_values );

      echo $this->field_before();

      if( ! empty( $args['all'] ) ) {

        $placeholder = ( ! empty( $args['all_placeholder'] ) ) ? ' placeholder="'. $args['all_placeholder'] .'"' : '';

        echo '<div class="csf--left csf--input">';
        echo ( ! empty( $args['all_icon'] ) ) ? '<span class="csf--label csf--label-icon">'. $args['all_icon'] .'</span>' : '';
        echo '<input type="text" name="'. $this->field_name('[all]') .'" value="'. $value['all'] .'"'. $placeholder .' />';
        echo ( ! empty( $args['unit'] ) ) ? '<span class="csf--label csf--label-unit">'. $args['unit'] .'</span>' : '';
        echo '</div>';

      } else {

        $properties = array();

        foreach ( array( 'top', 'right', 'bottom', 'left' ) as $prop ) {
          if( ! empty( $args[$prop] ) ) {
            $properties[] = $prop;
          }
        }

        $properties = ( $properties === array( 'right', 'left' ) ) ? array_reverse( $properties ) : $properties;

        foreach( $properties as $property ) {

          $placeholder = ( ! empty( $args[$property.'_placeholder'] ) ) ? ' placeholder="'. $args[$property.'_placeholder'] .'"' : '';

          echo '<div class="csf--left csf--input">';
          echo ( ! empty( $args[$property.'_icon'] ) ) ? '<span class="csf--label csf--label-icon">'. $args[$property.'_icon'] .'</span>' : '';
          echo '<input type="text" name="'. $this->field_name('['. $property .']') .'" value="'. $value[$property] .'"'. $placeholder .' />';
          echo ( ! empty( $args['unit'] ) ) ? '<span class="csf--label csf--label-unit">'. $args['unit'] .'</span>' : '';
          echo '</div>';

        }

      }

      if( ! empty( $args['style'] ) ) {
        echo '<div class="csf--left csf--input">';
        echo '<select name="'. $this->field_name('[style]') .'">';
        foreach( array( 'solid', 'dashed', 'dotted', 'double', 'none' ) as $style ) {
          $selected = ( $value['style'] === $style ) ? ' selected' : '';
          echo '<option value="'. $style .'"'. $selected .'>'. ucfirst( $style ) .'</option>';
        }
        echo '</select>';
        echo '</div>';
      }

      if( ! empty( $args['color'] ) ) {
        echo '<div class="csf--left csf-field-color">';
        echo '<input type="text" name="'. $this->field_name('[color]') .'" value="'. $value['color'] .'" class="csf-color-picker" />';
        echo '</div>';
      }

      echo '<div class="clear"></div>';

      echo $this->field_after();

    }

    public function output() {

      $output    = '';
      $unit      = ( ! empty( $this->value['unit'] ) ) ? $this->value['unit'] : 'px';
      $important = ( ! empty( $this->field['output_important'] ) ) ? '!important' : '';
      $element   = ( is_array( $this->field['output'] ) ) ? join( ',', $this->field['output'] ) : $this->field['output'];

      // properties
      $top     = ( isset( $this->value['top'] )    && $this->value['top']    !== '' ) ? $this->value['top']    : '';
      $right   = ( isset( $this->value['right'] )  && $this->value['right']  !== '' ) ? $this->value['right']  : '';
      $bottom  = ( isset( $this->value['bottom'] ) && $this->value['bottom'] !== '' ) ? $this->value['bottom'] : '';
      $left    = ( isset( $this->value['left'] )   && $this->value['left']   !== '' ) ? $this->value['left']   : '';
      $style   = ( isset( $this->value['style'] )  && $this->value['style']  !== '' ) ? $this->value['style']  : '';
      $color   = ( isset( $this->value['color'] )  && $this->value['color']  !== '' ) ? $this->value['color']  : '';
      $all     = ( isset( $this->value['all'] )    && $this->value['all']    !== '' ) ? $this->value['all']    : '';

      if( ! empty( $this->field['all'] ) && ( $all !== '' || $color !== '' ) ) {

        $output  = $element .'{';
        $output .= ( $all   !== '' ) ? 'border-width:'. $all . $unit . $important .';' : '';
        $output .= ( $color !== '' ) ? 'border-color:'. $color . $important .';'       : '';
        $output .= ( $style !== '' ) ? 'border-style:'. $style . $important .';'       : '';
        $output .= '}';

      } else if( $top !== '' || $right !== '' || $bottom !== '' || $left !== '' || $color !== '' ) {

        $output  = $element .'{';
        $output .= ( $top    !== '' ) ? 'border-top-width:'. $top . $unit . $important .';'       : '';
        $output .= ( $right  !== '' ) ? 'border-right-width:'. $right . $unit . $important .';'   : '';
        $output .= ( $bottom !== '' ) ? 'border-bottom-width:'. $bottom . $unit . $important .';' : '';
        $output .= ( $left   !== '' ) ? 'border-left-width:'. $left . $unit . $important .';'     : '';
        $output .= ( $color  !== '' ) ? 'border-color:'. $color . $important .';'                 : '';
        $output .= ( $style  !== '' ) ? 'border-style:'. $style . $important .';'                 : '';
        $output .= '}';

      }

      $this->parent->output_css .= $output;

      return $output;

    }

  }
}
