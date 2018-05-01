<?php 
/* 
Template Name: singel Posts
*/ 
?> <?php 
	get_header(); ?> <main class=""> <?php
	if(have_posts() ){
		while(have_posts()) {
			the_post();
		?> <div class=""><div class=""><!-- <div class="blog-img-container-singel">
					<img class="" src="<?php the_field('logo-blogg'); ?>">
				</div> --><div><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><p>Skriven Av : <?php the_author(); ?> <?php the_time('F j, Y g:i '); ?></p></div></div><div class=""><h3><?php the_content(); ?></h3></div><div class=""> <?php the_post_thumbnail('home-thumb');?> </div><button class="" type="button"><?php echo "<a href=\"javascript:history.go(-1)\">Tillbaka</a>";?></button></div> <?php	 			
		}
	}
?> </main> <?php get_footer(); ?>