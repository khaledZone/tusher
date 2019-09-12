<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package X_Portfolio
 */

?>

	</div><!-- #content -->
	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="grid">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'x-portfolio' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'x-portfolio' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'x-portfolio' ), 'x-portfolio', '<a href="https://automattic.com/">AfroThemes</a>' );
			?>
		</div><!-- .site-info -->
</div><!-- #page -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
