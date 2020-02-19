<?php 

function ju_social_customizer_section( $wp_customizer ){
	// settings  which value store in database
	$wp_customizer->add_setting('ju_facebook_handle',array(
		'default' => '',
		'transport' => 'refresh'
	));


	$wp_customizer->add_setting('ju_twitter_handle',array(
		'default' => '',
		'transport' => 'refresh'
	));

	$wp_customizer->add_setting('ju_instagram_handle',array(
		'default' => '',
		'transport' => 'refresh'
	));

	$wp_customizer->add_setting('ju_phone_number',array(
		'default' => '',
		'transport' => 'refresh'
	));

	$wp_customizer->add_setting('ju_email',array(
		'default' => '',
		'transport' => 'refresh'
	));


	//in section that will group in various controller
	$wp_customizer->add_section('ju_social_section',array(
		'title' => __('Udemy Social Settings','udemy'),
		'priority' =>30,
		'panel'    => 'udemy',// which i have created in them-customizer.php
	));

	//in controller assign section and control setting 
	$wp_customizer->add_control(
		new WP_Customize_Control($wp_customizer,
	        'ju_social_facebook_input',
	        array(
	            'label'          => __( 'Facebook Handle', 'udemy' ),
	            'section'        => 'ju_social_section',
	            'settings'       => 'ju_facebook_handle',
	            'type'           => 'text'
	        )
	    )
	);

	$wp_customizer->add_control(
		new WP_Customize_Control($wp_customizer,
	        'ju_social_twitter_input',
	        array(
	            'label'          => __( 'Twitter Handle', 'udemy' ),
	            'section'        => 'ju_social_section',
	            'settings'       => 'ju_twitter_handle',
	            'type'           => 'text'
	        )
	    )
	);


	$wp_customizer->add_control(
		new WP_Customize_Control($wp_customizer,
	        'ju_social_instagram_input',
	        array(
	            'label'          => __( 'Instagram Handle', 'udemy' ),
	            'section'        => 'ju_social_section',
	            'settings'       => 'ju_instagram_handle',
	            'type'           => 'text'
	        )
	    )
	);


	$wp_customizer->add_control(
		new WP_Customize_Control($wp_customizer,
	        'ju_social_phone_number_input',
	        array(
	            'label'          => __( 'Phone Number', 'udemy' ),
	            'section'        => 'ju_social_section',
	            'settings'       => 'ju_phone_number',
	            'type'           => 'text'
	        )
	    )
	);


	$wp_customizer->add_control(
		new WP_Customize_Control($wp_customizer,
	        'ju_social_email_input',
	        array(
	            'label'          => __( 'Email', 'udemy' ),
	            'section'        => 'ju_social_section',
	            'settings'       => 'ju_email',
	            'type'           => 'text'
	        )
	    )
	);



}

 ?>