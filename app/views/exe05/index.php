<html>
<head>
  <title>Mjailton projetos</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="<?= URL_BASE ?>assets/05/css/style.css">
</head>
<body>
  <div class="caixa">
    <form action="<?= URL_BASE ."Exercicio05/verificar"?>" method="post">
      <div class="retangulo retangulo1"><label><input type="text" name="l1" placeholder="01"></label></div>
      <div class="retangulo retangulo2"><label><input type="text" name="l2" placeholder="02"></label></div>
      <div class="retangulo retangulo3"><label><input type="text" name="l3" placeholder="03"></label></div>
      
      <input type="submit" name="" value="Verificar" class="btn">
      
      <div class="retangulo retangulo4"><span><?= $resultado ?></span></div>
      
    </form>	
  </div>			
</body>
</html>