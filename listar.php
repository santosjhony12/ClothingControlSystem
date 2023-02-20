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
    <title>Listagem</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/png" href="IMG/favicon.ico" />

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
          <li><a href="advertencia.php">Advertências</a></li>
          <li><a href="liberarEspaço.php">Liberar Espaço</a></li>
          <li><a href="/">Ajuda?</a></li>
          <li><a href="recuperarSenha.php">Alterar Senha</a></li>
          <li><a href="logoutAction.php">Logout</a></li>
      </ul>
    </nav>
  </header>
  <script src="mobile-navbar.js"></script>
        <div class="w3-container">
    
            <form method="get" action="listarAction.php" class="edicao">
                <h1 style="font-weight:bold; font-size: 1.5em">Listar Lançamentos</h1><br>
                
                <label style="font-weight:bold">Departamento</label><br>
                <select name="txtDepart" class="box" style="width:50%">
                    <option value="1">BOX</option>
                    <option value="2">LEHR</option>
                    <option value="3">TANGLASS</option>
                </select><br><br>

                
                <label style="font-weight:bold">Data:</label><br>
    <input type="date" name="datainicio" class="box" required>

    <label style="font-weight:bold; margin: 1em;">Até</label> 
    <input type="date" name="datafinal" class="box" required>
    <br><br>
<!--alterei a partir daqui-->
    <label style="font-weight:bold">Tipo de movimento</label><br>
    <input type="radio" name="txtMovimento" value="Entrada">
    <label for="movimento">Entrada</label>
    <input type="radio" name="txtMovimento" value="Saída">
    <label for="movimento">Saída</label><br><br>

                <button name="btnAdicionar" class="btnAdd w3-left"> 
                    <i class="w3-xxlarge fa fa-search"></i> Consultar
                </button>
            </form>


</body>
</html>