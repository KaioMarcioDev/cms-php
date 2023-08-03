<?php

function cms_main_menu(){

	global $main_menu,$site_url;

	$item_template ='<li><a %shref="%s">%s</a></li>'.PHP_EOL;


	$current_page = (isset($_GET['page'])) ? $_GET['page'] : 'home';


	$menu = '';

	foreach ($main_menu as $slug => $label) {
		
		$url = ($slug == 'home') ? $site_url : $site_url.'/?page='.$slug;
		$class = ($slug == $current_page) ? 'class="current_page" ' : '';
		$menu .= sprintf($item_template, $class, $url, $label);
	}


	echo $menu;
}
