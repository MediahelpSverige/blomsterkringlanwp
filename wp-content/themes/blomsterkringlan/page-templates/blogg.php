<?php /*Template name: blogg*/?>

<?php get_header(); ?>
<article id="blogg">

<?php if(have_posts()){

		while (have_posts()) {
			the_post();

			?>

<div class="banner"  style="background-image:url('<?php bloginfo('template_url');?>/img/banner.jpeg');">
<div class="overlay"></div>
	<div class="container">
		<div class="textarea">
	<div class="text-center">


			<?php



			the_content();


		}


		wp_reset_postdata();


	}?>

	<?php $args = array('post_type' => 'post', 'posts_per_page' => -1);?>

	<?php $my_query = new WP_Query($args);?>

	<?php //print_r($my_query); ?>

	<?php 

			while ($my_query->have_posts()) {
			$my_query->the_post();
?>
			<img src="<?php the_post_thumbnail_url('medium');?>"/>

			<?php

			the_title();

			the_excerpt();
		}

			?>



		</div>
	</div>
	</div>

	</div>

</article>

<?php get_footer(); ?>