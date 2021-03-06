<?php

/*
Template Name: Page - Home
*/

get_header();

?>

	<?php the_showcase(); ?>

	<div class="home-pad bg-grey-light group" role="main">
		
		<?php the_ad_showcase(); ?>

	</div>
	
	<?php if ( has_testimonials() ) { ?>
	<div class="testimonials">
		<?php the_testimonials(); ?>
	</div>
	<?php } ?>

	<div class="home-pad icons text-center group">
		
		<?php the_icon_showcase(); ?>

	</div>

<?php 

get_footer();

?>