<?php require_once ('verificarAcesso.php');?>
<!--alterei até aqui - 23/10-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>

        .negado{
            color: #007BFF;
            padding-top: 3em;
            text-align: center;
            font-size:3em;
        }

        @font-face {
    src: url(Montserrat/static/Montserrat-ExtraLight.ttf);
    font-family: 'Montserrat-ExtraLight';    
    font-weight: normal;}

    body {
        font-family: Montserrat-ExtraLight ;
        margin:0;
        align-items: center;
        text-align: center;
    }

   
.margin{
    align-items: right;
    text-align: right;
    }
.icons {
    width: 30%;
}
.btn {
    margin: 2em;
}

 
</style>
    <title>Menu Principal</title>
</head>
<body>
<header>
      <nav>
        <a href="/"><img src="nsg.png" class="imglogo2"></a>
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
    <main></main>
    <script src="mobile-navbar.js"></script>





<?php 
       echo '<div class="container">';

    echo '<a href="box.php"><button type="button" class="btn btn-primary"><img src="macacao1.png" class="icons"><br>BOX</button></a>';
    echo '<a href="lehr.php"><button type="button" class="btn btn-primary"><img src="macacao1.png" class="icons"><br>LEHR</button></a>';
    echo '<a href="tanglass.php"><button type="button" class="btn btn-primary"><img src="macacao1.png" class="icons"><br>TANGLASS</button></a>';
    echo '<a href="listar.php"><button type="button" class="btn btn-primary btnlist"><img src="list1.png" class="icons"><br>LISTAR</button></a>';
    echo '<a href="contagem.php"><button type="button" class="btn btn-primary"><img src="contagem1.png" class="icons"><br>CONTAGEM</button></a>';
    /*adicionei 23/10*/ 
    echo '<a href="armario.php"><button type="button" class="btn btn-primary"><img src="armario.png" class="icons"><br>ARMARIOS</button></a>';
    echo '<a href="advertencia.php"><button type="button" class="btn btn-primary"><img src="IMG/advertencia.png" class="icons"><br>ADVERTÊNCIAS</button></a>';
    
    echo '</div>';
       






?>
<footer class="w3-center" style="color:gray"><h6 style="font-size: 0.8em">©Copyright - Jhony Santos e Raiane Fraga (Aprendizes 2022)</h6></footer>

</body>
</html>