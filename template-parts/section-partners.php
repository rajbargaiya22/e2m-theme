<?php
/**
 * Template part for displaying banner section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rj-mhm
 */
?>

<section>
    <div class="rj-custom-container">
        <div class="rj-partner-carousel">            
            <?php 
                $images = array('pop','pt', 'aca', 'hpa', 'ocd', 'ttp');
                for ($i=0; $i <count($images) ; $i++) { ?>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/partners/'.$images[$i]. '.png' ) ?>" alt="">    
                <?php  } ?>

        </div>
    </div>
</section>