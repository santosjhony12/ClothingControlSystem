<?php 
session_start();
?>
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

    body {
        font-family: Montserrat-ExtraLight ;
        margin:0;
        width: 100%;
        align-items: center;
        text-align: center;
    }

    nav{
        background-color: #007BFF;
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
 
</style>
    <title>Menu Principal</title>
</head>
<body>

<nav class="w3-center">
       <br>
        <img src="nsg.png" alt="NSG GROUP" class="imglogo" >
        
        </nav>
<?php 

$usuario = $_POST['username'];
$senha = $_POST['password'];

require_once 'conexaoBD.php';
       $sql = "SELECT * FROM usuario WHERE login = '".$usuario."';";
       $resultado = $conexao->query($sql);
       //echo $sql;
       $linha = mysqli_fetch_array($resultado);
       if($linha != null)
       {
       if($linha['senha'] == $senha)
       {

        $_SESSION['logado'] = "1"; /*alterei essa linha */
       header('location: main.php');
       }
       else
       {
        echo '<a href="index.php"><h1 class="negado">Acesso negado!</h1></a>';
       }
       }
       else
       {

        echo '<a href="index.php"><h1 class="negado">Acesso negado!</h1></a>';
       
       }
       $conexao->close();
       






?>

</body>
</html>