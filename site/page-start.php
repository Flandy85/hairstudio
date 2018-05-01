<?php
	/* 
	Template Name: Front page
	*/
?> <?php get_header(); ?> <main> <?php
		if(have_posts()) {
			while(have_posts()) {
				
				the_post();
				?> <!-- First section on home page --><div class="slider-container"></div> <?php
			}
		}
	?> </main> <?php get_footer(); ?>