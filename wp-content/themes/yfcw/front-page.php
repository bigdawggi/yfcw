<?php get_header(); ?>

<div class="row">
	<div class="col-xs-12 col-sm-10 col-sm-offset-1">
		<div class="responsive-video" id="main-video">
			<iframe src="//player.vimeo.com/video/53702970" width="987px" height="550px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>
	</div><!-- /main-video -->
</div><!-- /row -->

<div class="row">
	<div class="col-xs-12 col-sm-offset-3 col-sm-6 text-center">
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="MX2FUDMU7D3A6">
			<input type="image" class="hidden" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
			<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
			<button class="btn btn-lg btn-success lrg-donate text-uppercase" type="submit">Donate Now</button>
		</form>
	</div>
</div><!-- /row -->

<div class="row">
	<div class="col-sm-10 col-sm-offset-1">
		<div class="row featured-pages">
			<div class="well well-lg col-xs-3 text-center">
				<a href="/handmade-dolls/" class="overlay">
					<img src="http://lorempixel.com/200/200/nature/1" class="img-thumbnail">
					<p class="overlay">Congo Dolls</p>
				</a>
			</div>
			<div class="well well-lg col-xs-3 text-center">
				<a href="/dolls/2" class="overlay">
					<img src="http://lorempixel.com/200/200/nature/2" class="img-thumbnail">
					<p class="overlay">Tech Impact</p>
				</a>
			</div>
			<div class="well well-lg col-xs-3 text-center">
				<a href="/dolls/3" class="overlay">
					<img src="http://lorempixel.com/200/200/nature/3" class="img-thumbnail">
					<p class="overlay">Something Else</p>
				</a>
			</div>
			<div class="well well-lg col-xs-3 text-center">
				<a href="/dolls/4" class="overlay">
					<img src="http://lorempixel.com/200/200/nature/4" class="img-thumbnail">
					<p class="overlay">Congo Dolls</p>
				</a>
			</div>
		</div>
	</div>
</div><!-- /row -->

<?php get_footer(); ?>
