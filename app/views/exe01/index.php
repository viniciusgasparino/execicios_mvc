<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Par ou Impar</title>
	<link  rel="stylesheet" href="<?= URL_BASE ?>assets/01/css/style.css">
	<script type="text/javascript" src="<?= URL_BASE ?>assets/01/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="<?= URL_BASE ?>assets/01/js/js.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<div class="base-caixa">
		<form action="<?= URL_BASE ."Exercicio01/calcular" ?>" method="post">
			<label><span>DIGITE UM NÚMERO</span><input name="num" value="<?= isset($number) ? $number : null?>" type="text" placeholder="00"></label>
			<label class="sinal"><h2><?= $resultado ?></h2></label>
			<div class="base-btn">	
				<input type="submit" value="" class="btn">
			</div>	
		</form>
	</div>
<!--
	<h1> Projeto mjailton </h1>
	Escreva um programa que leia um número e escreva se ele é par ou ímpar
	-->
</body>
</html>