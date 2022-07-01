<html>
<head>
  <title>3 números iguais</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="<?= URL_BASE ?>assets/03/css/style.css">
</head>
<body>
  <div class="caixa">
    <form action="<?= URL_BASE ."Exercicio03/comparar" ?>" method="post">
      <label class="losango losango1"><input value="<?= isset($num1) ? $num1 : null ?>" type="text" name="n1" placeholder="00"></label>
      <label class="losango losango2"><input value="<?= isset($num2) ? $num2 : null ?>" type="text" name="n2" placeholder="00"></label>
      <label class="losango losango3"><input value="<?= isset($num3) ? $num3 : null ?>" type="text" name="n3" placeholder="00"></label>
      <label class="losango losango4"><input type="submit" value=""></label>
      <span><?= $resultado ?></span>
    </form>	
  </div>
</body>
</html>