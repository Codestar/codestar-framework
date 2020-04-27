<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.
/**
 *
 * Get icons from admin ajax
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'csf_get_icons' ) ) {
  function csf_get_icons() {

    $nonce = ( ! empty( $_POST[ 'nonce' ] ) ) ? sanitize_text_field( wp_unslash( $_POST[ 'nonce' ] ) ) : '';

    if ( ! wp_verify_nonce( $nonce, 'csf_icon_nonce' ) ) {
      wp_send_json_error( array( 'error' => esc_html__( 'Error: Nonce verification has failed. Please try again.', 'csf' ) ) );
    }

    ob_start();

    $icon_library = ( apply_filters( 'csf_fa4', false ) ) ? 'fa4' : 'fa5';

    CSF::include_plugin_file( 'fields/icon/'. $icon_library .'-icons.php' );

    $icon_lists = apply_filters( 'csf_field_icon_add_icons', csf_get_default_icons() );

    if ( ! empty( $icon_lists ) ) {

      foreach ( $icon_lists as $list ) {

        echo ( count( $icon_lists ) >= 2 ) ? '<div class="csf-icon-title">'. esc_attr( $list['title'] ) .'</div>' : '';

        foreach ( $list['icons'] as $icon ) {
          echo '<i title="'. esc_attr( $icon ) .'" class="'. esc_attr( $icon ) .'"></i>';
        }

      }

    } else {

      echo '<div class="csf-text-error">'. esc_html__( 'No data provided by developer', 'csf' ) .'</div>';

    }

    $content = ob_get_clean();

    wp_send_json_success( array( 'content' => $content ) );

  }
  add_action( 'wp_ajax_csf-get-icons', 'csf_get_icons' );
}

/**
 *
 * Export
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'csf_export' ) ) {
  function csf_export() {

    $nonce  = ( ! empty( $_GET[ 'nonce' ] ) ) ? sanitize_text_field( wp_unslash( $_GET[ 'nonce' ] ) ) : '';
    $unique = ( ! empty( $_GET[ 'unique' ] ) ) ? sanitize_text_field( wp_unslash( $_GET[ 'unique' ] ) ) : '';

    if ( ! wp_verify_nonce( $nonce, 'csf_backup_nonce' ) ) {
      die( esc_html__( 'Error: Nonce verification has failed. Please try again.', 'csf' ) );
    }

    if ( empty( $unique ) ) {
      die( esc_html__( 'Error: Options unique id could not valid.', 'csf' ) );
    }

    // Export
    header('Content-Type: application/json');
    header('Content-disposition: attachment; filename=backup-'. gmdate( 'd-m-Y' ) .'.json');
    header('Content-Transfer-Encoding: binary');
    header('Pragma: no-cache');
    header('Expires: 0');

    echo json_encode( get_option( $unique ) );

    die();

  }
  add_action( 'wp_ajax_csf-export', 'csf_export' );
}

/**
 *
 * Import Ajax
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'csf_import_ajax' ) ) {
  function csf_import_ajax() {

    $nonce  = ( ! empty( $_POST[ 'nonce' ] ) ) ? sanitize_text_field( wp_unslash( $_POST[ 'nonce' ] ) ) : '';
    $unique = ( ! empty( $_POST[ 'unique' ] ) ) ? sanitize_text_field( wp_unslash( $_POST[ 'unique' ] ) ) : '';
    $data   = ( ! empty( $_POST[ 'data' ] ) ) ? wp_kses_post_deep( json_decode( wp_unslash( trim( $_POST[ 'data' ] ) ), true ) ) : array();

    if ( ! wp_verify_nonce( $nonce, 'csf_backup_nonce' ) ) {
      wp_send_json_error( array( 'error' => esc_html__( 'Error: Nonce verification has failed. Please try again.', 'csf' ) ) );
    }

    if ( empty( $unique ) ) {
      wp_send_json_error( array( 'error' => esc_html__( 'Error: Options unique id could not valid.', 'csf' ) ) );
    }

    if ( empty( $data ) || ! is_array( $data ) ) {
      wp_send_json_error( array( 'error' => esc_html__( 'Error: Import data could not valid.', 'csf' ) ) );
    }

    // Success
    update_option( $unique, $data );

    wp_send_json_success();

  }
  add_action( 'wp_ajax_csf-import', 'csf_import_ajax' );
}

/**
 *
 * Reset Ajax
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'csf_reset_ajax' ) ) {
  function csf_reset_ajax() {

    $nonce  = ( ! empty( $_POST[ 'nonce' ] ) ) ? sanitize_text_field( wp_unslash( $_POST[ 'nonce' ] ) ) : '';
    $unique = ( ! empty( $_POST[ 'unique' ] ) ) ? sanitize_text_field( wp_unslash( $_POST[ 'unique' ] ) ) : '';

    if ( ! wp_verify_nonce( $nonce, 'csf_backup_nonce' ) ) {
      wp_send_json_error( array( 'error' => esc_html__( 'Error: Nonce verification has failed. Please try again.', 'csf' ) ) );
    }

    // Success
    delete_option( $unique );

    wp_send_json_success();

  }
  add_action( 'wp_ajax_csf-reset', 'csf_reset_ajax' );
}

/**
 *
 * Chosen Ajax
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'csf_chosen_ajax' ) ) {
  function csf_chosen_ajax() {

    $nonce = ( ! empty( $_POST[ 'nonce' ] ) ) ? sanitize_text_field( wp_unslash( $_POST[ 'nonce' ] ) ) : '';
    $type  = ( ! empty( $_POST[ 'type' ] ) ) ? sanitize_text_field( wp_unslash( $_POST[ 'type' ] ) ) : '';
    $term  = ( ! empty( $_POST[ 'term' ] ) ) ? sanitize_text_field( wp_unslash( $_POST[ 'term' ] ) ) : '';
    $query = ( ! empty( $_POST[ 'query_args' ] ) ) ? wp_kses_post_deep( $_POST[ 'query_args' ] ) : array();

    if ( ! wp_verify_nonce( $nonce, 'csf_chosen_ajax_nonce' ) ) {
      wp_send_json_error( array( 'error' => esc_html__( 'Error: Nonce verification has failed. Please try again.', 'csf' ) ) );
    }

    if ( empty( $type ) || empty( $term ) ) {
      wp_send_json_error( array( 'error' => esc_html__( 'Error: Missing request arguments.', 'csf' ) ) );
    }

    $capability = apply_filters( 'csf_chosen_ajax_capability', 'manage_options' );

    if ( ! current_user_can( $capability ) ) {
      wp_send_json_error( array( 'error' => esc_html__( 'You do not have required permissions to access.', 'csf' ) ) );
    }

    // Success
    $options = CSF_Fields::field_data( $type, $term, $query );

    wp_send_json_success( $options );

  }
  add_action( 'wp_ajax_csf-chosen', 'csf_chosen_ajax' );
}

/**
 *
 * Set icons for wp dialog
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'csf_set_icons' ) ) {
  function csf_set_icons() {
    ?>
    <div id="csf-modal-icon" class="csf-modal csf-modal-icon">
      <div class="csf-modal-table">
        <div class="csf-modal-table-cell">
          <div class="csf-modal-overlay"></div>
          <div class="csf-modal-inner">
            <div class="csf-modal-title">
              <?php esc_html_e( 'Add Icon', 'csf' ); ?>
              <div class="csf-modal-close csf-icon-close"></div>
            </div>
            <div class="csf-modal-header csf-text-center">
              <input type="text" placeholder="<?php esc_html_e( 'Search a Icon...', 'csf' ); ?>" class="csf-icon-search" />
            </div>
            <div class="csf-modal-content">
              <div class="csf-modal-loading"><div class="csf-loading"></div></div>
              <div class="csf-modal-load"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
  }
  add_action( 'admin_footer', 'csf_set_icons' );
  add_action( 'customize_controls_print_footer_scripts', 'csf_set_icons' );
}
