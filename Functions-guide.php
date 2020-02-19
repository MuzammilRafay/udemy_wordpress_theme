<?php

 // Template Name: Full Width Page Muzammil Custom (no-sidebar)
 // Template Post Type: page


previous_posts_link( '&larr; Older' );
next_post_link( 'Newer &rarr;' );


// in  comments

if (post_password_required()){
    return; // we can return because we using the comments_open function
}


<?php foreach ($comments as $comment): ?>


<?php echo get_avatar($comment,60); ?>
<?php comment_author(); ?>
<?php comment_date(); ?>
<?php comment_text(); ?>
<?php endforeach ?>
<?php the_comments_pagination(); ?>
<?php 
            comment_form(array(
                'comment_field' => '<div class="col_full">
                            <label for="comment">'.__('Comment','udemy').'</label>
                            <textarea name="comment" cols="58" rows="7" tabindex="4" class="sm-form-control"></textarea>
                        </div>',
                'fields' => array(
                    'author' => '<div class="col_one_third">
                            <label for="author">'.__('Name','udemy').'</label>
                            <input type="text" name="author" id="author" value="" size="22" tabindex="1" class="sm-form-control" />
                        </div>',
                    'email' => '<div class="col_one_third">
                            <label for="email">'.__('Email','udemy').'</label>
                            <input type="text" name="email" id="email" value="" size="22" tabindex="2" class="sm-form-control" />
                        </div>',
                    'url' => '<div class="col_one_third col_last">
                            <label for="url">'.__('Website','udemy').'</label>
                            <input type="text" name="url" id="url" value="" size="22" tabindex="3" class="sm-form-control" />
                        </div>',
                    'class_submit' => 'button button-3d nomargin',
                    'label_submit' => __('Submit Comment','udemy'),
                    'title_reply' => __('Leave a <span>Comment</span>','udemy')
                )
            ));
        ?>



<!-- header.php -->

<!-- add_theme_support( 'title-tag' ); in after_setup_theme widget hook instead wp_title -->
<body <?php body_class('no-transition stretched'); ?> >

if( has_nav_menu( 'secondary' ) ){
    wp_nav_menu(array(
        'theme_location'            =>  'secondary',
        'container'                 =>  false,
        'fallback_cb'               =>  false,
        'depth'                     =>  1
    ));
}

<!-- if we add theme support of custom-logo -->
<?php if (has_custom_logo(  )): ?>
    <?php the_custom_logo( ); ?>
<?php else: ?>
    <a href="<?php echo home_url('/'); ?>" class="standard-logo"><?php bloginfo('name'); ?></a>
<?php endif ?>


<?php if (function_exists('quads_ad'))
                    echo quads_ad( array('location' => 'udemy_header') );
                    // i have install add sense quad plugin and register in functions.php setup
               ?> 
<!-- search in header.php -->
<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
                            <input type="text" name="s" class="form-control" value="<?php the_search_query(); ?>" placeholder="<?php _e('Type &amp; Hit Enter..','udemy') ?>">
                        </form>


<?php

if( function_exists( 'the_subtitle' ) ){
?><span><?php the_subtitle(); ?></span><?php
}
// because we have installed plugin of the_subtitle(); 
?>


<?php

get_header();

while( have_posts() ){
    the_post();
    ?>
    <!-- Page Title
    ============================================= -->
    <section id="page-title">
        <div class="container clearfix">
            <h1><?php the_title(); ?></h1>
            <?php

            if( function_exists( 'the_subtitle' ) ){
                ?><span><?php the_subtitle(); ?></span><?php
            }

            ?>
        </div>
    </section><!-- #page-title end -->
    <?php
}

rewind_posts();
//rewind is important  when we loop have_posts in page.php



get_author_posts_url( get_the_author_meta( 'ID' ) );


the_content();

wp_link_pages(array(
    'before'           => '<p class="text-center">' . __( 'Pages:' ),
    'after'            => '</p>',
));


?>


<?php the_tags( '', ' ' ); ?>
<?php
if( comments_open() || get_comments_number() ){
    comments_template();
}

get_search_form();

?>
//serach form  .php file
<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="input-group">
        <input type="search" id="<?php echo $unique_id; ?>" class="form-control" name="s"
               value="<?php the_search_query(); ?>"
               placeholder="<?php _e( 'Search', 'udemy' ); ?>"/>
        <span class="input-group-btn">
            <button type="submit" class="btn btn-danger"><i class="icon-search"></i></button>
        </span>
    </div>
</form>


<?php if( is_active_sidebar( 'ju_sidebar' )){
                    dynamic_sidebar( 'ju_sidebar' ); // i have register the sidebar widgets in function.php file
                } ?>


<!-- wp query in single .php for realted post accept this current post -->
<?php 
$categories = get_the_category();

$rp_query = new WP_Query(array(
    'posts_per_page' => 2,
    'post__not_in' => array($post->ID),
    'cat'          => $categories[0]->term_id 
)); 

if ($rp_query->have_posts()) {
    while ($rp_query->have_posts()) {
        $rp_query->the_post(); ?>

<?php
    }
    wp_reset_postdata();
}
?>