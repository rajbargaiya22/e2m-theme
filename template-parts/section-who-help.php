<?php
/**
 * Template part for displaying stages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rj-mhm
 */
?>

<section class="rj-support-section">
    <div class="rj-custom-container rj-support">
        <div>
            <h2 class="rj-section-main-title">
                <?php esc_html_e( 'We Help People Who Help People', 'rj-mhm' ); ?>
            </h2>
            <p>
                <?php esc_html_e( 'Mental Health Marketing specializes in helping therapists at all levels of business, in all practice areas.', 'rj-mhm' ); ?>
            </p>
        </div>
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/girl.png' ) ?>" alt="">
    </div>
</section>