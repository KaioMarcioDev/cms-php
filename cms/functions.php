<?php
/*

*Função    : get_content
*Uso	   : get_content()
*Retorna   : 'home','page' ou 'post'
*Descrição : Captura o valor da chave 'cont' na query string. Senao houver
*            o valor retona 'home'.
*/

function get_content(){

	return (isset($_GET['cont'])) ? $_GET['cont'] : 'home';
}
/**********************************************************************

*Função    : get_page_content
*Uso	   : get_page_conten()
*Retorna   : <nada>
*Descrição : Captura o conteudo da pagina.
*/

function get_page_content(){
	include 'pages/'.get_page().'.php';
}



/**********************************************************************

*Função    : get_page
*Uso	   : get_page()
*Retorna   :'home' ou o slug da pagina selecionada.
*Descrição : Captura o valor da chave 'page' na query string. Senão houver
*            o valor retona 'home'.
*/

function get_page(){
	return (isset($_GET['page']))? $_GET['page']:'home';
}




/**********************************************************************

*Função    : show_content
*Uso	   : show_content()
*Retorna   :<nada>
*Descrição : Incluir a templaye correspondente
*            definido na chave 'cont' da query string.	
*/

function show_content(){

	if(get_content()== 'home'){
		include 'inc/posts.php';
	}else{
		include 'inc/'.get_content(). '.php';
	}
}

/***********************************************************************

*Função    : cms_main_menu
*Uso	   : cms_main_nebu([bool:list])
*Retorna   :<nada>
*Descrição : Monta e exibe o HTML do menu principal.
*/


function cms_main_menu($li = true){

	global $main_menu,$site_url;// São globais por que resgatadas do settings.php

	  
	if($li){

		$template ='<li><a %shref="%s">%s</a></li>';
	} else {
		$template ='<a %shref="%s">%s</a>';
	}

	$menu = '';

	foreach ($main_menu as $slug => $label) {
		
		$url = ($slug == 'home') ? $site_url : $site_url.'/?cont=page&amp;page='.$slug;
		$class = ($slug == get_page()) ? 'class="current_page" ' : '';
		$menu .= sprintf($template.PHP_EOL, $class, $url, $label);
	}


	echo $menu;
}


