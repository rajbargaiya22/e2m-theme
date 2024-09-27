<?php
/**
 * Template part for displaying banner section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rj-mhm
 */
?>

<section class="rj-mhm-banner">
    <div class="rj-custom-container">
        <div class="rj-banner-content">
            <h1 class="rj-main-head">
                <?php esc_html_e( 'Grow Your Private Practice', 'rj-mhm' ); ?>  
            </h1>
            <p>
                <?php esc_html_e( "We've worked with hundreds of therapists all over the world. Our proven system is ready for you to use so you can start growing your practice today.", 'rj-mhm' ); ?>  
            </p>
            <h2>
                <?php esc_html_e( 'Find out if our system is right for you', 'rj-mhm' ); ?>  
            </h2>
            <a href="<?php esc_attr( '#', 'rj-mhm' ); ?>" class="rj-theme-btn">
                <?php esc_html_e( 'Schedule a 15 Minute intro Call', 'rj-mhm' ); ?>  
            </a>
        </div>
    </div>
    <div class="banner-image-container">
        <div>
        <?php /*
            <img src="<?php echo esc_url( get_template_directory_uri(). '/assets/images/banner-circle.png' ); ?>" alt="Banner Image" class="rj-banner-circle"> 
            */ ?>
            <img src="<?php echo esc_url( get_template_directory_uri(). '/assets/images/banner-bg.png' ); ?>" alt="Banner Image" class="rj-banner-img">
        </div>
    </div>
    <img src="<?php echo esc_url( get_template_directory_uri(). '/assets/images/banner-l-shape.png' ); ?>" alt="Banner shape" class="rj-banner-l-dot">
    <img src="<?php echo esc_url( get_template_directory_uri(). '/assets/images/slider-shape.png' ); ?>" alt="Banner shape" class="rj-banner-shape">
</section>