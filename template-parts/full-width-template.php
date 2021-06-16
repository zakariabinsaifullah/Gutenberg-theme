<?php

/**
 * Template Name: Full Width Template
 */

	get_header();

?>
	<section class="full-width-section">
		<?php 
        
            if( have_posts() ){
                while( have_posts(  )){
                    the_post( );
                    the_content( );
                }
            }
        
        
        ?>
	</section>

<?php

	/**
	 * Get Footer 
	 */
	
	get_footer();

?>