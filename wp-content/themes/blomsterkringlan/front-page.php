<?php get_header(); ?>
<article id="frontpage">
<?php $args = array('post_type' => 'bildspel', 'posts_per_page' => -1);  ?>
<!-- Slider main container -->
<div class="swiper-container">
<!-- Additional required wrapper -->
<div class="swiper-wrapper">
<?php $query = new WP_Query($args); ?>
<?php if($query->have_posts()){

?>


<?php
			while ($query->have_posts()) {
				$query->the_post();

				?>

<div class="banner swiper-slide"  style="background-image:url('<?php the_post_thumbnail_url('full'); ?>');">
<div class="overlay"></div>


	<div class="container">
		<div class="bot_textarea">
	<div class="text-center">

		<h2><?php the_title(); ?></h2>


			<?php



			the_content();





?>

<a href="<?php the_permalink(); ?>">LÄS MER</a>
		</div>
	</div>
	</div>
	</div>
<?php
}
?>

<?php
wp_reset_postdata();
?>

</div>
</div>
	<?php } ?>

</article>
<script>
$(document).ready(function(){


var mySwiper = new Swiper('.swiper-container', {
	speed: 400,
direction: 'horizontal',
	autoplay: 2000,
	slidesPerView:1,
	loop: true,


});
});
</script>
<?php get_footer(); ?>
