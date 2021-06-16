	<!-- Site Foooter -->
	<footer class="site_footer">
		<div class="container">
			<div class="row">
				<?php
					if (is_active_sidebar( 'footer_widgets' )) {
						dynamic_sidebar( 'footer_widgets' );
					}
				?>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="copyright_area">
						<p>
							<?php

								/**
								 * Copyright Text 
								 */
								
								echo esc_html( get_theme_mod( 'copyright_txt_setting', __( 'COPYRIGHT © 2021 PAYNE-ACRES', 'sdc-theme' ) ) );

							?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Site Foooter -->

	<!-- back to top -->
	<div class="back_top"><i class="fa fa-angle-up"></i></div>

	<?php wp_footer(); ?>
</body>
</html>