<html>
	<head>
		<title>Mjailton projetos</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?= URL_BASE ?>assets/08/css/style.css">
	</head>
	<body>
	<div class="caixa">
		<form action="<?= URL_BASE ."Exercicio08/calcular"?>" method="post">
			<div class="col1">
				<label><span>Total área</span><input type="text" name="area" placeholder="total área"></label>
				<label><span>Total contruída</span><input type="text" name="cos" placeholder="total contruída"></label>
				<strong>Total:<?= isset($resultado) ? $resultado : null ?></strong>
			</div>
			<div class="col2">
				<input type="submit" value="" class="btn">
			</div>
		</form>	
	</div>	
	</body>
</html>