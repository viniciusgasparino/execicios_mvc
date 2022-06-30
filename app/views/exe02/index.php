<html>
	<head>
		<title>Numero</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?= URL_BASE ?>assets/02/css/style.css">
	</head>
	<body>
		<div class="caixa">
			<form action="<?= URL_BASE ."Exercicio02/verificar"?>" method="post">
				<h1><small>Digite o 1º número</small><span><input type="text" name="n1"></span></h1>
				<h1><small>Digite o 2º número</small><span><input type="text" name="n2"></span></h1>
				<br/><br/>
				<h3>Resultado</h3>

				<h1><span><?= isset($number1) ? $number1 : null ?></span></h1>
				<h1 class="sinal"><span><?= isset($sinal) ? $sinal : null ?> </span></h1>
				<h1><span><?= isset($number2) ? $number2 : null ?></span></h1>
				
				<input type="submit" value="" class="btn">
			</form>
		</div>
	</body>
</html>