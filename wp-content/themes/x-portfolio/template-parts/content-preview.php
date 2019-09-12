<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package X_Portfolio
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class('col-6-12 mobile-col-1-1 grid-item post-item'); ?>>

	<?php 	if ( has_post_thumbnail() ) { ?>
		<div class='post-thumb'>
				<a href="<?php the_permalink();?>" >
				<?php the_post_thumbnail('x-portfolio-thumb'); ?>
				</a>
		</div>
	<?php } else { ?>
	<img src="<?php echo esc_url( get_template_directory_uri() );?>/img/default-image.jpg" >
	<?php } ?>
  <div class="overbox">
    <div class="title overtext"> 
    	<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
</div>
    <div class="tagline overtext"> <?php x_portfolio_category();?> </div>
  </div>

	

</article><!-- #post-## -->


</article><!-- #post-<?php the_ID(); ?> -->
