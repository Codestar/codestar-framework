<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Field: repeater
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! class_exists( 'CSF_Field_repeater' ) ) {
  class CSF_Field_repeater extends CSF_Fields {

    public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
      parent::__construct( $field, $value, $unique, $where, $parent );
    }

    public function render() {

      $args = wp_parse_args( $this->field, array(
        'max'          => 0,
        'min'          => 0,
        'button_title' => '<i class="fa fa-plus-circle"></i>',
      ) );

      echo $this->field_before();

      $fields    = $this->field['fields'];
      $unallows  = array( 'group', 'repeater' );
      $unique_id = ( ! empty( $this->unique ) ) ? $this->unique : $this->field['id'];

      echo '<div class="csf-cloneable-item csf-cloneable-hidden">';
      echo '<div class="csf-cloneable-content">';
      foreach ( $fields as $field ) {

        if( in_array( $field['type'], $unallows ) ) { $field['_notice'] = true; }

        $field['sub']   = true;
        $field['class'] = ( ! empty( $field['class'] ) ) ? $field['class'] .' csf-no-script' : 'csf-no-script';

        $unique = ( ! empty( $this->unique ) ) ? '_nonce['. $this->field['id'] .'][num]' : '_nonce[num]';
        $field_default = ( isset( $field['default'] ) ) ? $field['default'] : '';

        CSF::field( $field, $field_default, $unique, 'field/repeater' );

      }
      echo '</div>';
      echo '<div class="csf-cloneable-helper">';
      echo '<div class="csf-cloneable-helper-inner">';
      echo '<i class="csf-cloneable-sort fa fa-arrows"></i>';
      echo '<i class="csf-cloneable-clone fa fa-clone"></i>';
      echo '<i class="csf-cloneable-remove fa fa-times"></i>';
      echo '</div>';
      echo '</div>';
      echo '</div>';

      echo '<div class="csf-cloneable-wrapper" data-unique-id="'. $unique_id .'" data-max="'. $args['max'] .'" data-min="'. $args['min'] .'">';

      if( ! empty( $this->value ) ) {

        $num = 0;

        foreach ( $this->value as $key => $value ) {

          echo '<div class="csf-cloneable-item">';

          echo '<div class="csf-cloneable-content">';
          foreach ( $fields as $field ) {

            if( in_array( $field['type'], $unallows ) ) { $field['_notice'] = true; }

            $field['sub'] = true;
            $unique       = ( ! empty( $this->unique ) ) ? $this->unique .'['. $this->field['id'] .']['. $num .']' : $this->field['id'] .'['. $num .']';
            $field_value  = ( isset( $field['id'] ) && isset( $this->value[$key][$field['id']] ) ) ? $this->value[$key][$field['id']] : '';

            CSF::field( $field, $field_value, $unique, 'field/repeater' );

          }
          echo '</div>';

          echo '<div class="csf-cloneable-helper">';
          echo '<div class="csf-cloneable-helper-inner">';
          echo '<i class="csf-cloneable-sort fa fa-arrows"></i>';
          echo '<i class="csf-cloneable-clone fa fa-clone"></i>';
          echo '<i class="csf-cloneable-remove fa fa-times"></i>';
          echo '</div>';
          echo '</div>';

          echo '</div>';

          $num++;

        }

      }

      echo '</div>';

      echo '<div class="csf-cloneable-alert csf-cloneable-max">'. esc_html__( 'You can not add more than', 'csf' ) .' '. $args['max'] .'</div>';
      echo '<div class="csf-cloneable-alert csf-cloneable-min">'. esc_html__( 'You can not remove less than', 'csf' ) .' '. $args['min'] .'</div>';

      echo '<a href="#" class="button button-primary csf-cloneable-add">'. $args['button_title'] .'</a>';

      echo $this->field_after();

    }

    public function enqueue() {

      if( ! wp_script_is( 'jquery-ui-sortable' ) ) {
        wp_enqueue_script( 'jquery-ui-sortable' );
      }

    }

  }
}
