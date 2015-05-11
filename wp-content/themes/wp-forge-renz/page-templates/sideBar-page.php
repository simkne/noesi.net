<?php
/**
 *  Template Name: left Sidebar Page Template
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage WP_Forge
 * @since WP-Forge 5.2.1
 */

get_header(); ?>
<?php get_sidebar('products'); ?>
    <div id="content" class="medium-9 large-9 columns" role="main">

    	<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<ul class="breadcrumbs">','</ul>'); } ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->

<?php get_footer(); ?>