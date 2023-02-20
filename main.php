<?php require_once ('verificarAcesso.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="load.css">


    <title>Menu</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/png" href="IMG/favicon.ico" />

  </head>

  <body>
  <div id="preloader">
    <div class="inner">
       <!-- HTML DA ANIMAÇÃO MUITO LOUCA DO SEU PRELOADER! -->
       <div class="bolas">
          <div></div>
          <div></div>
          <div></div>                    
       </div>
    </div>
</div>
<script src="preloader.js"></script>


    <header>
      <nav>
       <a href="main.php"><img src="IMG/nsg.png" class="imglogo2"></a>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
            
            <li><a href="liberarEspaço.php">Liberar Espaço</a></li>
            <li><a href="/" download="ajuda.pdf">Ajuda?</a></li>
            <li><a href="recuperarSenha.php">Alterar Senha</a></li>
            <li><a href="logoutAction.php">Logout</a></li>
        </ul>
      </nav>
    </header>
    <script src="mobile-navbar.js"></script>




    <?php 
       echo '<div class="container main" >';

    echo '<a href="box.php"><button type="button" class="margin-btn w3-card-4"><img src="IMG/macacao1.png" class="icons"><br>BOX</button></a><br>';
    echo '<a href="lehr.php"><button type="button" class="margin-btn w3-card-4"><img src="IMG/macacao1.png" class="icons"><br>LEHR</button></a><br>';
    echo '<a href="tanglass.php"><button type="button" class="margin-btn w3-card-4"><img src="IMG/macacao1.png" class="icons"><br>TANGLASS</button></a><br>';
    echo '<a href="listar.php"><button type="button" class="btn btn-primary btnlist margin-btn w3-card-4"><img src="IMG/list1.png" class="icons"><br>LISTAR</button></a><br>';
    echo '<a href="contagem.php"><button type="button"  class="margin-btn w3-card-4"><img src="IMG/contagem1.png" class="icons"><br>CONTAGEM</button></a><br>';
    /*adicionei 23/10*/ 
    echo '<a href="armario.php"><button type="button" class="margin-btn w3-card-4"><img src="IMG/armario.png" class="icons"><br>ARMARIOS</button></a><br>';
    echo '<a href="advertencia.php"><button type="button" class="margin-btn w3-card-4"><img src="IMG/advertencia.png" class="icons"><br>ADVERTÊNCIAS</button></a><br>';
    
    echo '</div>';
       






?>
<footer class="w3-center" style="color:gray"><h6 style="font-size: 0.8em">©Copyright - Jhony Santos e Raiane Fraga (Aprendizes 2022)</h6></footer>










  </body>
</html>