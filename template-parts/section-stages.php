<?php
/**
 * Template part for displaying stages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rj-mhm
 */
?>

<section class="rj-stages">
    <div class="rj-custom-container">
    <?php 
        $args = array(
          'post_type' => 'post',
          'post_status' => 'publish',
          'posts_per_page' => 2,
          'post__not_in' => array(1),
        );

        $query = new WP_Query($args);
        if ( $query->have_posts() ) { ?>
        <div class="">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <div class="rj-post-content">
                    <div class="rj-post-images">
                        <?php
                        $image_id = get_post_thumbnail_id();
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
                        $image_title = get_the_title($image_id); ?>

                        <?php if(get_post_meta($post->ID, 'post-img-bg', true)){ ?>
                            <?php $attachment_id = get_post_meta($post->ID, 'post-img-bg', true); ?>
                            <img src="<?php echo esc_url(wp_get_attachment_url($attachment_id)); ?>" alt="<?php echo esc_attr(($image_alt) ? $image_alt : get_the_title() ); ?>" title="<?php echo esc_attr(($image_title) ? $image_title : get_the_title() ); ?>" class="post-bg-image">
                        <?php } ?>

                        <img src="<?php echo esc_url(get_the_post_thumbnail_url( get_the_ID(), 'medium' )); ?>" alt="<?php echo esc_attr(($image_alt) ? $image_alt : get_the_title() ); ?>" title="<?php echo esc_attr(($image_title) ? $image_title : get_the_title() ); ?>">

                        

                    </div>

                    <div>
                        <div class="rj-stage-text">
                            <?php if(get_post_meta($post->ID, 'stage_text', true)){ ?>
                                <p class="stage-head">
                                    <?php echo esc_html(get_post_meta($post->ID, 'stage_text', true)); ?>
                                </p>
                            <?php } ?>

                            <h3 class="rj-section-main-title">
                                <a href="<?php echo get_the_permalink(); ?>" title="<?php echo esc_attr(get_the_title()); ?>">
                                    <?php echo esc_html(get_the_title()); ?>
                                </a>
                                <?php get_template_part('template-parts/underline-svg'); ?>	
                            </h3>

                            <?php $conent = get_the_content(); ?>
                            <div class="rj-post-desc">
                                <?php echo $conent; ?>
                            </div>

                            <?php if(get_post_meta($post->ID, 'button_text', true)){ ?>
                                <a href="<?php echo get_the_permalink(); ?>" title="<?php echo esc_attr(get_the_title()); ?>" class="rj-theme-btn">
                                    <?php echo esc_html(get_post_meta($post->ID, 'button_text', true)); ?>
                                </a>
                            <?php } ?>                        
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <?php }else {
                echo "<h4 style='text-align:center'>No posts found.</h4>";
            }
        wp_reset_query(); ?>
    </div>

    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/stages1-circle.png' ) ?>" alt="" class="stage-one-circle">
    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/stages2-circle.png' ) ?>" alt="" class="stage-two-circle">
</section>