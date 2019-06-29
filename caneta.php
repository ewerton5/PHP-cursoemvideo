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
		require_once "_funcoes/Caneta.php";

		$c1 = new Caneta("Bic", "Azul", 0.5, 100);
        $c1->status();
        $c1->destampar();
        $c1->rabiscar();
        $c1->setCarga(70);
        $c1->status();
        
        $c2 = new Caneta("Compactor", "Vermelha", 0.7, 100);
        $c2->status();
		$c2->rabiscar();
        $c2->status();
        
	?>
</div>
</body>
</html>