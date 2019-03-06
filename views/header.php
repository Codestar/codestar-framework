<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.

  $demo    = get_option( 'csf_demo_mode', false );
  $text    = ( ! empty( $demo ) ) ? 'Deactivate' : 'Activate';
  $status  = ( ! empty( $demo ) ) ? 'deactivate' : 'activate';
  $class   = ( ! empty( $demo ) ) ? ' csf-warning-primary' : '';
  $section = ( ! empty( $_GET['section'] ) ) ? $_GET['section'] : 'about';
  $links   = array(
    'about'           => 'About',
    'quickstart'      => 'Quick Start',
    'documentation'   => 'Documentation',
    'free-vs-premium' => 'Free vs Premium',
    'support'         => 'Support',
    'relnotes'        => 'Release Notes',
  );

?>
<div class="csf-welcome csf-welcome-wrap">

  <h1>Welcome to Codestar Framework v<?php echo CSF::$version; ?></h1>

  <p class="csf-about-text">A Simple and Lightweight WordPress Option Framework for Themes and Plugins</p>

  <p class="csf-demo-button"><a href="<?php echo add_query_arg( array( 'csf-demo' => $status ) ); ?>" class="button button-primary<?php echo $class; ?>"><?php echo $text; ?> Demo</a></p>

  <div class="csf-logo">
    <div class="csf--effects"><i></i><i></i><i></i><i></i></div>
    <div class="csf--wp-logos">
      <div class="csf--wp-logo"></div>
      <div class="csf--wp-plugin-logo"></div>
    </div>
    <div class="csf--text">Codestar Framework</div>
    <div class="csf--text csf--version">v<?php echo CSF::$version; ?></div>
  </div>

  <h2 class="nav-tab-wrapper wp-clearfix">
    <?php
      foreach( $links as $key => $link ) {

        if( CSF::$premium && $key === 'free-vs-premium' ) { continue; }

        $activate = ( $section === $key ) ? ' nav-tab-active' : '';

        echo '<a href="'. add_query_arg( array( 'page' => 'csf-welcome', 'section' => $key ), admin_url( 'tools.php' ) ) .'" class="nav-tab'. $activate .'">'. $link .'</a>';

      }
    ?>
  </h2>
