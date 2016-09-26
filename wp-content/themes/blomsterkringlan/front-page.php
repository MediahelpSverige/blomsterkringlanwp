<?php get_header(); ?>
<article id="frontpage">

<?php if(have_posts()){

		while (have_posts()) {
			the_post();

			?>

<div class="banner"  style="background-image:url('<?php bloginfo('template_url');?>/img/banner.jpeg');">
<div class="overlay"></div>
	</div>
	<div class="container">
		<div class="bot_textarea">
	<div class="text-center">


			<?php



			the_content();


		}


		wp_reset_postdata();


	}?>
		</div>
	</div>
	</div>

</article>
<?php get_footer(); ?>