<?php require_once ('verificarAcesso.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
      <link rel="stylesheet" type="text/css" href="Style/stylelan.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>NSG Group</title>
      <link rel="stylesheet" href="Style/style.css" />
      <link rel="icon" type="image/png" href="IMG/favicon.ico" />
      <link rel="stylesheet" type="text/css" href="Style/load.css">
   </head>
   <body>
      <div id="preloader">
         <div class="inner">
            <div class="bolas">
               <div></div>
               <div></div>
               <div></div>
            </div>
         </div>
      </div>
      <header>
         <nav>
            <a href="main.php"><img src="IMG/nsg.png" class="imglogo2"></a>
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
               <li><a href="consultar.php">Voltar</a></li>
            </ul>
         </nav>
      </header>
      <script src="JS/preloader.js"></script>
      <script src="JS/mobile-navbar.js"></script>
      <?php 
         require_once 'conexaoBD.php';
         
         /*mudei daqui pra baixo */
         
         if (!isset($_POST['txtTodos'])){
         $sql = "SELECT * FROM advertencia WHERE re_colaborador = '".$_POST['txtRE']."'";
         $resultado = $conexao->query($sql);
         if($resultado != null)
         foreach($resultado as $linha) {
         
         
             echo '<div class="w3-container w3-card-4">
             
             <h5 style="font-weight: bold; font-align: left;">Data: </h5><h5>'.$linha['data_advertencia'].'</h5>
                     
             <h5 style="font-weight: bold; font-align: left;">RE: </h5><h5>'.$linha['re_colaborador'].'</h5>
                 <h5 style="font-weight: bold;font-align: left;">Nome: </h5><h5>'.$linha['nome_colaborador'].'</h5>
                 <h5 style="font-weight: bold; font-align: left;">Descrição: </h5><h5>'.$linha['descricao_advertencia'].'</h5>
                 <a href="excluirAdv.php?id_adver='.$linha['id_adver'].'"><i class="fa fa-user-times w3-xxlarge w3-margin w3-right" style="color: #007BFF"></i></a>
         
                 </div>';
         }
         else {
             echo '<div class="w3-container w3-card-4 w3-center">
                 <h1>Alguma coisa ocorreu errado! Tente novamente.</h1><br>
            <a src="consultar.php" class="btnFinais">Voltar</a> <br><br>
             </div>';
         }
         }
         
         else {
           $sql = "SELECT * FROM advertencia ";
           $resultado = $conexao->query($sql);
           if($resultado != null)
           foreach($resultado as $linha) {
           
           
               echo '<div class="w3-container w3-card-4">
               
               <h5 style="font-weight: bold; font-align: left;">Data: </h5><h5>'.$linha['data_advertencia'].'</h5>
                       
               <h5 style="font-weight: bold; font-align: left;">RE: </h5><h5>'.$linha['re_colaborador'].'</h5>
                   <h5 style="font-weight: bold;font-align: left;">Nome: </h5><h5>'.$linha['nome_colaborador'].'</h5>
                   <h5 style="font-weight: bold; font-align: left;">Descrição: </h5><h5>'.$linha['descricao_advertencia'].'</h5>
                   <a href="excluirAdv.php?id_adver='.$linha['id_adver'].'"><i class="fa fa-user-times w3-xxlarge w3-margin w3-right" style="color: #007BFF"></i></a>
           
                   </div>';
           }
           else {
               echo '<div class="w3-container w3-card-4 w3-center">
                   <h1>Alguma coisa ocorreu errado! Tente novamente.</h1><br>
              <a src="consultar.php" class="btnFinais">Voltar</a> <br><br>
               </div>';
         
         
         
         
         }
         
         }
         $conexao->close();
         ?>
   </body>
</html>