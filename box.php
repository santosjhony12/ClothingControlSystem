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
    <title>Box</title>
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



        <div class="w3-container w3-card-4 w3-hide-small" >

<h1 style="font-weight:bold; font-size: 2em; text-align:center">Controle BOX</h1><br>
        <form method="post" action="lancamentoActionbox.php">


<div class="w3-third "> 
    <label style="font-weight:bold">Data:</label><br>
    <input type="date" name="date" class="box" required>
    <br><br>

    <label style="font-weight:bold">Cor</label><br>
<select name="txtCor"  class="box">
    <option>Azul</option>
    <option>Verde</option>
    <option>Amarelo</option>
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


    <br><br><br><br><br><br><br><br><br>
    <input type="reset" value="Reset" class="btnFinais reset"> 
  <button class="btnFinais">Lançar</button>
</div>
</form>
</div>








<!--DIVISÓRIO DE CONTEUDO === TELA PEQUENA W3-CSS-->
<div class="w3-container">
    
<form method="post" action="lancamentoActionbox.php" class="w3-hide-large w3-hide-medium edicao">
    <h1 style="font-weight:bold; font-size: 1.5em">Lançamento BOX</h1><br> 
 
    <label style="font-weight:bold">Data:</label><br>
<input type="date" name="date" class="box" required>
<br><br>

<label style="font-weight:bold">Tipo:</label><br>
<input type="radio" name="txtTipo" value="Macacão">
<label for="tamanho">Macacão   </label>
<input type="radio" name="txtTipo" value="Jaleco">
<label for="tamanho">Jaleco</label> 
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

<label style="font-weight:bold">Cor:</label>
<select name="txtCor"  class="box">
<option>Azul</option>
<option>Verde</option>
<option>Amarelo</option>
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

<br>



<label style="font-weight:bold">Descrição</label><br>
<input name="txtDescricao" type="text" class="box" id="descricao">
<br><br>


<input type="reset" value="Reset" class="btnFinais reset"> 
<button class="btnFinais">Lançar</button>


</form>
</div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
</html>