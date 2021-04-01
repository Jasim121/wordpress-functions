/*style.css*/
/*
Theme Name: Reen
Theme URI: https://wordpress.org/themes/reen/
Author: the WordPress team
Author URI: https://wordpress.org/
Description: Twenty reen-One is a blank canvas for your ideas and it makes the block editor your best brush. With new block patterns, which allow you to create a beautiful layout in a matter of seconds, this theme’s soft colors and eye-catching — yet timeless — design will let your work shine. Take it for a spin! See how reen reen-One elevates your portfolio, business website, or personal blog.
Requires at least: 5.3
Tested up to: 5.6
Requires PHP: 5.6
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: reen
Tags: one-column, accessibility-ready, custom-colors, custom-menu, custom-logo, editor-style, featured-images, footer-widgets, block-patterns, rtl-language-support, sticky-post, threaded-comments, translation-ready

reen reen-One WordPress Theme, (C) 2020 WordPress.org
*/


<?php 

/*
* POST FUNCTION CODE
*/

function slider_post_type() {
	$labels = array(
		'name'                => _x( 'slider', 'Post Type General Name', 'resturant' ),
		'singular_name'       => _x( 'slider', 'Post Type Singular Name', 'resturant' ),
		'menu_name'           => __( 'slider', 'resturant' ),
		'parent_item_colon'   => __( 'Parent slider', 'resturant' ),
		'all_items'           => __( 'All slider', 'resturant' ),
		'view_item'           => __( 'View slider', 'resturant' ),
		'add_new_item'        => __( 'Add New slider', 'resturant' ),
		'add_new'             => __( 'Add New', 'resturant' ),
		'edit_item'           => __( 'Edit slider', 'resturant' ),
		'update_item'         => __( 'Update slider', 'resturant' ),
		'search_items'        => __( 'Search slider', 'resturant' ),
		'not_found'           => __( 'Not Found', 'resturant' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'resturant' ),
	);
	$args = array(
		'label'               => __( 'slider', 'resturant' ),
		'description'         => __( 'slider news and reviews', 'resturant' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'slider', $args );


/*Custo Widget*/
function get_widgets(){

add_action( 'widgets_init', 'get_widgets');
	    register_sidebar( array(
        'name'          => __( 'Home Banner', 'html2wp' ),
        'id'            => 'home-banner',
        'description'   => 'Banner Area on Homepage',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

}


add_action( 'init', 'slider_post_type', 0 );

/*
* FILE LINK CODE
*/
<?php echo esc_url( get_template_directory_uri() ); ?>

<!-- DYNAMIC IMAGE LINK -->

<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>

<!-- POST CREATING CODE -->
<!-- START --> 
<?php  $posts = new WP_Query( array( 'post_type' => 'post name' , 'order' => 'ASC' ) );
while($posts->have_posts()) : $posts->the_post();?>
<!-- END -->
<?php endwhile; ?>

<!-- CONTENT AND TITLE DYNAMIC CODE -->
<?php echo get_the_title();?>
<?php echo get_the_content();?>
<?php echo the_excerpt(); ?>

<!-- SITE URL CODE -->
<?=site_url();?>


<!-- PAGE DYnamic CODE -->
<?php $my_query = new WP_Query('page_id=7'); while ($my_query->have_posts()) : $my_query->the_post();?>
<!-- END -->
<?php endwhile; ?>

<!-- ADD HEADER -->
<?php
/**
/* Template Name: Home
 *
 * Displays Only Home template
 *
 * @package WordPress
 * @subpackage buildline
 * @since buildline 1.0
 */
 get_header(); ?>

<!-- Dynamic Link -->
<?php the_permalink();?>
 <!-- ADD FOOTER -->
 <?php get_footer(); ?>
<!-- Dynamic page  -->
 <?Php while ( have_posts() ) : the_post(); ?>

<!-- CATEGORI CODE -->
<!-- START --> 
<?php $catquery = new WP_Query( 'post_type=recipes&cat=1&posts_per_page=20&order=ASC' ); while($catquery->have_posts()) : $catquery->the_post(); ?>
<!-- END -->
 <?php endwhile; ?>	

<!-- NAVBER DYNAMIC CODE -->

		                                <?php   wp_nav_menu( array(
		                                    'theme_location'    => 'primary',
		                                    'depth'             => 2,
		                                    'container'         => 'ul',
		                                    'container_class'   => '',
		                                    'container_id'      => 'menu_main',
		                                    'menu_class'        => 'menu_main_nav',
		                                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
		                                    'walker'            => new WP_Bootstrap_Navwalker())
		                                );
		                                ?>



<!-- Archives Code -->
<?php
/**
 * The template for displaying srvices archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<!-- Archives Code -->




























?>