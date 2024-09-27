<?php
/**
 * Template part for displaying next workshop
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rj-mhm
 */
?>

<div class="rj-two-sections">
    <section>
    <?php 
            $args = array(
            'post_type' => 'next-workshop',
            'post_status' => 'publish',
            'posts_per_page' => 1,
            );

            $query = new WP_Query($args);
            if ( $query->have_posts() ) {
                while ($query->have_posts()) : $query->the_post();
                    $image_id = get_post_thumbnail_id();
                    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
                    $image_title = get_the_title($image_id); 
                    
                    $bgimg = "background-image: url(" . get_the_post_thumbnail_url( get_the_ID(), 'full' ) . ");";
                    ?>
                    <div class="rj-custom-container rj-workshop-bg" style="<?php echo $bgimg; ?>">
                        <div class="rj-workshop-content">
                            <h2 class="rj-section-main-title">
                                <a href="<?php echo get_the_permalink(); ?>" title="<?php echo esc_attr(get_the_title()); ?>">
                                    <?php echo esc_html(get_the_title()); ?>
                                </a>
                            </h2>

                            <?php if(get_post_meta($post->ID, 'workshop_category', true)){ ?>
                                <h3>
                                    <?php echo esc_html(get_post_meta($post->ID, 'workshop_category', true)); ?>
                                </h3>
                            <?php } ?>


                            <?php if(get_post_meta($post->ID, 'wrokshop_date', true)){ ?>
                                <div class="workshop-time">
                                    <span>
                                    <?php get_template_part('template-parts/calender');
                                        echo esc_html(get_post_meta($post->ID, 'wrokshop_date', true)); ?>
                                    </span>
                                    <span>
                                        <?php 
                                        get_template_part('template-parts/watch');
                                        echo esc_html(get_post_meta($post->ID, 'workshop_start_time', true)) . " EST / ";
                                        echo esc_html(get_post_meta($post->ID, 'workshop_end_time', true)) . " PST"; ?>
                                    </span>
                                </div>
                            <?php } ?>

                            <h3>
                                <?php echo esc_html('Stage 1 - Foundations'); ?>
                            </h3>

                            <p>
                                <?php echo esc_html(get_the_content()); ?>
                            </p>

                            <?php if(get_post_meta($post->ID, 'workshop_button', true)){ ?>
                                <a href="<?php echo esc_url(get_permalink()); ?>" class="rj-theme-btn">
                                <?php echo esc_html(get_post_meta($post->ID, 'workshop_button', true)); ?>
                                </a>
                            <?php } ?>

                            
                        </div>

                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/reactangle-dots.png' ) ?>" alt="" class="reactangle-dots">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/reactangle-dots.png' ) ?>" alt="" class="reactangle-dots">
                    </div>
                <?php endwhile;
                    }else {
                        echo "<h4 style='text-align:center'>No upcoming workshops found.</h4>";
                    }
                wp_reset_query(); ?>

    </section>

    <?php get_template_part('template-parts/section-who-help'); ?>	
</div>