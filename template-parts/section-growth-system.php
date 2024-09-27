<?php
/**
 * Template part for displaying growth system
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rj-mhm
 */
?>

<section class="rj-growth-system">
    <div class="rj-custom-container">
        <p class="rj-section-small-head">
            <?php esc_html_e( 'Introducing...', 'rj-mhm' ); ?>  
        </p>
        <h2 class="rj-section-main-title">
            <?php esc_html_e( 'Private Practice Growth System', 'rj-mhm' ); ?>  
        </h2>
        <p>
            <?php esc_html_e( 'Take the guesswork out of your online marketing. Our proven website framework and marketing system creates pathways for your clients to find you, building your case load - and for therapists to find you, allowing you to find the right talent to hire into your practice.', 'rj-mhm' ); ?>  
        </p>

        <div class="rj-growth-cards-container">
            <?php 
            $cards = array(
                'Getting Start Right'         => 'Attract new clients by starting with the right foundations and story that helps you really resonate with your ideal client.', 
                'Growing your practice'       => 'Set up clear descriptions and incentives to recruit the best talent in your area to build your practice.', 
                'Sliding Scale growth Budget' => 'Annual revenue-based budget so you can always afford services, and acquisition tracking so you know your return on investment.', 
                );

                foreach ($cards as $title => $content) { ?>
                    <div>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/'.strtolower(str_replace(' ', '-', $title)).'.png' ) ?>" alt="">
                        <h3>
                            <?php esc_html_e( $title, 'rj-mhm' ); ?>
                        </h3>
                        <p>
                            <?php esc_html_e( $content, 'rj-mhm' ); ?>
                        </p>
                    </div>        
                <?php } ?>            
        </div>
    </div>
</section>