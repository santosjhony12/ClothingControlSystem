<?php require_once ('verificarAcesso.php'); 
   if(isset($_POST['excluirbtn'])){
     require_once 'conexaoBD.php';
   
       $sql = "DELETE FROM lancamento WHERE id_lanc = '".$_POST['txtID']."';";
       if ($conexao->query($sql) === TRUE) {
         header("Location: confirm.php");
       }else{
         echo '<h3>Alguma coisa ocorreu de errado!Tente novamente!</h3>';
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
               <li><a href="box.php">Realizar Lançamento</a></li>
               <li><a href="contagem.php">Contar</a></li>
               <li><a href="listar.php">Listar</a></li>
               <li><a href="advertencia.php">Advertências</a></li>
            </ul>
         </nav>
      </header>
      <script src="JS/preloader.js"></script>
      <script src="JS/mobile-navbar.js"></script>
      <div class="w3-container w3-card-4 w3-hide-small w3-padding" >
         <h1 style="font-weight:bold; font-size: 2em">Exclusão</h1>
         <br>
         <!-- <form method='post' action="excluirAction.php">-->
         <form action="" class="w3-container w" method='post'>
            <div class="w3-third "> 
               <input name="txtID" class="w3-input w3-grey w3-border teste" type="hidden" value="<?php echo $_GET['id_lanc']?>">
               <label style="font-weight:bold">Departamento</label><br>
               <input type="text" name="departamento" class="box" required disabled value="<?php echo $_GET['descricao_depart'];?>">
               <br><br>
               <label style="font-weight:bold">Cor:</label><BR>
               <input name="txtCor" type="text" class="box" disabled value="<?php echo $_GET['cor'];?>">
               <br><br>
               <label style="font-weight:bold">Tipo de movimento:</label><br>
               <input type="text" name="txtMovimento" class="box" disabled value="<?php echo $_GET['tipo_movimento'];?>">
            </div>
            <div class="w3-third">
               <label style="font-weight:bold">Tipo:</label><br>
               <input type="text" name="txtTipo" class="box" disabled value="<?php echo $_GET['tipo'];?>">
               <br><br>
               <label style="font-weight:bold">Tamanho:</label><br>
               <input type="text" name="txtTamanho" class="box" disabled value="<?php echo $_GET['tamanho'];?>">
               <br>
            </div>
            <div class="w3-third">
               <label style="font-weight:bold">Código:</label><br>
               <input type="text" name="txtCodigo" required class="box" disabled value="<?php echo $_GET['cod_vest'];?>">
               <br><br>
               <label style="font-weight:bold" >Observação:</label><br>
               <input name="txtDescricao" type="text" class="box" id="descricao" disabled value="<?php echo $_GET['descricao'];?>">
               <br><br>
               <button class="btnFinais" name="excluirbtn">Excluir</button>
            </div>
         </form>
      </div>
      <!--DIVISÓRIO DE CONTEUDO === TELA PEQUENA W3-CSS-->
      <div class="w3-container">
         <form method="post" action="" class="w3-hide-large w3-hide-medium edicao">
            <label style="font-weight:bold">ID LANÇAMENTO:</label><br>
            <input name="txtID" class="w3-input w3-grey w3-border" type="text" value="<?php echo $_GET['id_lanc']?>">
            <br><br>
            <label style="font-weight:bold">Departamento</label><br>
            <input type="text" name="text" class="box" disabled value="<?php echo $_GET['descricao_depart'];?>">
            <br><br>
            <label style="font-weight:bold">Tipo:</label><br>
            <input type="text" name="txtTipo" class="box" value="<?php echo $_GET['tipo'];?>">
            <br><br>
            <label style="font-weight:bold">Código:</label>
            <input name="txtCodigo" type="text"required class="box" disabled value="<?php echo $_GET['cod_vest'];?>">
            <br><br>
            <label style="font-weight:bold">Cor:</label>
            <input name="txtCor"  class="box" type="text" disabled value="<?php echo $_GET['cor'];?>">
            <br><br>
            <label style="font-weight:bold">Tamanho:</label><br>
            <input type="text" name="txtTamanho" class="box" disabled value="<?php echo $_GET['tamanho'];?>"><br>
            <br>
            <label style="font-weight:bold">Tipo de movimento:</label><br>
            <input type="text" name="txtMovimento" class="box" disabled value="<?php echo $_GET['tipo_movimento'];?>">
            <br>
            <label style="font-weight:bold" >Descrição</label><br>
            <input name="txtDescricao" type="text" class="box" id="descricao" disabled value="<?php echo $_GET['descricao'];?>">
            <br><br>
            <button class="btnFinais" name="excluirbtn">Excluir</button>
         </form>
      </div>
   </body>
</html>