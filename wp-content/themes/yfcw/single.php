<?php
while( have_posts() )
{
	the_post();

 	get_header();
	?>
	<div class="row">
		<div class="col-xs-12 col-sm-10 col-sm-offset-1">
			<div class="featured-image">
				<img src="http://lorempixel.com/987/330/nature" width="100%">
				<p class="description">This is a nature picture</p>
			</div>
		</div><!-- /main-video -->
	</div><!-- /row -->

	<div class="row">
		<div class="col-xs-12 col-sm-5 col-sm-offset-1">
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
		<div class="col-xs-12 col-sm-4 col-sm-offset-2">
			<a href="/dolls/2" class="overlay">
				<img src="http://lorempixel.com/200/200/nature/2" class="img-thumbnail">
				<p class="overlay">Tech Impact</p>
			</a>
		</div>
	</div><!-- /row -->
	<?php
}


get_footer();
?>