<?php
/**
 * @package Pictorico
 */

//echo do_shortcode( '[easychart groupnames="Operating,Fundraising,Building,Pharmacy,Medicine,Patient Care" group1values="12" group2values="13" group3values="5" group4values="23" group5values="2" group6values="45" ]');
$format = get_post_format();
$formats = get_theme_support( 'post-formats' );
$postclass = '';

if ( ! has_post_thumbnail() )
	$postclass = 'no-thumbnail';
?>


<li <?php post_class(); ?>>
    <div <?php post_class("ch-item"); ?> style="background-image: url(<?php $post_thumbnail_id = get_post_thumbnail_id( get_the_ID() ); echo wp_get_attachment_url($post_thumbnail_id); ?> ); background-position: -70px -20px">
        <div class="ch-info">
            <?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>

            <p>
                <?php

                $categories = get_the_category();
                $separator = ' - ';
                $output = '';
                if($categories){
                    foreach($categories as $category) {
                        $output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
                    }
                    echo trim($output, $separator);
                }

              ?>
                <br><a href="<?php the_permalink(); ?>" title="<?php echo the_title_attribute(); ?>">
                    details >
                </a></p>
        </div>
    </div>
</li>

