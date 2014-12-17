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
}
