<?php

require_once __DIR__ . '/inc/after-setup.php';
require_once __DIR__ . '/inc/scripts.php';
require_once __DIR__ . '/inc/widgets.php';
require_once __DIR__ . '/inc/menu-class.php';
require_once __DIR__ . '/inc/post-type.php';
require_once __DIR__ . '/inc/Custom_Walker_Categories.php';


add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options(){
	require_once __DIR__.'/inc/carbon-fields/page.php';
	require_once __DIR__.'/inc/carbon-fields/options.php';
}




