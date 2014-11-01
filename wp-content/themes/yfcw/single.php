<?php
while( have_posts() )
{
	the_post();

 	get_header();

 	$img_url = get_field('giant_image_url');
 	if ( empty( $img_url ) )
 	{
 		$img = get_field('giant_image');
 		$r = wp_get_attachment_image_src($img, 'giant');
 		if ( $r !== false )
 		{
 			list($img_url, $width, $height) = $r;
 		}
 	}

 	if ( !empty( $img_url ) )
 	{
 		?>
		<div class="row">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1">
				<div class="featured-image">
					<img src="<?php echo esc_attr( $img_url ); ?>" width="100%">
				</div>
			</div><!-- /main-video -->
		</div><!-- /row -->
 		<?php
 	}
	?>

	<div class="row">
		<div class="col-xs-12 col-sm-5 col-sm-offset-1">
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
		<div class="col-xs-12 col-sm-4 col-sm-offset-2">
			<?php
			if ( have_rows( 'sidebar_features' ) )
			{
				while ( have_rows( 'sidebar_features' ) )
				{
					the_row();
					$img = get_sub_field( 'image' );
					$link_url = get_sub_field( 'link_url' );
					$caption = get_sub_field( 'caption' );
					if ( !empty( $link_url ) )
					{
						?>
						<a href="<?php echo esc_url( $link_url ); ?>" class="overlay">
						<?php
					}

					if ( !empty( $img ) )
					{
						$r = wp_get_attachment_image_src( $img, 'thumbnail' );
						if ( !empty( $r ) )
						{
							list($url) = $r;
							?>
							<img src="<?php echo esc_url( $url ); ?>" class="img-thumbnail">
							<?php
						}
					}

					if ( !empty( $caption ) )
					{
						?>
						<p class="overlay"><?php echo esc_html( $caption ); ?></p>
						<?php
					}

					if ( !empty( $link_url ) )
					{
						?>
						</a>
						<?php
					}
				}
			}
			?>
		</div>
	</div><!-- /row -->
	<?php
}


get_footer();
?>