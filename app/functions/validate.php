<?php

function validate(array $fields /*pega o array infomado nos campos*/){

	$validate = []; // cria variavel validate 
	foreach ($fields as $field => $value) {
		switch ($field) {
			case 's': //string
				$validate[$field] = filter_var($_POST[$field], FILTER_SANITIZE_STRING); //proteje contra string inject
				break;
			case 'e': //email
				$validate[$field] = filter_var($_POST[$field], FILTER_SANITIZE_EMAIL); //proteje contra email inject
				break;
			case 'i': //inteiro
				$validate[$field] = filter_var($_POST[$field], FILTER_SANITIZE_NUMBER_INT); //proteje contra int inject
				break;
			case 'f': //float
				$validate[$field] = filter_var($_POST[$field], FILTER_SANITIZE_NUMBER_FLOAT); //proteje contra float inject
				break;
			case 'U'://url
				$validate[$field] = filter_var($_POST[$field], FILTER_SANITIZE_URL); //proteje contra url inject
				break;			
			
			default:
				# code...
				break;
		}
	}
	return (object) $validate; // retorna em forma de objeto "$validate->x" 
}
