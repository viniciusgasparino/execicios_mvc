<html>
	<head>
		<title>Mjailton projetos</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?= URL_BASE ?>assets/07/css/style.css">
	</head>
	<body>
		<div class="nota">
			<form action="<?= URL_BASE ."Exercicio07/calcular" ?>" method="post">
				<table border="0" cellspacing="0" cellpadding="0">
					<tr>
						<th colspan="2"><strong>Notas de um aluno</strong></th>
					</tr>
					<tr>
						<td><strong>Nota 01</strong></td>
						<td><input type="text" name="n1" value="<?= isset($nota1) ? $nota1 : null?>"></td>
					</tr>
					<tr>
						<td><strong>Nota 02</strong></td>
						<td><input type="text" name="n2" value="<?= isset($nota2) ? $nota2 : null?>"></td>
					</tr>
					<tr>
						<td><strong>Nota 03</strong></td>
						<td><input type="text" name="n3" value="<?= isset($nota3) ? $nota3 : null?>"></td>
					</tr>
					<tr>
						<td><strong>Nota 04</strong></td>
						<td><input type="text" name="n4" value="<?= isset($nota4) ? $nota4 : null?>"></td>
					</tr>
					<tr class="base-btn">
						<td colspan="2">
							<input type="submit" name="" value="calcular" class="btn">
							<span><?= isset($resultado) ? $resultado : null ?></span>
						</td>
					</tr>
					
				</table>
			</form>
		</div>
	</body>
</html>