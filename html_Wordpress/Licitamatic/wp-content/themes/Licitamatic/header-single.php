<?php
/**
 * Template part with actual header.
 *
 * @package The7
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?><!DOCTYPE html>
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ) ?>" />
	<?php if ( presscore_responsive() ) : ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<?php endif ?>
    <?php presscore_theme_color_meta() ?>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ) ?>" />
    <?php
    presscore_js_resize_event_hack();
    wp_head();
    ?>
</head>
<body <?php body_class() ?>>
	<div id="userli">
		<div class="internos">
			<div>
				<a class="alertacaso" href="http://www.monitorciudadano.co/denuncia" target="blank">¿Quieres denunciar un caso de corrupción?</a>
			</div>
		<div class="imagenemp">
			<img src="https://clientes.mi-martinez.com/Licitamatic/wp-content/uploads/2018/10/Elipse-1.png">
		</div>
		<div class="infoempr">
			<p class="hello">
				Hola
			</p>
			<p class="nombreu">
				Nicolas P.
			</p>
		</div>
		<div class="biene2">
			<p class="botonesa">
				<a class="butp" href="#">Cerrar Sesión</a>  <a href="#" class="alertaa"></a><div style="text-align: center;position: absolute;background: #ec2029;display: block;border-radius: 50%;color: #fff;font-weight: bold;font-size: 12px;top: 20px;right: 110px;padding-top: 0px;line-height: 0px;padding: 9px 5px;">2</div>
			</p>
		</div>
		</div>
	</div>
<?php
do_action( 'presscore_body_top' );

$config = presscore_config();
?>

<div id="page"<?php if ( 'boxed' == $config->get( 'template.layout' ) ) echo ' class="boxed"'; ?>>
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'the7mk2' ) ?></a>
<?php
if ( apply_filters( 'presscore_show_header', true ) ) {
	presscore_get_template_part( 'theme', 'header/header', str_replace( '_', '-', $config->get( 'header.layout' ) ) );
	presscore_get_template_part( 'theme', 'header/mobile-header' );
}

if ( presscore_is_content_visible() && $config->get( 'template.footer.background.slideout_mode' ) ) {
	echo '<div class="page-inner">';
}
?>