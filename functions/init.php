<?php
// Enqueue style and js
function resp_theme_files()
{
  wp_enqueue_style('resp_theme_main_styles', get_theme_file_uri('/build/style-index.css'));
  // Javascript need to be loaded in footer: last variable need to be true
  wp_enqueue_script('resp_theme_js', get_template_directory_uri() . '/build/index.js', array(), '', true);
}
add_action('wp_enqueue_scripts', 'resp_theme_files');

// Add custom acf block editor(backend) style
function enqueue_block_editor_custom_files()
{
  wp_enqueue_style('acf-block-editor-style', get_template_directory_uri() . '/css/acf-editor-style.css');
}
add_action('enqueue_block_editor_assets', 'enqueue_block_editor_custom_files');

function resp_theme_features()
{
  /*
* Let WordPress manage the document title.
* By adding theme support, we declare that this theme does not use a
* hard-coded <title> tag in the document head, and expect WordPress to
  * provide it for us.
  */
  add_theme_support('title-tag');
  // add_theme_support('post-thumbnails');
  // add_image_size('professorLandscape', 400, 260, true);
  //Use frontend style in backend editor
  add_theme_support('editor-styles');
  add_editor_style(array('build/style-index.css', 'build/acf-editor-style.css'));
}
add_action('after_setup_theme', 'resp_theme_features');



// Font localize
class local_fonts
{
  function __construct()
  {
    add_action('wp_enqueue_scripts', array($this, 'fonts'));
  }

  function fonts()
  {
    // Generate correspond fonts.css by https://gwfh.mranftl.com/fonts
    wp_enqueue_style('fonts_css', get_theme_file_uri('asset/fonts/fonts.css'), array(), 1.0, false);
  }
}
new local_fonts();
