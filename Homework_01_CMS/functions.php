<?php

$sidebar_args = array(
  'id'	  => 'right-sidebar',
  'name'  => 'Main Sidebar',
  'class' => 'widget widget_categories',
  
);

register_sidebar($sidebar_args);

register_nav_menu('top-site-menu', 'This is my top site menu' );







$footer_args = array(
  'id'	  => 'footer_menu',
  'name'  => 'My Custom Footer Menu',
  'class' => 'menu-footer-menu-container',

  
);

register_sidebar($footer_args);

register_nav_menu('footer_menu', 'This is my footer menu' );

