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
 <link rel="icon" type="image/png" href="IMG/favicon.ico" />
    
    <style>

 
</style>
    <title>Recuperar Senha</title>
</head>
<body>

<nav class="w3-center">
       <br>
        <img src="nsg.png" alt="NSG GROUP" class="imglogo" >
        <ul class="nav justify-content-end" style="color:white">
                <li class="nav-item">
                  <a class="nav-link active" href="main.php" ><b>Voltar</b></a>
                </li>
        </nav>
<div class="w3-container ">
<form method="POST" action="recuperarSenhaAction.php" class="edicao">


<h1 style="font-weight:bold; font-size: 1.5em">Mudar Senha:</h1><br>

<div class="w3-left">


<label style="font-weight:bold">Digite o código padrão para a alteração de senha:</label><br>
<input name="txtCodigo" type="text" class="addAdv" id="codigo"required placeholder="Digite o código" min="0">
<br><br>

<button name="btnAdicionar" class="btnAdd w3-left"> 
                    <i class="w3-xxlarge fa fa-search"></i>  Enviar
                </button>

</div>
</form>
</div>





</body>
</html>