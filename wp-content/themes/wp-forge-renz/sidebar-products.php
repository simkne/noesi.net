<?php
/**
 * The sidebar containing the front page widget areas.
 *
 * If no active widgets in either sidebar, they will be hidden completely.
 *
 * @package WordPress
 * @subpackage WP_Forge
 * @since WP-Forge 5.2.1
 */

/*
 * The front page widget area will display if any of the areas
 * have widgets. So let's check that first.
 *
 * If none of the sidebars have widgets, nothing happens.
 */
if ( ! is_active_sidebar( 'sidebar-2' )
	&& ! is_active_sidebar( 'sidebar-3' )

	)
	return;

// If we get this far, we have widgets. Let do this.
?>
<div id="secondary" class="widget-area" role="complementary">

	<div class="medium-2 large-2 columns">
        <?php
/*        $parentpageid=$post->post_parent
        $post_id_7 = get_post($parentpageid);
        $parentpagetitle = $post_id_7->post_title;
        echo($parentpageid);*/


        $parentTitle=empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent );

        //echo($parentTitle);
       // if($parentTitle= 'produkte'  ) {

       //page sidebar menu
            if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
                <div class="12 columns sidebar-product-nav">
                    <?php dynamic_sidebar( 'sidebar-2' ); ?>
                </div><!-- .first -->
            <?php endif;
       // }
       // else if($parentTitle='services'  ) {
        //subpage sidebar menu
            if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
                <div class="12 columns sidebar-product-nav">
                    <?php dynamic_sidebar( 'sidebar-3' ); ?>
                </div><!-- .second -->
            <?php endif;
        //}
        ?>

    </div><!-- /columns -->
            
</div><!-- #secondary -->