<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.
/**
 *
 * Field: code_editor
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! class_exists( 'CSF_Field_code_editor' ) ) {
  class CSF_Field_code_editor extends CSF_Fields {

    public $version = '5.41.0';
    public $cdn_url = 'https://cdn.jsdelivr.net/npm/codemirror@';

    public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
      parent::__construct( $field, $value, $unique, $where, $parent );
    }

    public function render() {

      $default_settings = array(
        'tabSize'       => 2,
        'lineNumbers'   => true,
        'theme'         => 'default',
        'mode'          => 'htmlmixed',
        'cdnURL'        => $this->cdn_url . $this->version,
      );

      $settings = ( ! empty( $this->field['settings'] ) ) ? $this->field['settings'] : array();
      $settings = wp_parse_args( $settings, $default_settings );
      $encoded  = htmlspecialchars( json_encode( $settings ) );

      echo $this->field_before();
      echo '<textarea name="'. $this->field_name() .'"'. $this->field_attributes() .' data-editor="'. $encoded .'">'. $this->value .'</textarea>';
      echo $this->field_after();

    }

    public function enqueue() {

      // Do not loads CodeMirror in revslider page.
      if( in_array( csf_get_var( 'page' ), array( 'revslider' ) ) ) { return; }

      if( ! wp_script_is( 'csf-codemirror' ) ) {
        wp_enqueue_script( 'csf-codemirror', $this->cdn_url . $this->version .'/lib/codemirror.min.js', array( 'csf' ), $this->version, true );
        wp_enqueue_script( 'csf-codemirror-loadmode', $this->cdn_url . $this->version .'/addon/mode/loadmode.min.js', array( 'csf-codemirror' ), $this->version, true );
      }

      if( ! wp_style_is( 'csf-codemirror' ) ) {
        wp_enqueue_style( 'csf-codemirror', $this->cdn_url . $this->version .'/lib/codemirror.min.css', array(), $this->version );
      }

    }

  }
}
