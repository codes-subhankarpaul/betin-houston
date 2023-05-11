<?php

/**
 * Displays the inner banner of inner pages
 *
 * @package WordPress
 * @subpackage betinhouston
 */
global $post;
?>
    <?php
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
        if($image){
            $url = $image[0];
        }else{
            $url = get_theme_file_uri().'/assets/images/inner-banner.webp';
        }

        $title = get_the_title();
    ?>
    <!--Inner Banner-->