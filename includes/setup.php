<?php 

function ju_setup_theme(){
	//add menu feature
	add_theme_support( 'menus' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo' );
	//add feature image feature in post
	add_theme_support( 'automatic-feed-links' );
	//wordpress add the link tag with rss+xml 
	// it will  genreate xml file  and its used for client update for post like that
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
	//wordpress use xml if you want to use html5 feature like header tag so you should call that in theme support




	// Define and register starter content to showcase the theme on new sites.
	$starter_content                =   array(
		'widgets'                   =>  array(
			// Place three core-defined widgets in the sidebar area.
			'ju_sidebar'            =>  array(
				'text_business_info',
				'search',
				'text_about',
			)
		),

		// Create the custom image attachments used as post thumbnails for pages.
		'attachments'               =>  array(
			'image-about'           =>  array(
				'post_title'        =>  __( 'About', 'udemy' ),
				'file'              =>  'assets/images/about/1.jpg', // URL relative to the template directory.
			),
		),

		// Specify the core-defined pages to create and add custom thumbnails to some of them.
		'posts'                     => array(
			'home'                 =>  array(
				'thumbnail'         => '{{image-about}}',
			),
			'about'                 =>  array(
				'thumbnail'         => '{{image-about}}',
			),
			'contact'               => array(
				'thumbnail'         => '{{image-about}}',
			),
			'blog'                  => array(
				'thumbnail'         => '{{image-about}}',
			),
			'homepage-section'      => array(
				'thumbnail'         => '{{image-about}}',
			),
		),

		// Default to a static front page and assign the front and posts pages.
		'options'                   =>  array(
			'show_on_front'         => 'page',
			'page_on_front'         => '{{home}}',
			'page_for_posts'        => '{{blog}}',
		),

		// Set the front page section theme mods to the IDs of the core-registered pages.
		'theme_mods'                => array(
			'ju_facebook_handle'    =>  'udemy',
			'ju_twitter_handle'     =>  'udemy',
			'ju_instagram_handle'   =>  'udemy',
			'ju_email'              =>  'udemy',
			'ju_phone_number'       =>  'udemy',
			'ju_header_show_search' =>  'yes',
			'ju_header_show_cart'   =>  'yes',
		),

		// Set up nav menus for each of the two areas registered in the theme.
		'nav_menus'                 =>  array(
			// Assign a menu to the "top" location.
			'primary'               =>  array(
				'name'              =>  __( 'Primary Menu', 'udemy' ),
				'items'             =>  array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_about',
					'page_blog',
					'page_contact',
				),
			),

			// Assign a menu to the "social" location.
			'secondary'             =>  array(
				'name'              =>  __( 'Secondary Menu', 'udemy' ),
				'items'             =>  array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_about',
					'page_blog',
					'page_contact',
				),
			),
		),
	);
	add_theme_support( 'starter-content', $starter_content );
	// starter content allow you to genreate dummy content for customization 
	// to simulate a fresh site.you can change the fresh_site value to 1 from wp_option database table
	add_theme_support('post-thumbnails');

	add_theme_support('post-formats',array('aside','gallery','link','image','quote','video','audio'));
	// just edit some post you will see formats by default set to standard format you can set this to side video link image etc.

	register_nav_menu( 
		'primary',
		 __('Primary Menu','udemy') 
	);
	register_nav_menu( 
		'secondary',
		 __('Secondary Menu','udemy') 
	);
	//for wp quads plugin
	if (function_exists('quads_register_ad')){
   		 quads_register_ad( array('location' => 'udemy_header', 'description' => 'Udemy Header position') );
    }
}