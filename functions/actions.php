<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.
/**
 *
 * Get icons from admin ajax
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! function_exists( 'csf_get_icons' ) ) {
  function csf_get_icons() {

    if( ! empty( $_POST['nonce'] ) && wp_verify_nonce( $_POST['nonce'], 'csf_icon_nonce' ) ) {

      ob_start();

      CSF::include_plugin_file( 'fields/icon/default-icons.php' );

      $icon_lists = apply_filters( 'csf_field_icon_add_icons', csf_get_default_icons() );

      if( ! empty( $icon_lists ) ) {

        foreach ( $icon_lists as $list ) {

          echo ( count( $icon_lists ) >= 2 ) ? '<div class="csf-icon-title">'. $list['title'] .'</div>' : '';

          foreach ( $list['icons'] as $icon ) {
            echo '<a class="csf-icon-tooltip" data-csf-icon="'. $icon .'" title="'. $icon .'"><span class="csf-icon csf-selector"><i class="'. $icon .'"></i></span></a>';
          }

        }

      } else {

        echo '<div class="csf-text-error">'. esc_html__( 'No data provided by developer', 'csf' ) .'</div>';

      }

      wp_send_json_success( array( 'content' => ob_get_clean() ) );

    } else {

      wp_send_json_error( array( 'error' => esc_html__( 'Error: Nonce verification has failed. Please try again.', 'csf' ) ) );

    }

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
if( ! function_exists( 'csf_export' ) ) {
  function csf_export() {

    if( ! empty( $_GET['export'] ) && ! empty( $_GET['nonce'] ) && wp_verify_nonce( $_GET['nonce'], 'csf_backup_nonce' ) ) {

      header('Content-Type: application/json');
      header('Content-disposition: attachment; filename=backup-'. gmdate( 'd-m-Y' ) .'.json');
      header('Content-Transfer-Encoding: binary');
      header('Pragma: no-cache');
      header('Expires: 0');

      echo json_encode( get_option( wp_unslash( $_GET['export'] ) ) );

    }

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
if( ! function_exists( 'csf_import_ajax' ) ) {
  function csf_import_ajax() {

    if( ! empty( $_POST['import_data'] ) && ! empty( $_POST['unique'] ) && ! empty( $_POST['nonce'] ) && wp_verify_nonce( $_POST['nonce'], 'csf_backup_nonce' ) ) {

      $import_data = json_decode( wp_unslash( trim( $_POST['import_data'] ) ), true );

      if( is_array( $import_data ) ) {

        update_option( wp_unslash( $_POST['unique'] ), wp_unslash( $import_data ) );
        wp_send_json_success();

      }

    }

    wp_send_json_error( array( 'error' => esc_html__( 'Error: Nonce verification has failed. Please try again.', 'csf' ) ) );

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
if( ! function_exists( 'csf_reset_ajax' ) ) {
  function csf_reset_ajax() {

    if( ! empty( $_POST['unique'] ) && ! empty( $_POST['nonce'] ) && wp_verify_nonce( $_POST['nonce'], 'csf_backup_nonce' ) ) {
      delete_option( wp_unslash( $_POST['unique'] ) );
      wp_send_json_success();
    }

    wp_send_json_error( array( 'error' => esc_html__( 'Error: Nonce verification has failed. Please try again.', 'csf' ) ) );

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
if( ! function_exists( 'csf_chosen_ajax' ) ) {
  function csf_chosen_ajax() {

    if( ! empty( $_POST['term'] ) && ! empty( $_POST['type'] ) && ! empty( $_POST['nonce'] ) && wp_verify_nonce( $_POST['nonce'], 'csf_chosen_ajax_nonce' ) ) {

      $capability = apply_filters( 'csf_chosen_ajax_capability', 'manage_options' );

      if( current_user_can( $capability ) ) {

        $type       = $_POST['type'];
        $term       = $_POST['term'];
        $query_args = ( ! empty( $_POST['query_args'] ) ) ? $_POST['query_args'] : array();
        $options    = CSF_Fields::field_data( $type, $term, $query_args );

        wp_send_json_success( $options );

      } else {
        wp_send_json_error( array( 'error' => esc_html__( 'You do not have required permissions to access.', 'csf' ) ) );
      }

    } else {
      wp_send_json_error( array( 'error' => esc_html__( 'Error: Nonce verification has failed. Please try again.', 'csf' ) ) );
    }

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
if( ! function_exists( 'csf_set_icons' ) ) {
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
