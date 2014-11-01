<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width" />

	<title><?php wp_title(' | ', true, 'right'); ?></title>
	<?php wp_head(); ?>

    <?php if(is_production()) { ?>
    <link rel="stylesheet" href="<?php echo _s_revved_asset('css/application.min.css'); ?>" />
    <?php } else { ?>
    <link rel="stylesheet" href="<?php echo _s_revved_asset('css/application.css'); ?>" />
    <?php } ?>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-16037474-1', 'auto');
	  ga('send', 'pageview');

	</script>
</head>

<body <?php body_class(); ?>>

<div id="site-wrapper" class="container-fluid">
	<header class="row">
		<div id="logo" class="col-xs-12 col-sm-10 col-sm-offset-1">
			<a href="/" title="Home"><img src="<?php echo get_stylesheet_directory_uri(). '/public/images/yfcw-logo-170x100%202.png'; ?>" height="60" alt="Yoga for Congo Women"></a>
		</div>
	</header>
