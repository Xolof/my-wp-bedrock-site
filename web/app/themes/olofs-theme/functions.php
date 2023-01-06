<?php

/**
 * Add title tag dynamically.
 */
function xolof_theme_support()
{
  add_theme_support("title-tag");
  add_theme_support("custom-logo");
  add_theme_support("post-thumbnails");
}

add_action("after_setup_theme", "xolof_theme_support");

function xolof_menus()
{
  $locations = [
    "primary" => "Desktop primary Left Sidebar",
    "footer" => "Footer menu items"
  ];

  register_nav_menus($locations);
}

add_action("init", "xolof_menus");


function xolof_register_styles()
{
  $version = wp_get_theme()->get("Version");

  wp_enqueue_style(
    "xolof-style",
    get_template_directory_uri() . "/style.css",
    array(),
    $version,
    "all"
  );

  wp_enqueue_style(
    "xolof-font-awesome",
    "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css",
    array(),
    "5.13.0",
    "all"
  );
}

add_action(
  "wp_enqueue_scripts",
  "xolof_register_styles"
);

function xolof_register_scripts()
{
    wp_enqueue_script(
    "xolof-script",
    get_template_directory_uri() . "/assets/js/main.js",
    array(),
    "1.0",
    true
  );
}

add_action(
  "wp_enqueue_scripts",
  "xolof_register_scripts"
);

function xolof_widget_areas()
{
  register_sidebar([
    'name' => 'Sidebar Area',
    'id' => 'sidebar-1',
    'description' => 'Sidebar Widget Area',
    'before_title' => '',
    'after_title' => ''
  ]);

  register_sidebar([
    'name' => 'Footer Area',
    'id' => 'footer-1',
    'description' => 'Footer Widget Area',
    'before_title' => '',
    'after_title' => '',
    'before_widget' => '',
    'after_widget' => ''
  ]);
}

add_action('widgets_init', 'xolof_widget_areas');

?>