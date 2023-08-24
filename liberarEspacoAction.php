<?php require_once ('verificarAcesso.php'); 
   if(isset($_POST['btnExcluir'])){
     require_once 'conexaoBD.php';
   
       $sql = "DELETE FROM lancamento WHERE cod_depart = '".$_POST['txtDepart']."' and data_lanc between '".$_POST['datainicio']."' and '".$_POST['datafinal']."'";
       if ($conexao->query($sql) === TRUE) {
         header("Location: confirm.php");
       }
       else{
         echo 'Alguma coisa ocorreu errado';
       }
   }
   ?>
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
               <li><a href="advertencia.php">Advertências</a></li>
               <li><a href="liberarEspaço.php">Voltar</a></li>
            </ul>
         </nav>
      </header>
      <script src="JS/preloader.js"></script>
      <script src="JS/mobile-navbar.js"></script>
      <div class="w3-container w3-card-4 w3-padding" >
         <form action="liberarEspacoAction2.php" class="w3-container w" method='post'>
            <h1 style="font-weight:bold; font-size: 2em">Exclusão</h1>
            <br>
            <br><br>
            <h1>Tem certeza que deseja excluir?</h1>
            <input name="txtDepart" class="w3-input w3-grey w3-border teste" type="hidden" value="<?php echo $_GET['txtDepart']?>">
            <input name="datainicio" class="w3-input w3-grey w3-border teste" type="hidden" value="<?php echo $_GET['datainicio']?>">
            <input name="datafinal" class="w3-input w3-grey w3-border teste" type="hidden" value="<?php echo $_GET['datafinal']?>">
            <div class="w3-center">
               <button class="btnFinais" name="btnExcluir"><i class="fa fa-trash"></i> Excluir</button>
               <a href="liberarEspaço.php" class="btnFinais" style="color:#fff;background: #007BFF; padding: 0.77em; padding-left: 1em; padding-right:1em; border-radius: 0.5em;" >Cancelar</a>
            </div>
         </form>
      </div>
   </body>
</html>