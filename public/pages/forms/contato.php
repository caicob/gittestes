<?php

$validate = validate([
	"name" => 's',
	"email" => 'e',
	"name" => 's',
	"message" => 's'
]); // verifica script inject de acordo com seu tipo s = string, e = email, i = inteiro , etc na função validate dentro de app/functions/validate

  
