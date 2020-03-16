<?php
	session_start();

	include_once('conexao.php');

	$cpfstring  = $_POST("cpf");
	$cpf = (int)$cpfstring;
	$nome = $_POST("nome");
	$data = $_POST("data");

	$sql = "INSERT INTO alunos (cpf, nome, data_nascimento) VALUES ('$cpf', '$nome', '$data')";

	$result = mysqli_query($conn, $sql);

	if($result > 0){
		echo "Dados Inseridos";
	}else{
		echo "Dados não inseridos";
	}
	mysqli_close($conn);
?>