<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.
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

      $fields    = $this->field['fields'];
      $unique_id = ( ! empty( $this->unique ) ) ? $this->unique : $this->field['id'];

      if( $this->parent && preg_match( '/'. preg_quote( '['. $this->field['id'] .']' ) .'/', $this->parent ) ) {

        echo '<div class="csf-notice csf-notice-danger">'. esc_html__( 'Error: Nested field id can not be same with another nested field id.', 'csf' ) .'</div>';

      } else {

        echo $this->field_before();

        echo '<div class="csf-repeater-item csf-repeater-hidden">';
        echo '<div class="csf-repeater-content">';
        foreach ( $fields as $field ) {

          $field_parent  = $this->parent .'['. $this->field['id'] .']';
          $field_default = ( isset( $field['default'] ) ) ? $field['default'] : '';

          CSF::field( $field, $field_default, '_nonce', 'field/repeater', $field_parent );

        }
        echo '</div>';
        echo '<div class="csf-repeater-helper">';
        echo '<div class="csf-repeater-helper-inner">';
        echo '<i class="csf-repeater-sort fa fa-arrows"></i>';
        echo '<i class="csf-repeater-clone fa fa-clone"></i>';
        echo '<i class="csf-repeater-remove csf-confirm fa fa-times" data-confirm="'. esc_html__( 'Are you sure to delete this item?', 'csf' ) .'"></i>';
        echo '</div>';
        echo '</div>';
        echo '</div>';

        echo '<div class="csf-repeater-wrapper csf-data-wrapper" data-unique-id="'. $this->unique .'" data-field-id="['. $this->field['id'] .']" data-max="'. $args['max'] .'" data-min="'. $args['min'] .'">';

        if( ! empty( $this->value ) ) {

          $num = 0;

          foreach ( $this->value as $key => $value ) {

            echo '<div class="csf-repeater-item">';

            echo '<div class="csf-repeater-content">';
            foreach ( $fields as $field ) {

              $field_parent = $this->parent .'['. $this->field['id'] .']';
              $field_unique = ( ! empty( $this->unique ) ) ? $this->unique .'['. $this->field['id'] .']['. $num .']' : $this->field['id'] .'['. $num .']';
              $field_value  = ( isset( $field['id'] ) && isset( $this->value[$key][$field['id']] ) ) ? $this->value[$key][$field['id']] : '';

              CSF::field( $field, $field_value, $field_unique, 'field/repeater', $field_parent );

            }
            echo '</div>';

            echo '<div class="csf-repeater-helper">';
            echo '<div class="csf-repeater-helper-inner">';
            echo '<i class="csf-repeater-sort fa fa-arrows"></i>';
            echo '<i class="csf-repeater-clone fa fa-clone"></i>';
            echo '<i class="csf-repeater-remove csf-confirm fa fa-times" data-confirm="'. esc_html__( 'Are you sure to delete this item?', 'csf' ) .'"></i>';
            echo '</div>';
            echo '</div>';

            echo '</div>';

            $num++;

          }

        }

        echo '</div>';

        echo '<div class="csf-repeater-alert csf-repeater-max">'. esc_html__( 'You can not add more than', 'csf' ) .' '. $args['max'] .'</div>';
        echo '<div class="csf-repeater-alert csf-repeater-min">'. esc_html__( 'You can not remove less than', 'csf' ) .' '. $args['min'] .'</div>';

        echo '<a href="#" class="button button-primary csf-repeater-add">'. $args['button_title'] .'</a>';

        echo $this->field_after();

      }

    }

    public function enqueue() {

      if( ! wp_script_is( 'jquery-ui-sortable' ) ) {
        wp_enqueue_script( 'jquery-ui-sortable' );
      }

    }

  }
}
