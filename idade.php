<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="UTF-8"/>
	<title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
	<?php
		$nome = isset($_GET["nome"])?$_GET["nome"]:"Fulano";
		$ano = isset($_GET["ano"])?$_GET["ano"]:date("Y");
		$sexo = isset($_GET["sexo"])?$_GET["sexo"]:"homem";
		$idade = date("Y") - $ano;
		echo "$nome é $sexo e tem $idade anos.";
	?>
	<p><a href="javascript:history.go(-1)" class="botao">Voltar</a><p>
</div>
</body>
</html>