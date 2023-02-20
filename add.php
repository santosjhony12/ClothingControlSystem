<?php require_once ('verificarAcesso.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylelan.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Advertências</title>
    <link rel="icon" type="image/png" href="IMG/favicon.ico" />

    <link rel="stylesheet" href="style.css" />

</head>

<body>
  <header>
    <nav>
      <a href="/"><img src="IMG/nsg.png" class="imglogo2"></a>
      <div class="mobile-menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
      <ul class="nav-list">
          <li><a href="main.php">Menu</a></li>
          <li><a href="box.php">Box</a></li>
          <li><a href="lehr.php">Lehr</a></li>
          <li><a href="tanglass.php">Tanglass</a></li>
          <li><a href="contagem.php">Contar</a></li>
          <li><a href="listar.php">Listar</a></li>
          <li><a href="advertencia.php">Voltar</a></li>
         
      </ul>
    </nav>
  </header>
  <script src="mobile-navbar.js"></script>

        <div class="w3-container">
    
            <form method="post" action="addAdvAction.php" class="edicao">
                <h1 style="font-weight:bold; font-size: 1.5em">Adicionar Advertência</h1><br> 
                 


                <label style="font-weight:bold" >Data</label><br>
<input name="txtData" type="date" class="addAdv" id="data" required>
<br><br>
                <label style="font-weight:bold" >RE</label><br>
<input name="txtRE" type="number" class="addAdv" id="re" required placeholder="Digite o RE do colaborador" min="0">
<br><br>
<label style="font-weight:bold" >Nome</label><br>
<input name="txtNome" type="text" class="addAdv" id="nome" required placeholder="Digite o nome do colaborador">
<br><br>
<label style="font-weight:bold" >Descrição</label><br>
<input name="txtDescricao" type="text" class="addAdv" id="descricao" required placeholder="Digite a advertência">
<br><br>
<button name="btnAdicionar" class="btnAdd w3-right"> 
    <i class="w3-xxlarge fa fa-user-plus"></i> Adicionar
</button>
            </form>


</body>
</html>