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

</head>

<body <?php body_class(); ?>>

<div id="site-wrapper" class="container-fluid">
	<header class="row">
		<div id="logo" class="col-xs-12 col-sm-10 col-sm-offset-1">
			<a href="/" title="Home"><img src="<?php echo get_stylesheet_directory_uri(). '/public/images/yfcw-logo-170x100%202.png'; ?>" height="60" alt="Yoga for Congo Women"></a>
		</div>
	</header>
