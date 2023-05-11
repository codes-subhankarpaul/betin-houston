<?php


/* Custom Fields in Customizer */
function add_custom_fields($wp_customize) {

/*===================
	Main Logo
=====================*/
	$wp_customize->add_setting( 'header_logo', array(
        'default' => get_theme_file_uri('assets/images/logo.webp'), // Add Default Image URL 
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_logo_control', array(
        'label' => 'Main Logo',
        'priority' => 5,
        'section' => 'title_tagline',
        'settings' => 'header_logo',
        'button_labels' => array(
                    'select' => 'Select Logo',
                    'remove' => 'Remove Logo',
                    'change' => 'Change Logo',
                    )
    )));
	
/*===================
	Top Header Text
=====================*/
	$wp_customize->add_setting( 'top_header_text', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );

	$wp_customize->add_control( 'top_header_text', array(
		'label' => 'Top Header Text',
		'section' => 'title_tagline',
		'type' => 'textarea'
	) );

/*====================
    Office Address
=====================*/
	$wp_customize->add_setting( 'office_address', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );

	$wp_customize->add_control( 'office_address', array(
		'label' => 'Office Address',
		'section' => 'title_tagline',
		'type' => 'textarea'
	) );

/*====================
	Primary Phone Number
=====================*/
	$wp_customize->add_setting( 'primary_phone_number', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );

	$wp_customize->add_control( 'primary_phone_number', array(
		'label' => 'Primary Phone Number',
		'section' => 'title_tagline',
		'type' => 'text'
	) );

/*====================
	Secondary Phone Number
=====================*/
	$wp_customize->add_setting( 'secondary_phone_number', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );

	$wp_customize->add_control( 'secondary_phone_number', array(
		'label' => 'Secondary Phone Number',
		'section' => 'title_tagline',
		'type' => 'text'
	) );

/*====================
	Fax Number
=====================*/
	$wp_customize->add_setting( 'fax_number', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );

	$wp_customize->add_control( 'fax_number', array(
		'label' => 'Fax',
		'section' => 'title_tagline',
		'type' => 'text'
	) );

/*====================
	Primary Email Address
=====================*/
	$wp_customize->add_setting( 'primary_email_address', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );

	$wp_customize->add_control( 'primary_email_address', array(
		'label' => 'Email Address',
		'section' => 'title_tagline',
		'type' => 'text'
	) );

/*====================
	Secondary Email Address
=====================*/
	$wp_customize->add_setting( 'secondary_email_address', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );

	$wp_customize->add_control( 'secondary_email_address', array(
		'label' => 'Secondary Email Address',
		'section' => 'title_tagline',
		'type' => 'text'
	) );

/*===================
	Contact Us Text
====================*/
	$wp_customize->add_setting( 'contactus_text', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );

	$wp_customize->add_control( 'contactus_text', array(
		'label' => 'Contact Us Text',
		'section' => 'title_tagline',
		'type' => 'textarea'
	) );

/*=========================
	Facebook Account Link
==========================*/
	$wp_customize->add_setting( 'facebook_acc_link', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );

	$wp_customize->add_control( 'facebook_acc_link', array(
		'label' => 'Facebook Account Link',
		'section' => 'title_tagline',
		'type' => 'text'
	) );

/*========================
	LinkedIn Account Link
=========================*/
	$wp_customize->add_setting( 'linkedin_acc_link', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );

	$wp_customize->add_control( 'linkedin_acc_link', array(
		'label' => 'LinkedIn Account Link',
		'section' => 'title_tagline',
		'type' => 'text'
	) );

/*========================
	Youtube Account Link
=========================*/
	$wp_customize->add_setting( 'youtube_acc_link', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );

	$wp_customize->add_control( 'youtube_acc_link', array(
		'label' => 'Youtube Account Link',
		'section' => 'title_tagline',
		'type' => 'text'
	) );

/*==========================
	Instagram Account Link
===========================*/
	$wp_customize->add_setting( 'instagram_acc_link', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );

	$wp_customize->add_control( 'instagram_acc_link', array(
		'label' => 'Instagram Account Link',
		'section' => 'title_tagline',
		'type' => 'text'
	) );

/*==================
	CopyRight Text
===================*/
	$wp_customize->add_setting( 'copyright_text', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );

	$wp_customize->add_control( 'copyright_text', array(
		'label' => 'Copyright Text',
		'section' => 'title_tagline',
		'type' => 'textarea'
	) );
}
add_action('customize_register', 'add_custom_fields');
