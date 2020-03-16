<?php

	$localhost = 'localhost';
	$usuario   = 'root';
	$senha 	   = '';
	$banco	   = 'bdcurso';

	$conn = mysqli_connect($localhost, $usuario, $senha, $banco);

	if(!$conn){
		die('Falha na conexão!...'.mysqli_connect_error());
	}
?>