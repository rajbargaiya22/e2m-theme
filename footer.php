<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rj-mhm
 */

?>

	<footer class="rj-footer">
	    <div class="rj-custom-container rj-footer-grid">
			<?php foreach ( $GLOBALS['wp_registered_sidebars'] as $sidebar ) {
				if ( is_active_sidebar( $sidebar['id'] ) && str_starts_with($sidebar['name'], 'Footer')) { ?>
					<div class="rj-foot-column">
						<?php dynamic_sidebar($sidebar['id']); ?>
					</div>
				<?php } 
			} ?>
	    </div>
		<div class="rj-custom-container rj-copyright">
			<?php dynamic_sidebar( 'copyright-text' ); ?>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
