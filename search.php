<?php
	get_header();
?>
<div class="search-result-page">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-sm-12">
				<div class="page-content">
					<main id="primary" class="site-main">

						<?php if ( have_posts() ) : ?>

							<header class="page-header">
								<h3 class="search-title">
									<?php
									/* translators: %s: search query. */
									printf( esc_html__( 'Search Results for: %s', 'sdc-theme' ), '<span>' . get_search_query() . '</span>' );
									?>
								</h3>
							</header><!-- .page-header -->

							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();
								get_template_part( 'template-parts/content', 'search' );

							endwhile;

							else :

								get_template_part( 'template-parts/content', 'none' );

							endif;
						?>

					</main><!-- #main -->
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
</div>
<?php
get_footer();
