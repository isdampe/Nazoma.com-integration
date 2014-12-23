<?php

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_products',
		'title' => 'Products',
		'fields' => array (
			array (
				'key' => 'field_5490edc8c551b',
				'label' => 'Product information',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5490ecf2ce6dc',
				'label' => 'Product title (h2)',
				'name' => 'product_title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5490ed41ce6dd',
				'label' => 'Product description',
				'name' => 'product_description',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_5490ed7ace6e0',
				'label' => 'Product special flag',
				'name' => 'product_special_flag',
				'type' => 'select',
				'choices' => array (
					'normal' => 'Normal',
					'recommended' => 'Recommended',
					'special' => 'Special',
				),
				'default_value' => 'normal',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5490edbbc551a',
				'label' => 'Amazon',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5490ed4ace6de',
				'label' => 'Amazon URL',
				'name' => 'amazon_url',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5490ed57ce6df',
				'label' => 'Amazon image url',
				'name' => 'amazon_image_url',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'amazon_product',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));

	register_field_group(array (
		'id' => 'acf_home_side',
		'title' => 'Home sidebar',
		'fields' => array(
			array(
				'key' => 'field_78y678gh987gh',
				'label' => 'Background image',
				'name' => 'background_image',
				'type' => 'image',
			)
		),
		'location' => array (
			array (
				array (
					'param' => 'page_type',
					'operator' => '==',
					'value' => 'front_page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default'
		),
		'menu_order' => 0,
	));

		register_field_group(array (
		'id' => 'acf_home',
		'title' => 'Home',
		'fields' => array (
			array (
				'key' => 'field_5499511f28a20',
				'label' => 'Left column',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5499512728a21',
				'label' => 'Title',
				'name' => 'left_column_title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5499513628a22',
				'label' => 'Content',
				'name' => 'left_column_content',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_5499514128a23',
				'label' => 'Right column',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5499514a28a24',
				'label' => 'Title',
				'name' => 'right_column_title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5499515428a25',
				'label' => 'Content',
				'name' => 'right_column_content',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_type',
					'operator' => '==',
					'value' => 'front_page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'the_content',
			),
		),
		'menu_order' => 0,
	));

}
