<?php get_header(); ?>
<article>
	<div class="container">

	<div class="textarea">

	<div class="text-center">
<?php if(have_posts()){

		while (have_posts()) {
			the_post();

			?>
			<img src="<?php the_post_thumbnail_url('large');?>"/>
			<?php


			the_title('<h3>','</h3>');


			the_content();


		}


		wp_reset_postdata();


	}?>
	</div>
	</div>
	</div>
</article>
<?php get_footer(); ?>