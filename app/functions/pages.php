<?php
//Verifica o ?page=##### e envia a pasta correspondente.

function load(){
	$page = filter_input(INPUT_GET, 'pages', FILTER_SANITIZE_STRING); //Filtra url contra script malicioso em cima dos pages
	$form = filter_input(INPUT_GET, 'forms', FILTER_SANITIZE_STRING); //Filtra url contra script malicioso em cima dos forms
	if (isset($page)) {

		$page = (!$page) ? 'pages/home.php' : 'pages/'.$page.'.php'; //se não existir nenhum GET(?page=#####) vai para a pagina home

		if (!file_exists($page)) { //verifica se o arquivo $page existe
			throw new \Exception("Tem algo errado ai! Favor reportar ao administrador" , 1); // se não existir reparta um erro
		}
		return $page; //retorna a page para o sistema carregar
	}elseif(isset($form)){
		dd($_POST);
		$form = (!$form) ? 'pages/forms/home.php' : 'pages/forms/'.$form.'.php'; //se não existir nenhum GET(?page=#####) vai para a pagina home

		if (!file_exists($form)) { //verifica se o arquivo $form existe
			throw new \Exception("Tem algo errado ai! Favor reportar ao administrador" , 1); // se não existir reparta um erro
		}
		return $form;
	}

	return 'pages/home.php';



	
}