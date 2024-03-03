<?php
// Widget Register

function theme_widgets_register(){
	register_sidebar(array(
		'name' => __('Footer Left', 'portfolio-theme'),
		'id' => 'footer-1',
		'description' => __('Apperas om the sidebar in blog page and also other page', 'portfolio-theme'),
		'before_widget' => '<div class="sidebar-area">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="title-area">',
		'after_title' => '</h2>',
	));
	register_sidebar(array(
		'name' => __('Footer Center', 'portfolio-theme'),
		'id' => 'footer-2',
		'description' => __('Apperas om the sidebar in blog page and also other page', 'portfolio-theme'),
		'before_widget' => '<div class="sidebar-area">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="title-area">',
		'after_title' => '</h2>',
	));
	register_sidebar(array(
		'name' => __('Footer Right', 'portfolio-theme'),
		'id' => 'footer-3',
		'description' => __('Apperas om the sidebar in blog page and also other page', 'portfolio-theme'),
		'before_widget' => '<div class="sidebar-area">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="title-area">',
		'after_title' => '</h2>',
	));

}

add_action('widgets_init', 'theme_widgets_register');
add_filter( 'use_widgets_block_editor', '__return_false' );

