<?php require_once ('verificarAcesso.php'); 
if(isset($_POST['btnLancar'])){
    $descr_depart = $_POST['txtDepartamento'];
    if ($descr_depart == "Box"){
      $cod_depart = 1;
    }else if($descr_depart == "Lehr"){
      $cod_depart = 2;
    }else if ($descr_depart == "Tanglass"){
      $cod_depart = 3;
    }
    $data = $_POST['date'];
    $cor = $_POST['txtCor'];
    $movimento = $_POST['txtMovimento'];
    $tipo = $_POST['txtTipo'];
    $tamanho = $_POST['txtTamanho'];
    $descricao = $_POST['txtDescricao'];
    $codigoRoupa = $_POST['txtCodigo'];
    
    require_once 'conexaoBD.php';
    
    $sql = "INSERT INTO lancamento (data_lanc, tipo, cod_vest, cor, tamanho, tipo_movimento, descricao, cod_depart, descricao_depart)
            VALUES ('".$data."','".$tipo."','".$codigoRoupa."','".$cor."','".$tamanho."','".$movimento."','".$descricao."','".$cod_depart."','".$descr_depart."');";
    if ($conexao->query($sql) === TRUE) {
        header("Location: confirm.php");
    }else{
        echo 'Tente novamente!';
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
               <li><a href="main.php">Voltar</a></li>
               <li><a href="contagem.php">Contar</a></li>
               <li><a href="listar.php">Listar</a></li>
               <li><a href="advertencia.php">Advertências</a></li>
            </ul>
         </nav>
      </header>
      <script src="JS/preloader.js"></script>
      <script src="JS/mobile-navbar.js"></script>
      <div class="w3-container w3-card-4 w3-hide-small" >
         <h1 style="font-weight:bold; font-size: 2em; text-align:center">Lançamentos</h1>
         <br>
         <form method="post" action="">
            <div class="w3-third ">
               <label style="font-weight:bold">Data:</label><br>
               <input type="date" name="date" class="box" required>
               <br><br><br>
               <label style="font-weight:bold">Departamento:</label><br>
               <select name="txtDepartamento" required class="box">
                  <option>Box</option>
                  <option>Lehr</option>
                  <option>Tanglass</option>
               </select>
               <br><br><br>
               <label style="font-weight:bold">Tipo de movimento</label><br>
               <input type="radio" name="txtMovimento" value="Entrada">
               <label for="movimento">Entrada</label>
               <input type="radio" name="txtMovimento" value="Saída">
               <label for="movimento">Saída</label>
            </div>
            <div class="w3-third">
               <label style="font-weight:bold">Tipo:</label><br>
               <input type="radio" name="txtTipo" value="Macacão">
               <label for="tamanho">Macacão   </label>
               <input type="radio" name="txtTipo" value="Jaleco">
               <label for="tamanho">Jaleco</label> 
               <br><br>
               <label style="font-weight:bold">Tamanho:</label><br>
               <input type="radio" name="txtTamanho" value="P">
               <label for="tamanho">P</label>
               <input type="radio" name="txtTamanho" value="M">
               <label for="tamanho">M</label>
               <input type="radio" name="txtTamanho" value="G">
               <label for="tamanho">G</label>
               <input type="radio" name="txtTamanho" value="GG">
               <label for="tamanho">GG</label><br>
               <br>
               <label style="font-weight:bold" >Descrição</label><br>
               <input name="txtDescricao" type="text" class="box" id="descricao">
            </div>
            <div class="w3-third">
               <label style="font-weight:bold">Código:</label><br>
               <select name="txtCodigo" required class="box">
                  <option>A1-G1</option>
                  <option>A1-G2</option>
                  <option>A1-G3</option>
                  <option>A1-G4</option>
                  <option>A1-G5</option>
                  <option>A1-G6</option>
                  <option>A1-G7</option>
                  <option>A1-G8</option>
                  <!--a2--><br>
                  <option>A2-G1</option>
                  <option>A2-G2</option>
                  <option>A2-G3</option>
                  <option>A2-G4</option>
                  <option>A2-G5</option>
                  <option>A2-G6</option>
                  <option>A2-G7</option>
                  <option>A2-G8</option>
                  <!--a3--><br>
                  <option>A3-G1</option>
                  <option>A3-G2</option>
                  <option>A3-G3</option>
                  <option>A3-G4</option>
                  <option>A3-G5</option>
                  <option>A3-G6</option>
                  <option>A3-G7</option>
                  <option>A3-G8</option>
                  <!--a4--><br>
                  <option>A4-G1</option>
                  <option>A4-G2</option>
                  <option>A4-G3</option>
                  <option>A4-G4</option>
                  <option>A4-G5</option>
                  <option>A4-G6</option>
                  <option>A4-G7</option>
                  <option>A4-G8</option>
               </select>
               <br><br>
               <label style="font-weight:bold">Cor</label><br>
               <select name="txtCor"  class="box">
                  <option>Azul</option>
                  <option>Verde</option>
                  <option>Cinza</option>
               </select>
               <br><br><br><br><br><br><br>
               <input type="reset" value="Reset" class="btnFinais reset"> 
               <button class="btnFinais" name="btnLancar">Lançar</button>
            </div>
         </form>
      </div>
      <!--DIVISÓRIO DE CONTEUDO === TELA PEQUENA W3-CSS-->
      <div class="w3-container">
         <form method="post" action="" class="w3-hide-large w3-hide-medium edicao">
            <h1 style="font-weight:bold; font-size: 1.5em">Lançamentos</h1>
            <br> 
            <label style="font-weight:bold">Data:</label><br>
            <input type="date" name="date" class="box" required>
            <br><br>
            <label style="font-weight:bold">Departamento:</label><br>
            <select name="txtDepartamento" required class="box">
               <option>Box</option>
               <option>Lehr</option>
               <option>Tanglass</option>
            </select>
            <br><br>
            <label style="font-weight:bold">Código:</label>
            <select name="txtCodigo" required class="box">
               <option>A1-G1</option>
               <option>A1-G2</option>
               <option>A1-G3</option>
               <option>A1-G4</option>
               <option>A1-G5</option>
               <option>A1-G6</option>
               <option>A1-G7</option>
               <option>A1-G8</option>
               <!--a2--><br>
               <option>A2-G1</option>
               <option>A2-G2</option>
               <option>A2-G3</option>
               <option>A2-G4</option>
               <option>A2-G5</option>
               <option>A2-G6</option>
               <option>A2-G7</option>
               <option>A2-G8</option>
               <!--a3--><br>
               <option>A3-G1</option>
               <option>A3-G2</option>
               <option>A3-G3</option>
               <option>A3-G4</option>
               <option>A3-G5</option>
               <option>A3-G6</option>
               <option>A3-G7</option>
               <option>A3-G8</option>
               <!--a4--><br>
               <option>A4-G1</option>
               <option>A4-G2</option>
               <option>A4-G3</option>
               <option>A4-G4</option>
               <option>A4-G5</option>
               <option>A4-G6</option>
               <option>A4-G7</option>
               <option>A4-G8</option>
            </select>
            <br><br>
            <label style="font-weight:bold">Tipo:</label><br>
            <input type="radio" name="txtTipo" value="Macacão">
            <label for="tamanho">Macacão   </label>
            <input type="radio" name="txtTipo" value="Jaleco">
            <label for="tamanho">Jaleco</label> 
            <br><br>
            <label style="font-weight:bold">Cor:</label>
            <select name="txtCor"  class="box">
               <option>Azul</option>
               <option>Verde</option>
               <option>Cinza</option>
            </select>
            <br><br>
            <label style="font-weight:bold">Tamanho:</label><br>
            <input type="radio" name="txtTamanho" value="P">
            <label for="tamanho">P</label>
            <input type="radio" name="txtTamanho" value="M">
            <label for="tamanho">M</label>
            <input type="radio" name="txtTamanho" value="G">
            <label for="tamanho">G</label>
            <input type="radio" name="txtTamanho" value="GG">
            <label for="tamanho">GG</label><br>
            <br>
            <label style="font-weight:bold">Tipo de movimento:</label><br>
            <input type="radio" name="txtMovimento" value="Entrada">
            <label for="movimento">Entrada</label>
            <input type="radio" name="txtMovimento" value="Saída">
            <label for="movimento">Saída</label>
            <br><br>
            <label style="font-weight:bold">Descrição</label><br>
            <input name="txtDescricao" type="text" class="box" id="descricao">
            <br><br>
            <input type="reset" value="Reset" class="btnFinais reset"> 
            <button class="btnFinais" name="btnLancar">Lançar</button>
         </form>
      </div>
   </body>
</html>