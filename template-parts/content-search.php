<?php
/**
 * Template part for displaying results in search pages
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'single_post_container' ); ?>>

	<header class="content_head">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
		endif;
		?>
		<div class="post_meta">
			<li><span><?php echo __( 'Posted By: ' ); ?></span> <?php the_author(); ?></li>
			<li><span><?php echo __( 'Posted On: ' ); ?></span> <?php echo get_the_date( 'F j, Y' ); ?></li>
		</div>
	</header>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
</article><!-- #post-<?php the_ID(); ?> -->
