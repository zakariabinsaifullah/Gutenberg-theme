<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
	<!-- Site Header -->
	<header class="site_header" id="header">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="header_wrapper">
						<!-- Site Logo -->
						<div class="site_logo">
							<?php  

								if (has_custom_logo()):
									the_custom_logo();
								else:
							?>
								<h2 class="site_title"><a href="<?php echo site_url(); ?>"><?php bloginfo( 'title' ); ?></a></h2>
							<?php endif; ?>
						</div>
						<!-- Search -->
						<div class="search_icon">
							<i class="fa fa-search" id="search_fa_icon"></i>
						</div>
						<!-- Menu -->
						<div class="header_menu" id="desktop_menu">
							<?php 

								/**
								 * Header Navigation 
								 */
								
								wp_nav_menu( array(
									
									'theme_location' => 'header_menu',
									'container'      => ''

								) );

							?>
						</div>
						<div class="mobile_menu_bar">
							  <div class="bar1"></div>
							  <div class="bar2"></div>
							  <div class="bar3"></div>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<!-- Mobile Menu -->
		<div class="mobile_menu" id="mobile_menu">
			<?php 

				/**
				 * Header Mobile Navigation 
				 */
				
				wp_nav_menu( array(
					
					'theme_location' => 'header_menu',
					'container'      => ''

				) );

			?>
		</div>	
	</header>

	<!-- Search form Area -->
	<div class="search_form">
		<div class="dismiss-icon"><i class="fa fa-times"></i></div>
		<?php 
			get_search_form();
		?>
	</div>
	<!-- End Site Header -->
