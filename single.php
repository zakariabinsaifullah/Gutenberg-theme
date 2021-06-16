<?php

/**
 * Get Header
 */

	get_header();

?>
	<section class="content-section">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-12">
					<div class="post-content">
						<main id="primary" class="site-main">

						<?php
							if ( have_posts() ) :
								while ( have_posts() ) :
									the_post();
									get_template_part( 'template-parts/content', get_post_type() );

								endwhile;
								pagainate_link_function();

								/**
								 * Comment area 
								 */
								
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							else :
								get_template_part( 'template-parts/content', 'none' );

							endif;
						?>

						</main>
					</div>
				</div>
				<div class="col-md-3 col-sm-12">
					<?php if (is_active_sidebar( 'primary_sidebar' )): ?>
					<div class="primary-sidebar">
						<?php 
							dynamic_sidebar( 'primary_sidebar' );
						?>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

<?php

	/**
	 * Get Footer 
	 */
	
	get_footer();

?>