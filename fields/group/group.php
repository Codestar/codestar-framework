<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Field: group
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! class_exists( 'CSF_Field_group' ) ) {
  class CSF_Field_group extends CSF_Fields {

    public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
      parent::__construct( $field, $value, $unique, $where, $parent );
    }

    public function render() {

      $args = wp_parse_args( $this->field, array(
        'max'                    => 0,
        'min'                    => 0,
        'fields'                 => array(),
        'button_title'           => esc_html__( 'Add New', 'csf' ),
        'remove_title'           => esc_html__( 'Remove Icon', 'csf' ),
        'accordion_title_prefix' => '',
        'accordion_title_count'  => false,
      ) );

      $prefix    = ( ! empty( $args['accordion_title_prefix'] ) ) ? $args['accordion_title_prefix'] .' ' : '';
      $countable = ( ! empty( $args['accordion_title_count'] ) ) ? $args['accordion_title_count'] : false;
      $unallows  = array( 'group', 'repeater' );

      echo $this->field_before();

      echo '<div class="csf-cloneable-item csf-cloneable-hidden csf-no-script">';

        echo '<div class="csf-cloneable-helper">';
        echo '<i class="csf-cloneable-sort fa fa-arrows"></i>';
        echo '<i class="csf-cloneable-clone fa fa-clone"></i>';
        echo '<i class="csf-cloneable-remove fa fa-times"></i>';
        echo '</div>';

        echo '<h4 class="csf-cloneable-title">';
        echo '<span class="csf-cloneable-text"><span class="csf-cloneable-value">'. $prefix .'<span class="csf-cloneable-placeholder"></span></span></span>';
        echo '</h4>';

        echo '<div class="csf-cloneable-content">';
        foreach ( $this->field['fields'] as $field ) {

          if( in_array( $field['type'], $unallows ) ) { $field['_notice'] = true; }

          $field['sub'] = true;
          $field['class'] = ( ! empty( $field['class'] ) ) ? $field['class'] .' csf-no-script' : 'csf-no-script';

          $unique = ( ! empty( $this->unique ) ) ? '_nonce['. $this->field['id'] .'][num]' : '_nonce[num]';
          $field_default = ( isset( $field['default'] ) ) ? $field['default'] : '';

          CSF::field( $field, $field_default, $unique, 'field/group' );

        }
        echo '<div class="csf-field csf-text-right"><a href="#" class="button csf-warning-primary csf-cloneable-remove">'. esc_html__( 'Remove', 'csf' ) .'</a></div>';
        echo '</div>';

      echo '</div>';

      echo '<div class="csf-cloneable-wrapper" data-unique-id="'. $this->unique .'" data-max="'. $args['max'] .'" data-min="'. $args['min'] .'">';

        if( ! empty( $this->value ) ) {

          $num = 0;

          foreach ( $this->value as $value ) {

            $first_id    = ( ! empty( $this->field['fields'][0]['id'] ) ) ? $this->field['fields'][0]['id'] : '';
            $first_value = ( ! empty( $value[$first_id] ) ) ? $value[$first_id] : '';

            $count = ( $countable ) ? ( $num+1 ) .' - ' : '';

            echo '<div class="csf-cloneable-item">';

            echo '<div class="csf-cloneable-helper">';
            echo '<i class="csf-cloneable-sort fa fa-arrows"></i>';
            echo '<i class="csf-cloneable-clone fa fa-clone"></i>';
            echo '<i class="csf-cloneable-remove fa fa-times"></i>';
            echo '</div>';

            echo '<h4 class="csf-cloneable-title">';
            echo '<span class="csf-cloneable-text">'. $count . $prefix . '<span class="csf-cloneable-value">' . $first_value .'</span></span>';
            echo '</h4>';

            echo '<div class="csf-cloneable-content">';

            foreach ( $this->field['fields'] as $field ) {

              if( in_array( $field['type'], $unallows ) ) { $field['_notice'] = true; }

              $field['sub']   = true;
              $field['class'] = ( ! empty( $field['class'] ) ) ? $field['class'] .' csf-no-script' : 'csf-no-script';

              $unique_id   = ( ! empty( $this->unique ) ) ? $this->unique .'['. $this->field['id'] .']['. $num .']' : $this->field['id'] .'['. $num .']';
              $field_value = ( isset( $field['id'] ) && isset( $value[$field['id']] ) ) ? $value[$field['id']] : '';

              CSF::field( $field, $field_value, $unique_id, 'field/group' );

            }

            echo '<div class="csf-field csf-text-right"><a href="#" class="button csf-warning-primary csf-cloneable-remove">'. $args['remove_title'] .'</a></div>';
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

      if( ! wp_script_is( 'jquery-ui-accordion' ) ) {
        wp_enqueue_script( 'jquery-ui-accordion' );
      }

      if( ! wp_script_is( 'jquery-ui-sortable' ) ) {
        wp_enqueue_script( 'jquery-ui-sortable' );
      }

    }

  }
}
