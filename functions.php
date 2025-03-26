<?php
function my_theme_menus() {
  register_nav_menus(array(
      'primary' => __('Primary Menu', 'Main Menu'),
      'secondary' => __('Secondary Menu', 'Main Menu'),
  ));
}
add_action('after_setup_theme', 'my_theme_menus');

function my_theme_widget() {
  register_sidebar(array(
      'name' => 'Banner Information',
      'id' => 'bnr_info',
      'before_widget' => '',
      'after_widget' => '',
  ));
  register_sidebar(array(
    'name' => 'middle box3',
    'id' => 'middle_box3',
    'before_widget' => '',
    'after_widget' => '',
));
register_sidebar(array(
  'name' => 'middle Information',
  'id' => 'middle_info',
  'before_widget' => '',
  'after_widget' => '',
));
register_sidebar(array(
  'name' => 'middle box1',
  'id' => 'middle_box1',
  'before_widget' => '',
  'after_widget' => '',
));
register_sidebar(array(
  'name' => 'middle box2',
  'id' => 'middle_box2',
  'before_widget' => '',
  'after_widget' => '',
));
register_sidebar(array(
  'name' => 'middle box1 btn',
  'id' => 'middle_box1_btn',
  'before_widget' => '',
  'after_widget' => '',
));
register_sidebar(array(
  'name' => 'middle box2 btn',
  'id' => 'middle_box2_btn',
  'before_widget' => '',
  'after_widget' => '',
));
register_sidebar(array(
  'name' => 'middle box3 btn',
  'id' => 'middle_box3_btn',
  'before_widget' => '',
  'after_widget' => '',
));
register_sidebar(array(
  'name' => 'Sidebox 1',
  'id' => 'sidebox1',
  'before_widget' => '',
  'after_widget' => '',
));
register_sidebar(array(
  'name' => 'btm1 info',
  'id' => 'btm1_info',
  'before_widget' => '',
  'after_widget' => '',
));
register_sidebar(array(
  'name' => 'btm2 info',
  'id' => 'btm2_info',
  'before_widget' => '',
  'after_widget' => '',
));
register_sidebar(array(
  'name' => 'btm2 box1',
  'id' => 'btm2_box1',
  'before_widget' => '',
  'after_widget' => '',
));
register_sidebar(array(
  'name' => 'btm2 box2',
  'id' => 'btm2_box2',
  'before_widget' => '',
  'after_widget' => '',
));
register_sidebar(array(
  'name' => 'btm2 box3',
  'id' => 'btm2_box3',
  'before_widget' => '',
  'after_widget' => '',
));
register_sidebar(array(
  'name' => 'btm2 box4',
  'id' => 'btm2_box4',
  'before_widget' => '',
  'after_widget' => '',
));
register_sidebar(array(
  'name' => 'btm4 info',
  'id' => 'btm4_info',
  'before_widget' => '',
  'after_widget' => '',
));
register_sidebar(array(
  'name' => 'contact info',
  'id' => 'contact_info_ul',
  'before_widget' => '',
  'after_widget' => '',
));
}
add_action('widgets_init', 'my_theme_widget');