<?php get_header(); ?>
<article id="blogg">

<?php if(have_posts()){

		while (have_posts()) {
			the_post();

			?>

<div class="banner"  style="background-image:url('<?php the_post_thumbnail_url('full');?>');">
<div class="overlay"></div>
	<div class="container">

		<div class="textarea">
	<div class="text-center">



			<?php



			the_content();


		}


		wp_reset_postdata();


	}?>

		</div>
	</div>
	</div>

	</div>

</article>

<?php get_footer(); ?>