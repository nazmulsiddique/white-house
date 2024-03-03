<?php

// Theme Function
function git_customizer($wp_customize)
{
	// Logo Area Section
	$wp_customize->add_section('portfolio_header_area', array(
		'title' => __('Header Area', 'portfolio-theme'),
		'description' => 'Logo Update here!'
	));

	$wp_customize->add_setting('logo_image', array(
		'default' => get_template_directory_uri() . '/images/logo-icon.png',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_image', array(
		'label' => 'Logo Upload',
		'setting' => 'logo_image',
		'section' => 'portfolio_header_area',
	)));

	$wp_customize->add_setting('header_contact_number', array(
		'default' => '017XXXXXXXX',
	));
	$wp_customize->add_control('header_contact_number', array(
		'label' => 'Header Contact Number',
		'setting' => 'header_contact_number',
		'section' => 'portfolio_header_area',
	));

    // Slider Section
	$wp_customize->add_section('slider_section_area', array(
		'title' => __('Slider Section', 'portfolio-theme'),
		'description' => 'Slider Section Title & Small & Image & Social link text here!'
	));
	
	$wp_customize->add_setting('slider_section_title_first', array(
		'default' => 'THE NEW WAY OF BUILDING',
	));
	$wp_customize->add_control('slider_section_title_first', array(
		'label' => 'Slider Section Title First Slide',
		'setting' => 'slider_section_title_first',
		'section' => 'slider_section_area',
	));

	$wp_customize->add_setting('slider_section_description_first', array(
		'default' => 'Transform your dreams into reality with every real estate solution and more.',
	));
	$wp_customize->add_control('slider_section_description_first', array(
		'label' => 'Slider Section Description First Slide',
		'setting' => 'slider_section_description_first',
		'section' => 'slider_section_area',
		'type'	  => 'textarea',
	));

	$wp_customize->add_setting('slider_image_first', array(
		'default' => get_bloginfo('template_directory') . '/images/slider-1.jpg',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_image_first', array(
		'label' => 'Slider Section First Slide Image Upload',
		'setting' => 'slider_image_first',
		'section' => 'slider_section_area',
	)));

	
	$wp_customize->add_setting('slider_section_title_second', array(
		'default' => 'THE NEW WAY OF BUILDING',
	));
	$wp_customize->add_control('slider_section_title_second', array(
		'label' => 'Slider Section Title  Second Slide',
		'setting' => 'slider_section_title_second',
		'section' => 'slider_section_area',
	));
	$wp_customize->add_setting('slider_section_description_second', array(
		'default' => 'Transform your dreams into reality with every real estate solution and more.',
	));
	$wp_customize->add_control('slider_section_description_second', array(
		'label' => 'Slider Section Description Second Slide',
		'setting' => 'slider_section_description_second',
		'section' => 'slider_section_area',
		'type'	  => 'textarea',
	));
	$wp_customize->add_setting('slider_image_second', array(
		'default' => get_bloginfo('template_directory') . '/images/slider-2.jpg',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_image_second', array(
		'label' => 'Slider Section Second Slide Image Upload',
		'setting' => 'slider_image_second',
		'section' => 'slider_section_area',
	)));

	$wp_customize->add_setting('slider_section_sociallink_title', array(
		'default' => 'FIND WITH ME',
	));
	$wp_customize->add_control('slider_section_sociallink_title', array(
		'label' => 'Slider Section Social Link Title',
		'setting' => 'slider_section_sociallink_title',
		'section' => 'slider_section_area',
	));

	$wp_customize->add_setting('slider_section_sociallinkfb', array(
		'default' => '#',
	));
	$wp_customize->add_control('slider_section_sociallinkfb', array(
		'label' => 'Slider Section Social Link Facebook',
		'setting' => 'slider_section_sociallinkfb',
		'section' => 'slider_section_area',
	));

	$wp_customize->add_setting('slider_section_sociallinktw', array(
		'default' => '',
	));
	$wp_customize->add_control('slider_section_sociallinktw', array(
		'label' => 'Slider Section Social Link Twitter',
		'setting' => 'slider_section_sociallinktw',
		'section' => 'slider_section_area',
	));

	$wp_customize->add_setting('slider_section_sociallinkyt', array(
		'default' => '',
	));
	$wp_customize->add_control('slider_section_sociallinkyt', array(
		'label' => 'Slider Section Social Link Youtube',
		'setting' => 'slider_section_sociallinkyt',
		'section' => 'slider_section_area',
	));

	$wp_customize->add_setting('slider_section_sociallinkin', array(
		'default' => '',
	));
	$wp_customize->add_control('slider_section_sociallinkin', array(
		'label' => 'Slider Section Social Link LinkedIn',
		'setting' => 'slider_section_sociallinkin',
		'section' => 'slider_section_area',
	));

	$wp_customize->add_setting('slider_section_sociallinkig', array(
		'default' => '',
	));
	$wp_customize->add_control('slider_section_sociallinkig', array(
		'label' => 'Slider Section Social Link Instagram',
		'setting' => 'slider_section_sociallinkig',
		'section' => 'slider_section_area',
	));
	
	// Leaf Section
	$wp_customize->add_section('leaf_section_area', array(
		'title' => __('Leaf Section Logo', 'portfolio-theme'),
		'description' => 'Leaf Section Logo here!'
	));
	$wp_customize->add_setting('leaf_logo_image_1', array(
		'default' => get_bloginfo('template_directory') . '/images/advanced-insight.png',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'leaf_logo_image_1', array(
		'label' => 'Leaf Section Logo One Upload',
		'setting' => 'leaf_logo_image_1',
		'section' => 'leaf_section_area',
	)));
	$wp_customize->add_setting('leaf_logo_image_2', array(
		'default' => get_bloginfo('template_directory') . '/images/interior-architects.png',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'leaf_logo_image_2', array(
		'label' => 'Leaf Section Logo Two Upload',
		'setting' => 'leaf_logo_image_2',
		'section' => 'leaf_section_area',
	)));
	$wp_customize->add_setting('leaf_logo_image_3', array(
		'default' => get_bloginfo('template_directory') . '/images/majesto-logo.png',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'leaf_logo_image_3', array(
		'label' => 'Leaf Section Logo Three Upload',
		'setting' => 'leaf_logo_image_3',
		'section' => 'leaf_section_area',
	)));

    // About Section Heading
	$wp_customize->add_section('about_section_area', array(
		'title' => __('About Section', 'portfolio-theme'),
		'description' => 'About Section Title & Description here!'
	));
	$wp_customize->add_setting('about_section_title', array(
		'default' => 'WE BUILD STORIES THAT LAST',
	));
	$wp_customize->add_control('about_section_title', array(
		'label' => 'About Section Title',
		'setting' => 'about_section_title',
		'section' => 'about_section_area',
	));

	$wp_customize->add_setting('about_banner_image', array(
		'default' => get_bloginfo('template_directory') . '/images/about-bg.png',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_banner_image', array(
		'label' => 'About Section Banner Image Upload',
		'setting' => 'about_banner_image',
		'section' => 'about_section_area',
	)));

	// Key Point Section Section Heading
	$wp_customize->add_section('key_point_section_area', array(
		'title' => __('Key Point Section', 'portfolio-theme'),
		'description' => 'Key Point Section Heading here!'
	));

	$wp_customize->add_setting('key_point_section_small_text', array(
		'default' => 'OUR STRENGTH',
	));

	$wp_customize->add_control('key_point_section_small_text', array(
		'label' => 'Key Point Section Small Text',
		'setting' => 'key_point_section_small_text',
		'section' => 'key_point_section_area',
	));

	$wp_customize->add_setting('key_point_section_headline', array(
		'default' => 'What You Can Expect',
	));
	$wp_customize->add_control('key_point_section_headline', array(
		'label' => 'Key Point Section Heading Text',
		'setting' => 'key_point_section_headline',
		'section' => 'key_point_section_area',
	));


	$wp_customize->add_setting('single_key_point_icon_1', array(
		'default' => get_bloginfo('template_directory') . '/images/command.png',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'single_key_point_icon_1', array(
		'label' => 'Key Point Icon Image Upload 1 (40px * 40px)',
		'setting' => 'single_key_point_icon_1',
		'section' => 'key_point_section_area',
	)));
	$wp_customize->add_setting('single_key_point_title_1', array(
		'default' => 'Everything You Need',
	));
	$wp_customize->add_control('single_key_point_title_1', array(
		'label' => 'Key Point Section title 1',
		'setting' => 'single_key_point_title_1',
		'section' => 'key_point_section_area',
	));
	$wp_customize->add_setting('single_key_point_desc_1', array(
		'default' => 'The market changes, but we don’t. We are high on keeping commitments and ensure that you get your handover in time.',
	));
	$wp_customize->add_control('single_key_point_desc_1', array(
		'label' => 'Key Point Section Description 1',
		'setting' => 'single_key_point_desc_1',
		'section' => 'key_point_section_area',
	));

	$wp_customize->add_setting('single_key_point_icon_2', array(
		'default' => get_bloginfo('template_directory') . '/images/map-pin.png',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'single_key_point_icon_2', array(
		'label' => 'Key Point Icon Image Upload 2 (40px * 40px)',
		'setting' => 'single_key_point_icon_2',
		'section' => 'key_point_section_area',
	)));
	$wp_customize->add_setting('single_key_point_title_2', array(
		'default' => 'Prime Locations',
	));
	$wp_customize->add_control('single_key_point_title_2', array(
		'label' => 'Key Point Section title 2',
		'setting' => 'single_key_point_title_2',
		'section' => 'key_point_section_area',
	));
	$wp_customize->add_setting('single_key_point_desc_2', array(
		'default' => 'The market changes, but we don’t. We are high on keeping commitments and ensure that you get your handover in time.',
	));
	$wp_customize->add_control('single_key_point_desc_2', array(
		'label' => 'Key Point Section Description 2',
		'setting' => 'single_key_point_desc_2',
		'section' => 'key_point_section_area',
	));

	$wp_customize->add_setting('single_key_point_icon_3', array(
		'default' => get_bloginfo('template_directory') . '/images/hand.png',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'single_key_point_icon_3', array(
		'label' => 'Key Point Icon Image Upload 3 (40px * 40px)',
		'setting' => 'single_key_point_icon_3',
		'section' => 'key_point_section_area',
	)));
	$wp_customize->add_setting('single_key_point_title_3', array(
		'default' => 'On-Time Delivery',
	));
	$wp_customize->add_control('single_key_point_title_3', array(
		'label' => 'Key Point Section title 3',
		'setting' => 'single_key_point_title_3',
		'section' => 'key_point_section_area',
	));
	$wp_customize->add_setting('single_key_point_desc_3', array(
		'default' => 'The market changes, but we don’t. We are high on keeping commitments and ensure that you get your handover in time.',
	));
	$wp_customize->add_control('single_key_point_desc_3', array(
		'label' => 'Key Point Section Description 3',
		'setting' => 'single_key_point_desc_3',
		'section' => 'key_point_section_area',
	));

	$wp_customize->add_setting('single_key_point_icon_4', array(
		'default' => get_bloginfo('template_directory') . '/images/star.png',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'single_key_point_icon_4', array(
		'label' => 'Key Point Icon Image Upload 4 (40px * 40px)',
		'setting' => 'single_key_point_icon_4',
		'section' => 'key_point_section_area',
	)));
	$wp_customize->add_setting('single_key_point_title_4', array(
		'default' => 'Quality First',
	));
	$wp_customize->add_control('single_key_point_title_4', array(
		'label' => 'Key Point Section title 4',
		'setting' => 'single_key_point_title_4',
		'section' => 'key_point_section_area',
	));
	$wp_customize->add_setting('single_key_point_desc_4', array(
		'default' => 'The market changes, but we don’t. We are high on keeping commitments and ensure that you get your handover in time.',
	));
	$wp_customize->add_control('single_key_point_desc_4', array(
		'label' => 'Key Point Section Description 4',
		'setting' => 'single_key_point_desc_4',
		'section' => 'key_point_section_area',
	));

	$wp_customize->add_setting('single_key_point_icon_5', array(
		'default' => get_bloginfo('template_directory') . '/images/umbrella.png',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'single_key_point_icon_5', array(
		'label' => 'Key Point Icon Image Upload 5 (40px * 40px)',
		'setting' => 'single_key_point_icon_5',
		'section' => 'key_point_section_area',
	)));
	$wp_customize->add_setting('single_key_point_title_5', array(
		'default' => 'After Handover Support',
	));
	$wp_customize->add_control('single_key_point_title_5', array(
		'label' => 'Key Point Section title 5',
		'setting' => 'single_key_point_title_5',
		'section' => 'key_point_section_area',
	));
	$wp_customize->add_setting('single_key_point_desc_5', array(
		'default' => 'The market changes, but we don’t. We are high on keeping commitments and ensure that you get your handover in time.',
	));
	$wp_customize->add_control('single_key_point_desc_5', array(
		'label' => 'Key Point Section Description 5',
		'setting' => 'single_key_point_desc_5',
		'section' => 'key_point_section_area',
	));

// Landowner Section 
	$wp_customize->add_section('landowner_section_area', array(
		'title' => __('Landowner Section', 'portfolio-theme'),
		'description' => 'Landowner Area Title & Description here!'
	));

	$wp_customize->add_setting('landowner_section_small_title', array(
		'default' => 'IF YOU ARE A LANDOWNER',
	));
	$wp_customize->add_control('landowner_section_small_title', array(
		'label' => 'Landowner Area Small Text',
		'setting' => 'landowner_section_small_title',
		'section' => 'landowner_section_area',
	));

	$wp_customize->add_setting('landowner_section_title', array(
		'default' => 'Give Your Lands A Value Of Their Worth.',
	));
	$wp_customize->add_control('landowner_section_title', array(
		'label' => 'Landowner Area Title',
		'setting' => 'landowner_section_title',
		'section' => 'landowner_section_area',
	));
	
	$wp_customize->add_setting('landowner_button_text', array(
		'default' => 'LEARN HOW',
	));
	$wp_customize->add_control('landowner_button_text', array(
		'label' => 'Landowner Area Button Text',
		'setting' => 'landowner_button_text',
		'section' => 'landowner_section_area',
	));

	$wp_customize->add_setting('landowner_button_text_link', array(
		'default' => 'LEARN HOW',
	));
	$wp_customize->add_control('landowner_button_text_link', array(
		'label' => 'Landowner Area  Button Link',
		'setting' => 'landowner_button_text_link',
		'section' => 'landowner_section_area',
	));

	$wp_customize->add_setting('landowner_section_scroll_bg_image', array(
		'default' => get_bloginfo('template_directory') . '/images/land-owner-bg.jpg',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'landowner_section_scroll_bg_image', array(
		'label' => 'Landowner Section Background Image Upload',
		'setting' => 'landowner_section_scroll_bg_image',
		'section' => 'landowner_section_area',
	)));
	
	$wp_customize->add_setting('landowner_section_scroll_image', array(
		'default' => get_bloginfo('template_directory') . '/images/land-owner-home.png',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'landowner_section_scroll_image', array(
		'label' => 'Landowner Section Scroll Image upload',
		'setting' => 'landowner_section_scroll_image',
		'section' => 'landowner_section_area',
	)));
	
	// Expertise Area Section Heading
	$wp_customize->add_section('expertise_section_area', array(
		'title' => __('Expertise Section', 'portfolio-theme'),
		'description' => 'Expertise Area Title & Description here!'
	));

	$wp_customize->add_setting('expertise_section_status', array(
		'default' => 'No',
		'sanitize_callback' => 'sanitize_custom_option1',
	));
	$wp_customize->add_control('expertise_section_status', array(
		'label' => 'Expertise Area Enable Or Disable',
		'setting' => 'expertise_section_status',
		'section' => 'expertise_section_area',
		'type' => 'select',
		'choices' => array('No' => 'No', 'Yes' => 'Yes')
	));
	function sanitize_custom_option1($input){
		return ($input === "No") ? "No" : "Yes";
	}

	$wp_customize->add_setting('expertise_section_title', array(
		'default' => 'Expertise Area',
	));
	$wp_customize->add_control('expertise_section_title', array(
		'label' => 'Expertise Area Title',
		'setting' => 'expertise_section_title',
		'section' => 'expertise_section_area',
	));
	
	$wp_customize->add_setting('expertise_section_description', array(
		'default' => 'Visit my Expertise and keep your feedback',
	));

	$wp_customize->add_control('expertise_section_description', array(
		'label' => 'Expertise Area Description',
		'setting' => 'expertise_section_description',
		'section' => 'expertise_section_area',
	));


// Our Approach Section
	$wp_customize->add_section('approach_section_area', array(
		'title' => __('Our Unique Approach', 'portfolio-theme'),
		'description' => 'Our Unique Approach Area Title & Description  & Image here!'
	));

	$wp_customize->add_setting('approach_tab_1_title', array(
		'default' => 'Development +',
	));
	$wp_customize->add_control('approach_tab_1_title', array(
		'label' => 'Our Approach Tab 1 Title',
		'setting' => 'approach_tab_1_title',
		'section' => 'approach_section_area',
	));

	$wp_customize->add_setting('approach_tab_1_image_one', array(
		'default' => get_bloginfo('template_directory') . '/images/development-1.png',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'approach_tab_1_image_one', array(
		'label' => 'Our Approach Tab 1 Image One',
		'setting' => 'approach_tab_1_image_one',
		'section' => 'approach_section_area',
	)));

	$wp_customize->add_setting('approach_tab_1_image_two', array(
		'default' => get_bloginfo('template_directory') . '/images/development-3.png',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'approach_tab_1_image_two', array(
		'label' => 'Our Approach Tab 1 Image Two',
		'setting' => 'approach_tab_1_image_two',
		'section' => 'approach_section_area',
	)));

	$wp_customize->add_setting('approach_tab_1_description', array(
		'default' => 'We help you with every aspect to transform a place that you just own, to a place that you live in.',
	));
	$wp_customize->add_control('approach_tab_1_description', array(
		'label' => 'Our Approach Tab 1 Description',
		'setting' => 'approach_tab_1_description',
		'section' => 'approach_section_area',
		'type'	  => 'textarea',
	));
	
	$wp_customize->add_setting('approach_tab_2_title', array(
		'default' => 'Interior+',
	));
	$wp_customize->add_control('approach_tab_2_title', array(
		'label' => 'Our Approach Tab 2 Title',
		'setting' => 'approach_tab_2_title',
		'section' => 'approach_section_area',
	));

	$wp_customize->add_setting('approach_tab_2_image_one', array(
		'default' => get_bloginfo('template_directory') . '/images/interior-1.png',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'approach_tab_2_image_one', array(
		'label' => 'Our Approach Tab 2 Image One',
		'setting' => 'approach_tab_2_image_one',
		'section' => 'approach_section_area',
	)));

	$wp_customize->add_setting('approach_tab_2_image_two', array(
		'default' => get_bloginfo('template_directory') . '/images/interior-2.png',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'approach_tab_2_image_two', array(
		'label' => 'Our Approach Tab 2 Image Two',
		'setting' => 'approach_tab_2_image_two',
		'section' => 'approach_section_area',
	)));
	
	$wp_customize->add_setting('approach_tab_2_description', array(
		'default' => 'We help you with every aspect to transform a place that you just own, to a place that you live in.',
	));
	$wp_customize->add_control('approach_tab_2_description', array(
		'label' => 'Our Approach Tab 2 Description',
		'setting' => 'approach_tab_2_description',
		'section' => 'approach_section_area',
		'type'	  => 'textarea',
	));

	$wp_customize->add_setting('approach_tab_3_title', array(
		'default' => 'Furnitures',
	));
	$wp_customize->add_control('approach_tab_3_title', array(
		'label' => 'Our Approach Tab 3 Title',
		'setting' => 'approach_tab_3_title',
		'section' => 'approach_section_area',
	));

	$wp_customize->add_setting('approach_tab_3_image_one', array(
		'default' => get_bloginfo('template_directory') . '/images/fruniture-1.png',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'approach_tab_3_image_one', array(
		'label' => 'Our Approach Tab 3 Image One',
		'setting' => 'approach_tab_3_image_one',
		'section' => 'approach_section_area',
	)));

	$wp_customize->add_setting('approach_tab_3_image_two', array(
		'default' => get_bloginfo('template_directory') . '/images/furniture-2.png',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'approach_tab_3_image_two', array(
		'label' => 'Our Approach Tab 3 Image Two',
		'setting' => 'approach_tab_3_image_two',
		'section' => 'approach_section_area',
	)));
	
	$wp_customize->add_setting('approach_tab_3_description', array(
		'default' => 'We help you with every aspect to transform a place that you just own, to a place that you live in.',
	));
	$wp_customize->add_control('approach_tab_3_description', array(
		'label' => 'Our Approach Tab 3 Description',
		'setting' => 'approach_tab_3_description',
		'section' => 'approach_section_area',
		'type'	  => 'textarea',
	));

	// Our Project Section Heading
	$wp_customize->add_section('our_project_section_area', array(
		'title' => __('Our Project Section', 'portfolio-theme'),
		'description' => 'Our Project Section Title & Description & Image here!'
	));

	$wp_customize->add_setting('our_project_tab_1_tab_title', array(
		'default' => 'Ongoing',
	));
	$wp_customize->add_control('our_project_tab_1_tab_title', array(
		'label' => 'Our Project Tab 1 Tab Title',
		'setting' => 'our_project_tab_1_tab_title',
		'section' => 'our_project_section_area',
	));

	$wp_customize->add_setting('our_project_tab_1_image_one', array(
		'default' => get_bloginfo('template_directory') . '/images/project-1.jpg',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'our_project_tab_1_image_one', array(
		'label' => 'Our Project Tab 1 Image One',
		'setting' => 'our_project_tab_1_image_one',
		'section' => 'our_project_section_area',
	)));

	$wp_customize->add_setting('our_project_tab_1_image_two', array(
		'default' => get_bloginfo('template_directory') . '/images/project-2.jpg',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'our_project_tab_1_image_two', array(
		'label' => 'Our Project Tab 1 Image Two',
		'setting' => 'our_project_tab_1_image_two',
		'section' => 'our_project_section_area',
	)));

	$wp_customize->add_setting('our_project_tab_1_image_three', array(
		'default' => get_bloginfo('template_directory') . '/images/project-3.jpg',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'our_project_tab_1_image_three', array(
		'label' => 'Our Project Tab 1 Image Three',
		'setting' => 'our_project_tab_1_image_three',
		'section' => 'our_project_section_area',
	)));

	$wp_customize->add_setting('our_project_tab_1_title', array(
		'default' => 'Armania Homes',
	));
	$wp_customize->add_control('our_project_tab_1_title', array(
		'label' => 'Our Project Tab 1 Project Title',
		'setting' => 'our_project_tab_1_title',
		'section' => 'our_project_section_area',
	));

	$wp_customize->add_setting('our_project_tab_1_category', array(
		'default' => 'Residential',
	));
	$wp_customize->add_control('our_project_tab_1_category', array(
		'label' => 'Our Project Tab 1 Project Category',
		'setting' => 'our_project_tab_1_category',
		'section' => 'our_project_section_area',
	));
	$wp_customize->add_setting('our_project_tab_1_status', array(
		'default' => 'Available',
	));
	$wp_customize->add_control('our_project_tab_1_status', array(
		'label' => 'Our Project Tab 1 Project Status',
		'setting' => 'our_project_tab_1_status',
		'section' => 'our_project_section_area',
	));

	$wp_customize->add_setting('our_project_tab_1_address', array(
		'default' => 'Block D, Road 11, Gulshan 2, Dhaka',
	));

	$wp_customize->add_control('our_project_tab_1_address', array(
		'label' => 'Our Project Tab 1 Project Address',
		'setting' => 'our_project_tab_1_address',
		'section' => 'our_project_section_area',
	));

	$wp_customize->add_setting('our_project_tab_2_tab_title', array(
		'default' => 'Upcoming',
	));
	$wp_customize->add_control('our_project_tab_2_tab_title', array(
		'label' => 'Our Project Tab 2 Tab Title',
		'setting' => 'our_project_tab_2_tab_title',
		'section' => 'our_project_section_area',
	));

	$wp_customize->add_setting('our_project_tab_2_image_one', array(
		'default' => get_bloginfo('template_directory') . '/images/project-4.jpg',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'our_project_tab_2_image_one', array(
		'label' => 'Our Project Tab 2 Image One',
		'setting' => 'our_project_tab_2_image_one',
		'section' => 'our_project_section_area',
	)));

	$wp_customize->add_setting('our_project_tab_2_image_two', array(
		'default' => get_bloginfo('template_directory') . '/images/project-5.jpg',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'our_project_tab_2_image_two', array(
		'label' => 'Our Project Tab 2 Image Two',
		'setting' => 'our_project_tab_2_image_two',
		'section' => 'our_project_section_area',
	)));

	$wp_customize->add_setting('our_project_tab_2_image_three', array(
		'default' => get_bloginfo('template_directory') . '/images/project-6.jpg',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'our_project_tab_2_image_three', array(
		'label' => 'Our Project Tab 2 Image Three',
		'setting' => 'our_project_tab_2_image_three',
		'section' => 'our_project_section_area',
	)));

	$wp_customize->add_setting('our_project_tab_2_title', array(
		'default' => 'The Highfield',
	));
	$wp_customize->add_control('our_project_tab_2_title', array(
		'label' => 'Our Project Tab 2 Project Title',
		'setting' => 'our_project_tab_2_title',
		'section' => 'our_project_section_area',
	));

	$wp_customize->add_setting('our_project_tab_2_category', array(
		'default' => 'Residential',
	));
	$wp_customize->add_control('our_project_tab_2_category', array(
		'label' => 'Our Project Tab 2 Project Category',
		'setting' => 'our_project_tab_2_category',
		'section' => 'our_project_section_area',
	));
	$wp_customize->add_setting('our_project_tab_2_status', array(
		'default' => 'Available',
	));
	$wp_customize->add_control('our_project_tab_2_status', array(
		'label' => 'Our Project Tab 2 Project Status',
		'setting' => 'our_project_tab_2_status',
		'section' => 'our_project_section_area',
	));

	$wp_customize->add_setting('our_project_tab_2_address', array(
		'default' => 'Block D, Road 11, Gulshan 2, Dhaka',
	));

	$wp_customize->add_control('our_project_tab_2_address', array(
		'label' => 'Our Project Tab 2 Project Address',
		'setting' => 'our_project_tab_2_address',
		'section' => 'our_project_section_area',
	));

	// Contact Section Heading
	$wp_customize->add_section('contact_section_area', array(
		'title' => __('Contact Section', 'portfolio-theme'),
		'description' => 'Contact Section Information here!'
	));

	$wp_customize->add_setting('contact_section_small_text', array(
		'default' => 'LET’S CONNECT',
	));
	$wp_customize->add_control('contact_section_small_text', array(
		'label' => 'Contact Section Small Text here!',
		'setting' => 'contact_section_small_text',
		'section' => 'contact_section_area',
	));
	$wp_customize->add_setting('contact_section_heading', array(
		'default' => 'How Can We Help?',
	));
	$wp_customize->add_control('contact_section_heading', array(
		'label' => 'Contact Section Heading',
		'setting' => 'contact_section_heading',
		'section' => 'contact_section_area',
	));

	$wp_customize->add_setting('contact_section_visit_us', array(
		'default' => 'Visit Us',
	));
	$wp_customize->add_control('contact_section_visit_us', array(
		'label' => 'Contact Section Address Visit Us Heading',
		'setting' => 'contact_section_visit_us',
		'section' => 'contact_section_area',
	));

	$wp_customize->add_setting('contact_section_address', array(
		'default' => 'H-12/A, R-110, Gulshan 2, Dhaka, Bangladesh 1212',
	));
	$wp_customize->add_control('contact_section_address', array(
		'label' => 'Contact Section Textarea',
		'setting' => 'contact_section_address',
		'section' => 'contact_section_area',
		'type'	  => 'textarea',
	));

	$wp_customize->add_setting('contact_section_mobile', array(
		'default' => '01932299191',
	));
	$wp_customize->add_control('contact_section_mobile', array(
		'label' => 'Contact Section Mobile Number',
		'setting' => 'contact_section_mobile',
		'section' => 'contact_section_area',
	));

	$wp_customize->add_setting('contact_section_email', array(
		'default' => 'nazmulit92@gmail.com',
	));
	$wp_customize->add_control('contact_section_email', array(
		'label' => 'Contact Section Email Address',
		'setting' => 'contact_section_email',
		'section' => 'contact_section_area',
	));

	$wp_customize->add_setting('contact_section_web', array(
		'default' => 'tstwhitehouseltd.com',
	));
	$wp_customize->add_control('contact_section_web', array(
		'label' => 'Contact Section Website url',
		'setting' => 'contact_section_web',
		'section' => 'contact_section_area',
	));

	$wp_customize->add_setting('contact_section_contactform', array(
		'default' => '',
	));
	$wp_customize->add_control('contact_section_contactform', array(
		'label' => 'Contact Section Contact Form Short Code',
		'setting' => 'contact_section_contactform',
		'section' => 'contact_section_area',
	));


	// Footer Section
	$wp_customize->add_section('portfolio_footer_area', array(
		'title' => __('Footer Area', 'portfolio-theme'),
		'description' => 'Footer Content here!'
	));
	// Footer Section Logo
	$wp_customize->add_setting('footer_logo_image', array(
		'default' => get_bloginfo('template_directory') . '/images/logo-with-text.png',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo_image', array(
		'label' => 'Footer Logo Upload',
		'setting' => 'footer_logo_image',
		'section' => 'portfolio_footer_area',
	)));
	$wp_customize->add_setting('bottom_to_top_logo_image', array(
		'default' => get_bloginfo('template_directory') . '/images/circle-up-arrow.png',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'bottom_to_top_logo_image', array(
		'label' => 'Footer Bottom To Top Icon Upload',
		'setting' => 'bottom_to_top_logo_image',
		'section' => 'portfolio_footer_area',
	)));

	$wp_customize->add_setting('copyright_section', array(
		'default' => '&copy; Copyright 2024 | All right Resurved',
	));
	$wp_customize->add_control('copyright_section', array(
		'label' => 'Copyright Text',
		'setting' => 'copyright_section',
		'section' => 'portfolio_footer_area',
	));
}

add_action('customize_register', 'git_customizer');
