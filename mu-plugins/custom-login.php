<?php

/**
 * Plugin name: Personalización del login de WordPress
 * Plugin URI: http://www.goodberries.com/
 * Description: Plugin de funcionalidades personalizadas para el login de WordPress
 * Version: 1.0
 * Author: OnDesarrollo
 * Author URI: https://ondesarrollo.com
 * License: GPL+2
 * 
 */

//Modificar el logo del login
add_action('login_enqueue_scripts','gb_login_logo');

function gb_login_logo(){

	?>

	<style type="text/css" media="screen">
		body.login div#login h1 a {
			background-image: url('https://goodberries.ondesarrollo.dev/wp-content/uploads/2019/09/gb-web-logo.png');
			background-size: 300px;
			height: 200px;
			width: auto;

	</style>

	<?php
}

//Modificar la url del logo
add_filter ('login_headerurl','gb_login_logo_link');

function gb_login_logo_link($url){

	return home_url();
}

//Modificar el texto del logo
add_filter('login_headertitle','gb_login_logo_title');

function gb_login_logo_title($message){

	$message = get_bloginfo('name');
	return $message;
}