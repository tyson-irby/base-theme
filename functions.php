<?php
function codyframe_register_styles()
{

  $theme_version = wp_get_theme()->get('Version');

  wp_enqueue_style('codyframe', get_template_directory_uri() . '/assets/css/style.css', array(), $theme_version);
}

add_action('wp_enqueue_scripts', 'codyframe_register_styles');

function codyframe_register_scripts()
{

  $theme_version = wp_get_theme()->get('Version');

  wp_enqueue_script('codyframe', get_template_directory_uri() . '/assets/js/scripts.js', array(), $theme_version, true);
}

add_action('wp_enqueue_scripts', 'codyframe_register_scripts');

// no-js support
function codyframe_js_support()
{
?>
  <script>
    document.getElementsByTagName("html")[0].className += " js";
  </script>
<?php
}

add_action('wp_print_scripts', 'codyframe_js_support');

// Register Your Menus
function wpb_custom_new_menu()
{
  register_nav_menus(
    array(
      'primary' => __('Primary Menu'),
      'action-menu' => __('Action Menu')
    )
  );
}
add_action('init', 'wpb_custom_new_menu');

?>