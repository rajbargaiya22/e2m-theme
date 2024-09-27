<?php
/*
* Template Name: RJ Homepage
*
*
* @package rj-bookmarks
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>
	<main id="rj-primary">
        <?php get_template_part('template-parts/section-banner'); ?>	
        <?php get_template_part('template-parts/section-partners'); ?>	
        <?php get_template_part('template-parts/section-growth-system'); ?>	
        <?php get_template_part('template-parts/section-stages'); ?>	
        <?php get_template_part('template-parts/section-next-workshop'); ?>	
        <?php // get_template_part('template-parts/section-who-help'); ?>	
    </main>
<?php get_footer(); 
