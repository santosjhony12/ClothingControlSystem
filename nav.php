<?php require_once ('verificarAcesso.php');?>
<!--alterei até aqui - 23/10-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylelan.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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

    .body {
        font-family: Montserrat-ExtraLight ;
        margin:0;
        width: 100%;
        align-items: center;
        text-align: center;
    }

 

.icons {
    width: 30%;
}


.btn {
    margin: 2em;
}
.icon{
    color:white;
}
.icon:hover{
    color:black;
}
.imglogo{
    width: 20%;
}

.margin{
    align-items: right;
    text-align: right;
    color: white;
    margin-top: 3em;
}
.hamburguer{
    width: 35px;
  height: 5px;
  background-color: black;
  margin: 6px 0;
}
 
</style>
    <title>Menu Principal</title>
</head>
<body>

<nav class="w3-bar">
       
       <div class="w3-bar-item">
       <img src="nsg.png" alt="NSG GROUP" class="imglogo w3-padding" >
       </div>

<div class="w3-right">
       <div class="w3-bar-item">
       <div class="w3-bar margin">
  <a href="main.php" class="w3-bar-item w3-button">Home</a>
  <div class="w3-dropdown-hover">
    <button class="w3-button">Lançamento</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="box.php" class="w3-bar-item w3-button">Box</a>
      <a href="lehr.php" class="w3-bar-item w3-button">Lehr</a>
      <a href="tanglass.php" class="w3-bar-item w3-button">Tanglass</a>
    </div>
  </div>
  <a href="listar.php" class="w3-bar-item w3-button">Listar</a>
  <div class="w3-dropdown-hover">
    <button class="w3-button">Advertências</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="add.php" class="w3-bar-item w3-button">Adicionar</a>
      <a href="consultar.php" class="w3-bar-item w3-button">Consultar</a>
    </div>
  </div>
  
 

</div>
       </div></div>

<!-- Exemplo de único botão danger 















       <div class="w3-bar-item margin">
                  <a href="main.php" >Menu</a>
       </div>

      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<div class="w3-bar-item margin">
<div class="w3-dropdown-hover">
    <button class="w3-button">Dropdown</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="#" class="w3-bar-item w3-button">Link 1</a>
      <a href="#" class="w3-bar-item w3-button">Link 2</a>
      <a href="#" class="w3-bar-item w3-button">Link 3</a>
    </div>
  </div>


</div>



<div class="w3-bar-item">
<div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Ação</button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Alguma ação</a>
    <a class="dropdown-item" href="#">Outra ação</a>
    <a class="dropdown-item" href="#">Alguma coisa aqui</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Link separado</a>
  </div>
</div>


</div>













       <div class="w3-bar-item margin">
       <div class="w3-dropdown-hover">
    <button >Dropdown</button>
    <div class="w3-dropdown-content w3-bar-block ">
      <a href="#" class="w3-bar-item w3-button">Link 1</a>
      <a href="#" class="w3-bar-item w3-button">Link 2</a>
      <a href="#" class="w3-bar-item w3-button">Link 3</a>
    </div>
  </div>
</div>
       </div>-->
       
    
        </nav>
<div class="body">



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
</div>

</body>
</html>