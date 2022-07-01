<html>
<head>
  <title>Mjailton projetos</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="<?= URL_BASE ?>assets/04/css/style.css">
</head>
<body>
  <div class="caixa"> 
    <form action="<?= URL_BASE ."Exercicio04/calcular"?>" method="post">
      <div class="retangulo retangulo1"><label><small>Digite o salário</small><input type="text" name="sal" placeholder="00"></label></div>
      <div class="retangulo retangulo2"><label><small>Digite o tempo de serviço</small><input type="text" name="time" placeholder="00"></label></div>
      
      <div class="retangulo retangulo3"><p><small>Resultado: Bônus</small><h1>R$ <?= $bonus ?></h1></p></div>
      <div class="retangulo retangulo4"><p><small>Resultado: Salário</small><h1>R$ <?= $salarioTotal ?></h1></p></div>
      
      <input type="submit" value="" class="btn">
    </form>	
  </div>
</body>
</html>