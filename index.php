<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Projeto Integrador 2019.2</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<header>
		<h2>Projeto Integrador 2019.2</h2>
	</header>
	<section>
		  <nav>
		    <ul>
		      <li><a href="#">Cadastro</a></li>
		      <li><a href="#">Consulta</a></li>
		      <li><a href="#">Incluir Notas</a></li>
		    </ul>
		  </nav>	  
		<article>
		<div class="cadastro">
			<form method="POST" action="inserir.php">
				<fieldset>
				<legend>Dados do Aluno</legend>
				<p>CPF.:</p>
				<input type="text" name="cpf">
				<p>Nome.:</p>
				<input type="text" name="nome" style="width: 95%;">
				<p>Data de Nascimento.:</p>
				<input type="date" name="data"><br>
				<input type="submit" name="enviar" style="width: 48%;" value="Cadastrar">
				<input type="reset" name="limpar" style="width: 48%;" value="Limpar">
				</fieldset>
			</form>
		</div><!--cadastro-->
		<div class="consulta">
			<form method="POST" action="consulta.php">
				<p>CPF.:</p>
				<input type="text" name="cpf">
				<input type="submit" name="consultar" value="Consultar">
			</form>
			<table>
				<tr>
					<th>Nome do aluno</th>
					<th>CPF</th>
					<th>Data de Nascimento</th>
					<th>Nota AV1</th>
					<th>Nota AV2</th>
					<th>Nota Final</th>
					<th>Media Geral</th>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
		</div><!--consulta-->
		<div class="notas">
			<form method="POST" action="nota.php">
				<p>Nota AV1.:</p>
				<input type="text" name="nota1">
				<p>Nota AV2.:</p>
				<input type="text" name="nota2">
				<input type="submit" name="consultar" value="Inserir">
			</form>
			<table>
				
			</table>
		</div><!--notas-->
		</article>
	</section>

	<footer>
  		<p>Segurança</p>
	</footer>

</body>
</html>