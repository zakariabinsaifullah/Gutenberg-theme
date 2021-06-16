<?php
/**
 * Template part for displaying posts
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class( 'single_post_container' ); ?>>

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

	<?php if(has_post_thumbnail()): ?>
	<div class="post_thumbnail">
		<?php
			the_post_thumbnail();
		?>
	</div>
	<?php endif; ?>

	<div class="entry-content">
		<?php
		if (is_single()) {
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'sdc-theme' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);
		}else {
			the_excerpt(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'sdc-theme' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);
		}

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sdc-theme' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

</div><!-- #post-<?php the_ID(); ?> -->
