<!DOCTYPE html>
<html>
<head>
	<?php
		$texto = isset($_GET["t"])?$_GET["t"]:"Texto exemplo";
		$tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
		$cor = isset($_GET["cor"])?$_GET["cor"]:"Black";
	?>
	<style type="text/css">
		h1 {
			font-size: <?php echo $tam; ?>;
			color: <?php echo $cor; ?>;
		}
	</style>
 	<link rel="stylesheet" href="_css/estilo.css"/>
 	<meta charset="UTF-8"/>
 	<title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
	<?php
		echo "<h1>$texto</h1>";
	?>
	<p><a href="javascript:history.go(-1)" class="botao">Voltar</a><p>
</div>
</body>
</html>