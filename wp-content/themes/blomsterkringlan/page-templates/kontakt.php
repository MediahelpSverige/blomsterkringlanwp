<?php /*Template name: kontakt*/?>

<?php get_header(); ?>
<article id="kontakt">

<?php if(have_posts()){

		while (have_posts()) {
			the_post();

			?>

<div class="banner"  style="background-image:url('<?php bloginfo('template_url');?>/img/banner.jpeg');">
<div class="overlay"></div>
	<div class="container">

		<div class="textarea">
				<div class="map">

	<?php the_field('karta'); ?>
</div>
	<div class="text-center">

<div class="row">

	<div class="col-md-6">



			<?php



			the_content();


		}


		wp_reset_postdata();


	}?>

	</div>

	<div class="col-md-6">
		<?php the_field('oppettider');?>
	</div>
	</div>

	<div class="row">

	<div class="col-md-12">

	<h2>Fyll i formuläret här nedan så återkommer vi så fort vi kan!</h2>

	<?php echo do_shortcode('[contact-form-7 id="41" title="Contact form 1"]');?>

		</div>
		</div>
	</div>
	</div>

	</div>

</article>

<?php get_footer(); ?>