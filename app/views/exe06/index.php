<html>
<head>
  <title>Calcular Salario</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="<?= URL_BASE ?>assets/06/css/style.css">
</head>
<body>
  <div class="caixa">
    <form action="<?= URL_BASE ."Exercicio06/calcular" ?>" method="post">
      <div class="col1">
        <label><span>Nome</span><input type="text" name="nome" placeholder="Nome"></label>
        <label><span>Dependentes</span><input type="text" name="dep" placeholder="Dependentes"></label>
        <label><span>Salário bruto</span><input type="text" name="bruto" placeholder="Salário bruto"></label>
      </div>
      <div class="base-btn">
        <input type="submit" value="" name="">
      </div>
      <div class="col2">
        <label><span></span><input type="text" value="<?= $nome ?>"></label>
        <label><span></span><input type="text" value="<?= $ir ?>"></label>
        <label><span></span><input type="text" value="<?= $salarioLiquido ?>"></label>
      </div>
    </form>	
  </div>
</body>
</html>