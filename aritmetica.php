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
		$num = isset($_GET["num"])?$_GET["num"]:0;
		$pow = isset($_GET["pow"])?$_GET["pow"]:0;
		$oper = isset($_GET["oper"])?$_GET["oper"]:0;
		switch ($oper) {
			case 'abs':
				echo "O valor absoluto de $num é " . abs($num);
				break;
			case 'pow':
				echo "O valor de $num<sup>$pow</sup> é " . pow($num, $pow);
				break;
			case 'sqrt':
				echo "A raiz quadrada de $num é ".sqrt($num);
				break;
			case 'round':
				echo "<br/>O valor de $num arredondado e " . round($num); // ceil floor
				break;
			case 'intval':
   				echo "<br/>A parte inteira de $num e " . intval($num);
				break;
			case 'moeda':
    			echo "<br/>O valor de $num em moeda e R$" . number_format($num,2,",", ".");
				break;
			default:
				echo "Operação não informada.";
				break;
		}
	?>
	<p><a href="javascript:history.go(-1)" class="botao">Voltar</a><p>		
</div>
</body>
</html>