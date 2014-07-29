<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Pictorico
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <ul class="ch-grid">
		<?php if(is_home()){//echo do_shortcode( '[easychart groupnames="Operating,Fundraising,Building,Pharmacy,Medicine,Patient Care" group1values="12" group2values="13" group3values="5" group4values="23" group5values="2" group6values="45" ]');
        };


        if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', 'home' );
				?>

			<?php endwhile; ?>

			<?php pictorico_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
            </ul>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
