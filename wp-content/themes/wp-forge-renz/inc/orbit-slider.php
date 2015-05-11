<?php
/**
 * Created by PhpStorm.
 * User: nomis
 * Date: 21/05/14
 * Time: 08:57
 */
//Set up some variables containing the URL of each image

//In Advanced Custom Fields, these are image fields that output "Image ID"
//I also have set up a custom image size in Wordpress called "home-slider-size" in this case
$width  = 1280;
$height = 720;
$image1 = wp_get_attachment_image_src( get_field('slider_1'), array($width,$height) );
$image2 = wp_get_attachment_image_src( get_field('slider_2'), array($width,$height) );
$image3 = wp_get_attachment_image_src( get_field('slider_3'), array($width,$height) );
$image4 = wp_get_attachment_image_src( get_field('slider_4'), array($width,$height) );
$image5 = wp_get_attachment_image_src( get_field('slider_5'), array($width,$height) );
?>

<?php //let's start the slider here. The first field is mandatory: ?>
<ul data-orbit>
    <li>
        <img src="<?php echo $image1[0]; ?>" />
    </li>
    <?php if(get_field('slider_2')) { // subsequent fields are not mandatory ?>
        <li>
            <img src="<?php echo $image2[0]; ?>" />
        </li>
    <?php } ?>
    <?php if(get_field('slider_3')) { ?>
        <li>
            <img src="<?php echo $image3[0]; ?>" />
        </li>
    <?php } ?>
    <?php if(get_field('slider_4')) { ?>
        <li>
            <img src="<?php echo $image4[0]; ?>" />
        </li>
    <?php } ?>
    <?php if(get_field('slider_5')) { ?>
        <li>
            <img src="<?php echo $image5[0]; ?>" />
        </li>
    <?php } ?>
</ul>