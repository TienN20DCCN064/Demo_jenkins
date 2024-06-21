<?php
/**
 * Theme Options.
 *
 * @package ecommerce_store_elementor
 */

$default = ecommerce_store_elementor_get_default_theme_options();

// Add Panel.
$wp_customize->add_panel( 'ecommerce_store_elementor_theme_option_panel',
	array(
	'title'      => __( 'Theme Options', 'ecommerce-store-elementor' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	)
);

// General Option.
$wp_customize->add_section( 'ecommerce_store_elementor_section_general_option',
	array(
	'title'      => __( 'General Options', 'ecommerce-store-elementor' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'ecommerce_store_elementor_theme_option_panel',
	)
);

// Setting show scroll to top.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_show_scroll_to_top]',
	array(
	'default'           => $default['ecommerce_store_elementor_show_scroll_to_top'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_show_scroll_to_top]',
	array(
	'label'    => __( 'Show Scroll To Top', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_general_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Preloader.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_show_preloader_setting]',
	array(
	'default'           => $default['ecommerce_store_elementor_show_preloader_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_show_preloader_setting]',
	array(
	'label'    => __( 'Show Preloader', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_general_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Sticky Header.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_show_data_sticky_setting]',
	array(
	'default'           => $default['ecommerce_store_elementor_show_data_sticky_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_show_data_sticky_setting]',
	array(
	'label'    => __( 'Show Sticky Header', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_general_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Post Option.
$wp_customize->add_section( 'ecommerce_store_elementor_section_post_option',
	array(
	'title'      => __( 'Post Options', 'ecommerce-store-elementor' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'ecommerce_store_elementor_theme_option_panel',
	)
);

// Setting show Post date.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_show_post_date_setting]',
	array(
	'default'           => $default['ecommerce_store_elementor_show_post_date_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_show_post_date_setting]',
	array(
	'label'    => __( 'Show Post Date', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post Heading.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_show_post_heading_setting]',
	array(
	'default'           => $default['ecommerce_store_elementor_show_post_heading_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_show_post_heading_setting]',
	array(
	'label'    => __( 'Show Post Heading', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post Content.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_show_post_content_setting]',
	array(
	'default'           => $default['ecommerce_store_elementor_show_post_content_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_show_post_content_setting]',
	array(
	'label'    => __( 'Show Post Full Content', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post admin.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_show_post_admin_setting]',
	array(
	'default'           => $default['ecommerce_store_elementor_show_post_admin_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_show_post_admin_setting]',
	array(
	'label'    => __( 'Show Post Admin', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post Categories.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_show_post_categories_setting]',
	array(
	'default'           => $default['ecommerce_store_elementor_show_post_categories_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_show_post_categories_setting]',
	array(
	'label'    => __( 'Show Post Categories', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post Comments.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_show_post_comments_setting]',
	array(
	'default'           => $default['ecommerce_store_elementor_show_post_comments_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_show_post_comments_setting]',
	array(
	'label'    => __( 'Show Post Comments', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post Featured Image.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_show_post_featured_image_setting]',
	array(
	'default'           => $default['ecommerce_store_elementor_show_post_featured_image_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_show_post_featured_image_setting]',
	array(
	'label'    => __( 'Show Post Featured Image', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post Tags.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_show_post_tags_setting]',
	array(
	'default'           => $default['ecommerce_store_elementor_show_post_tags_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_show_post_tags_setting]',
	array(
	'label'    => __( 'Show Post Tags', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Header Section.
$wp_customize->add_section( 'ecommerce_store_elementor_section_header',
	array(
	'title'      => __( 'Header Options', 'ecommerce-store-elementor' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'ecommerce_store_elementor_theme_option_panel',
	)
);

// Setting show_title.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_show_title]',
	array(
	'default'           => $default['ecommerce_store_elementor_show_title'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_show_title]',
	array(
	'label'    => __( 'Show Site Title', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_header',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show_tagline.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_show_tagline]',
	array(
	'default'           => $default['ecommerce_store_elementor_show_tagline'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_show_tagline]',
	array(
	'label'    => __( 'Show Tagline', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_header',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);


// google translator

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_gtranslate_show]',
	array(
	'default'           => $default['ecommerce_store_elementor_gtranslate_show'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_gtranslate_show]',
	array(
	'label'    => __( 'Show Language Translator', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_header',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// currency switcher

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_currency_switcher]',
	array(
	'default'           => $default['ecommerce_store_elementor_currency_switcher'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_currency_switcher]',
	array(
	'label'    => __( 'Show Currency Switcher', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_header',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// header product search

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_product_search]',
	array(
	'default'           => $default['ecommerce_store_elementor_product_search'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_product_search]',
	array(
	'label'    => __( 'Show Product search', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_header',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Login/ Logout button

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_account_button]',
	array(
	'default'           => $default['ecommerce_store_elementor_account_button'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);

$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_account_button]',
	array(
	'label'    => __( 'Show Login/ Logout button', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_header',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Contact button Text

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_contact_button_text]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_contact_button_text]',
	array(
	'label'    => __( 'Contact Button Text', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_header',
	'type'     => 'text',
	'priority' => 100,
	)
);

// Contact button link
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_contact_button_link]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_contact_button_link]',
	array(
	'label'    => __( 'Contact Button Link', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_header',
	'type'     => 'url',
	'priority' => 100,
	)
);

// Setting top header text

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_header_top_text]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_header_top_text]',
	array(
	'label'    => __( 'Add Advertisment Text', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_header',
	'type'     => 'text',
	'priority' => 100,
	)
);

// Layout Section.
$wp_customize->add_section( 'ecommerce_store_elementor_section_layout',
	array(
	'title'      => __( 'Layout Options', 'ecommerce-store-elementor' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'ecommerce_store_elementor_theme_option_panel',
	)
);

// Setting global_layout.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_global_layout]',
	array(
	'default'           => $default['ecommerce_store_elementor_global_layout'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_global_layout]',
	array(
	'label'    => __( 'Global Layout', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_layout',
	'type'     => 'select',
	'choices'  => ecommerce_store_elementor_get_global_layout_options(),
	'priority' => 100,
	)
);

// Setting archive_layout.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_archive_layout]',
	array(
	'default'           => $default['ecommerce_store_elementor_archive_layout'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_archive_layout]',
	array(
	'label'    => __( 'Archive Layout', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_layout',
	'type'     => 'select',
	'choices'  => ecommerce_store_elementor_get_archive_layout_options(),
	'priority' => 100,
	)
);

// Setting archive_image.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_archive_image]',
	array(
	'default'           => $default['ecommerce_store_elementor_archive_image'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_archive_image]',
	array(
	'label'    => __( 'Image in Archive', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_layout',
	'type'     => 'select',
	'choices'  => ecommerce_store_elementor_get_image_sizes_options( true, array( 'disable', 'thumbnail', 'medium', 'large' ), false ),
	'priority' => 100,
	)
);
// Setting archive_image_alignment.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_archive_image_alignment]',
	array(
	'default'           => $default['ecommerce_store_elementor_archive_image_alignment'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_archive_image_alignment]',
	array(
	'label'           => __( 'Image Alignment in Archive', 'ecommerce-store-elementor' ),
	'section'         => 'ecommerce_store_elementor_section_layout',
	'type'            => 'select',
	'choices'         => ecommerce_store_elementor_get_image_alignment_options(),
	'priority'        => 100,
	'active_callback' => 'ecommerce_store_elementor_is_image_in_archive_active',
	)
);
// Setting single_image.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_single_image]',
	array(
	'default'           => $default['ecommerce_store_elementor_single_image'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_single_image]',
	array(
	'label'    => __( 'Image in Single Post/Page', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_layout',
	'type'     => 'select',
	'choices'  => ecommerce_store_elementor_get_image_sizes_options( true, array( 'disable', 'large' ), false ),
	'priority' => 100,
	)
);

// Footer Section.
$wp_customize->add_section( 'ecommerce_store_elementor_section_footer',
	array(
	'title'      => __( 'Footer Options', 'ecommerce-store-elementor' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'ecommerce_store_elementor_theme_option_panel',
	)
);

// Setting copyright_text.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_copyright_text]',
	array(
	'default'           => $default['ecommerce_store_elementor_copyright_text'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_textarea_content',
	'transport'         => 'postMessage',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_copyright_text]',
	array(
	'label'    => __( 'Copyright Text', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_footer',
	'type'     => 'text',
	'priority' => 100,
	)
);