<?php 

function ju_customize_register($wp_customizer){

	//title tag line is the id of site identy we look that var_dump customizer
	$wp_customizer->get_section('title_tagline')->title = 'Udemy General';
	// $wp_customizer->get_panel('id_for_panel')->value = 'Udemy you want';
	// $wp_customizer->get_setting('id_for_setting')->value = 'Value  you want';



	$wp_customizer->add_panel( 'udemy' , array(
		'title'       => __('Udemy','udemy'),
		'description' => '<p>Udemy Theme Settings</p>',
		'priority'    => 160
	));

	// now if you want to panel for customization setting section control
	// in section you should add udemy  because our panel name is udemy


	ju_social_customizer_section($wp_customizer); 
	// i have create another file social.php there is i have created this function ju_social_customizer
	ju_misc_customizer_section($wp_customizer); //in misc.php

	// if we want to edit site identy in wordpress we should var_dump and see there then you will find the id title_tagline for site identity
	/*echo "<pre>";
	var_dump($wp_customizer);
	echo "<pre>";*/
}