<?php

namespace Roots\Sage\Customizer;

use Roots\Sage\Assets;

/**
 * Add postMessage support
 */
function customize_register($wp_customize) {
  $wp_customize->get_setting('blogname')->transport = 'postMessage';
}
add_action('customize_register', __NAMESPACE__ . '\\customize_register');

/**
 * Customizer JS
 */
function customize_preview_js() {
  wp_enqueue_script('sage/customizer', Assets\asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
}
add_action('customize_preview_init', __NAMESPACE__ . '\\customize_preview_js');



function leader_customize_register($wp_customize) {
	//adding section in wordpress customizer 

	$settings = array(
		array(
			'panel' => 'leader_header_options',
			'panel_title' => __('Header', 'leadership'),
			'description' => __('Change the Header Settings from here as you want', 'leadership'),
			'sections' => 
				array(
					array(
					'section' => 'leader_header_section',
					'title' => 'Logo',
					'options' => array(
						array(
							'slug' => 'leader_logo',
							'default' => '',
							'label' => __('Upload White Logo', 'leadership'),
							'sanitize_callback' => 'esc_url_raw',
							'type' => 'image'
						),
						array(
							'slug' => 'leader_black_logo',
							'default' => '',
							'label' => __('Upload Black Logo', 'leadership'),
							'sanitize_callback' => 'esc_url_raw',
							'type' => 'image'
						)
					)
				)
				
			)
		),
		array(
			'panel' => 'leader_heading_options',
			'panel_title' => __('Headings', 'leadership'),
			'description' => __('Change the heading settings from here as you want', 'leadership'),
			'sections' => 
				array(
					array(
					'section' => 'leader_heading_section',
					'title' => 'Site Headings',
					'options' => array(
						array(
							'slug' => 'leader_recent_blog_text',
							'default' => __( 'Recent Blog Articles', 'leadership' ),
							'label' => __('Recent Blog Text', 'leadership'),
							'type' => 'text'
						),
						array(
							'slug' => 'leader_group_services_text',
							'default' => __( 'The Leadership Group Services', 'leadership' ),
							'label' => __('Services Title', 'leadership'),
							'type' => 'text'
						),
						array(
							'slug' => 'leader_case_studies_text',
							'default' => __( 'A selection of case studies', 'leadership' ),
							'label' => __('Case Studies Title', 'leadership'),
							'type' => 'text'
						)
					)
				)
				
			)
		),
		array(
			'panel' => 'leader_blog_options',
			'panel_title' => __('Blog', 'leadership'),
			'description' => __('Change the blog settings from here as you want', 'leadership'),
			'sections' => 
				array(
					array(
						'section' => 'leader_blog_section',
						'title' => 'Blogs',
						'options' => array(
							array(
								'slug' => 'leader_featured_blog_title',
								'default' => __( 'The Leadership Blog', 'leadership' ),
								'label' => __('Blog Heading', 'leadership'),
								'type' => 'text'
							),
							array(
								'slug' => 'leader_featured_article',
								'default' => '',
								'label' => __('Featured Articles', 'leadership'),
								'type' => 'select',
								'choices' => get_posts_array(),
							),
							
						)
					),
					array(
						'section' => 'leader_recent_article_section',
						'title' => 'Recent Articles',
						'options' => array(
							array(
								'slug' => 'leader_recent_article_logo',
								'default' => '',
								'label' => __('Upload Recent Article Image', 'leadership'),
								'sanitize_callback' => 'esc_url_raw',
								'type' => 'image'
							),
							array(
								'slug' => 'leader_recent_article_link',
								'default' => '',
								'label' => __('Link', 'leadership'),
								'type' => 'text',
							),
							
						)
					)
				
			)
		),
		array(
			'panel' => 'leader_about_options',
			'panel_title' => __('About', 'leadership'),
			'description' => __('Change the about settings from here as you want', 'leadership'),
			'sections' => 
				array(
					array(
					'section' => 'leader_about_section',
					'title' => 'About',
					'options' => array(
						array(
							'slug' => 'leader_about_picture',
							'default' => '',
							'label' => __('Picture', 'leadership'),
							'sanitize_callback' => 'esc_url_raw',
							'type' => 'image'
						),
						array(
							'slug' => 'leader_about_title',
							'default' => '',
							'label' => __('About', 'leadership'),
							'type' => 'text',
						),
						array(
							'slug' => 'leader_about_description',
							'default' => '',
							'label' => __('Description', 'leadership'),
							'type' => 'textarea',
						),
						
					)
				)
				
			)
		),
		array(
			'panel' => 'leader_footer_options',
			'panel_title' => __('Footer', 'leadership'),
			'description' => __('Change the Footer Settings from here as you want', 'leadership'),
			'sections' => array(
				array(
					'section' => 'leader_footer_section',
					'title' => __('Copyright' , 'leadership'),
					'options' => array(
						array(
							'slug' => 'leader_qr_logo',
							'default' => '',
							'label' => __('QR Logo', 'leadership'),
							'sanitize_callback' => 'esc_url_raw',
							'type' => 'image'
						),
						array(
							'slug' => 'leader_copyright',
							'default' => '©The leadership group 2015. All rights reserved.',
							'type' => 'text',
							'label' => __('Copyright Text', 'leadership'),
						),
						array(
							'slug' => 'leader_developer',
							'default' => '',
							'type' => 'text',
							'label' => __('Design & Development Text', 'leadership'),
						),
						array(
							'slug' => 'leader_developer_logo',
							'default' => '',
							'label' => __('Developer Logo', 'leadership'),
							'sanitize_callback' => 'esc_url_raw',
							'type' => 'image'
						)
					)
				),
				array(
					'section' => 'leader_social_media_section',
					'title' => 'Social Media',
					'options' => array(
						array(
							'slug' => 'leader_social_media_enable_facebook',
							'default' => 1,
							'type' => 'checkbox',
							'label' => __('Enable facebook', 'leadership'),
						),
						array(
							'slug' => 'leader_social_media_facebook',
							'default' => '',
							'type' => 'text',
							'label' => __('Facebook', 'leadership'),
						),
						array(
							'slug' => 'leader_social_media_enable_twitter',
							'default' => 1,
							'type' => 'checkbox',
							'label' => __('Enable twitter', 'leadership'),
						),
						array(
							'slug' => 'leader_social_media_twitter',
							'default' => '',
							'type' => 'text',
							'label' => __('Twitter', 'leadership'),
						),
						array(
							'slug' => 'leader_social_media_enable_google_plus',
							'default' => 1,
							'type' => 'checkbox',
							'label' => __('Enable Google +', 'leadership'),
						),
						array(
							'slug' => 'leader_social_media_google_plus',
							'default' => '',
							'type' => 'text',
							'label' => __('Google +', 'leadership'),
						),
						array(
							'slug' => 'leader_social_media_enable_pinterest',
							'default' => 1,
							'type' => 'checkbox',
							'label' => __('Enable Pinterest', 'leadership'),
						),
						array(
							'slug' => 'leader_social_media_pinterest',
							'default' => '',
							'type' => 'text',
							'label' => __('Pinterest', 'leadership'),
						)
					) 
				),
				array(
					'section' => 'leader_contact_us_section',
					'title' => 'Contact Us',
					'options' => array(
						array(
							'slug' => 'leader_contact_us_address',
							'default' => '',
							'type' => 'text',
							'label' => __('Address', 'leadership'),
						),
						array(
							'slug' => 'leader_contact_us_phone',
							'default' => '',
							'type' => 'text',
							'label' => __('Phone', 'leadership'),
						),
						array(
							'slug' => 'leader_contact_us_toll_free',
							'default' => '',
							'type' => 'text',
							'label' => __('Toll Free', 'leadership'),
						),
						array(
							'slug' => 'leader_contact_us_fax',
							'default' => '',
							'type' => 'text',
							'label' => __('Fax', 'leadership'),
						),
						array(
							'slug' => 'leader_contact_us_email',
							'default' => '',
							'type' => 'text',
							'label' => __('Email', 'leadership'),
						),
					) 
				),
			)
		)
	);

	foreach ($settings as $panel)  {

		$wp_customize->add_panel($panel['panel'], array(
	      	'capabitity' => 'edit_theme_options',
	      	'description' => $panel['description'],
	      	'title' => $panel['panel_title']
	   	));


	   	foreach ($panel['sections'] as $section) {

			$wp_customize->add_section($section['section'], array( 
				'title' => $section['title'], 
				'panel' => $panel['panel']
				) 
			);

			foreach ($section['options'] as $option) {
				$wp_customize->add_setting($option['slug'], array(
					'default' => $option['default'],
					'capability' => 'edit_theme_options',
				));

				if ($option['type'] == 'image') {
					$wp_customize->add_control(new \WP_Customize_Image_Control($wp_customize, $option['slug'], array(
						'label' => $option['label'],
						'section' => $section['section'],
						'setting' => $option['slug'],
						'input_attrs' => isset( $option['input_attrs'] ) ? (array) $option['input_attrs'] : array(),
					)));

				} elseif ( $option['type'] == 'select' ) {
					$wp_customize->add_control($option['slug'], array(
						'type' => $option['type'],
						'label' => $option['label'],
						'section' => $section['section'],
						'settings' => $option['slug'],
						'choices' => $option['choices'],
						'input_attrs' => isset( $option['input_attrs'] ) ? (array) $option['input_attrs'] : array(),
						)
					);


				} else {
					$wp_customize->add_control($option['slug'], array(
						'type' => $option['type'],
						'label' => $option['label'],
						'section' => $section['section'],
						'settings' => $option['slug'],
						'input_attrs' => isset( $option['input_attrs'] ) ? (array) $option['input_attrs'] : array(),
						)
					);
				}
			}
		}
	}
}

add_action('customize_register', __NAMESPACE__ . '\\leader_customize_register');