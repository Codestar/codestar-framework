<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.
/**
 *
 * Abstract Class
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! class_exists( 'CSF_Abstract' ) ) {
  abstract class CSF_Abstract {

    public $abstract     = '';
    public $output_css   = '';
    public $typographies = array();

    public function __construct() {

      // Check for embed google web fonts
      if ( ! empty( $this->args['enqueue_webfont'] ) ) {
        add_action( 'wp_enqueue_scripts', array( &$this, 'add_enqueue_google_fonts' ), 100 );
      }

      // Check for embed custom css styles
      if ( ! empty( $this->args['output_css'] ) ) {
        add_action( 'wp_head', array( &$this, 'add_output_css' ), 100 );
      }

    }

    public function add_enqueue_google_fonts() {

      if ( ! empty( $this->pre_fields ) ) {

        foreach ( $this->pre_fields as $field ) {

          $field_id     = ( ! empty( $field['id'] ) ) ? $field['id'] : '';
          $field_type   = ( ! empty( $field['type'] ) ) ? $field['type'] : '';
          $field_output = ( ! empty( $field['output'] ) ) ? $field['output'] : '';
          $field_check  = ( $field_type === 'typography' || $field_output ) ? true : false;

          if ( $field_type && $field_id ) {

            CSF::maybe_include_field( $field_type );

            $class_name = 'CSF_Field_' . $field_type;

            if ( class_exists( $class_name ) ) {

              if ( method_exists( $class_name, 'output' ) || method_exists( $class_name, 'enqueue_google_fonts' ) ) {

                $field_value = '';

                if ( $field_check && ( $this->abstract === 'options' || $this->abstract === 'customize' ) ) {
                  $field_value = ( isset( $this->options[$field_id] ) && $this->options[$field_id] !== '' ) ? $this->options[$field_id] : '';
                } else if ( $field_check && $this->abstract === 'metabox' ) {
                  $field_value = $this->get_meta_value( $field );
                }

                $instance = new $class_name( $field, $field_value, $this->unique, 'wp/enqueue', $this );

                // typography enqueue and embed google web fonts
                if ( $field_type === 'typography' && $this->args['enqueue_webfont'] && ! empty( $field_value['font-family'] ) ) {
                  $instance->enqueue_google_fonts();
                }

                // output css
                if ( $field_output && $this->args['output_css'] ) {
                  $instance->output();
                }

                unset( $instance );

              }

            }

          }

        }

      }

      if ( ! empty( $this->typographies ) && empty( $this->args['async_webfont'] ) ) {

        $api    = '//fonts.googleapis.com/css';
        $query  = array( 'family' => implode( '%7C', $this->typographies ) );
        $handle = 'csf-google-web-fonts-'. $this->unique;

        wp_enqueue_style( $handle, esc_url( add_query_arg( $query, $api ) ), array(), null );

      }

      if ( ! empty( $this->typographies ) && ! empty( $this->args['async_webfont'] ) ) {

        $api = '//ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
        echo '<script type="text/javascript">';
        echo 'WebFontConfig={google:{families:['. "'" . implode( "','", $this->typographies ) . "'" .']}};';
        echo '!function(e){var t=e.createElement("script"),s=e.scripts[0];t.src="'. esc_url( $api ) .'",t.async=!0,s.parentNode.insertBefore(t,s)}(document);';
        echo '</script>';

      }

    }

    public function add_output_css() {

      $this->output_css = apply_filters( "csf_{$this->unique}_output_css", $this->output_css, $this );

      if ( ! empty( $this->output_css ) ) {
        echo '<style type="text/css">'. wp_strip_all_tags( $this->output_css ) .'</style>';
      }

    }

  }
}
