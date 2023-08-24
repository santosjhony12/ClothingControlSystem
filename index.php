<?php 
    $senhaInvalida = 0;

    if(isset($_POST['buttonEnviar'])){

        $usuario = $_POST['username'];
        $senha = $_POST['password'];

        require_once 'conexaoBD.php';
        $sql = "SELECT * FROM usuario WHERE login = '".$usuario."'";
        $resultado = $conexao->query($sql);

        if ($resultado) {
            $linha = $resultado->fetch_assoc(); // Recupera a primeira linha como um array associativo

            if ($linha != null && $linha['senha'] == $senha) {
                session_start();
                $_SESSION['logado'] = "1";
                $_SESSION['idusuarioLogado'] = $linha['id_usuario'];
                header('Location: main.php');
                exit(); // Importante: encerrar o script após redirecionamento
            } else {
                $senhaInvalida = 1;
            }
        } else {
            echo "Erro na consulta: " . $conexao->error;
        }

        $conexao->close();
       
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Style/csslogin.css">
    <link rel="stylesheet" type="text/css" href="Style/load.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https: //fonts.googleapis.com/css2? family= Montserrat:wght@200 & display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="IMG/favicon.ico" />
    <title>Login</title>

    <style>
.nsglogo{
width: 10%;
margin-top:5rem;
}
@media screen and (max-width: 950px){
.nsglogo {
    width: 25%;
}}
    </style>
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
<script src="JS/preloader.js"></script>
<script src="JS/mobile-navbar.js"></script>

        <div class="logo2">
        <img src="IMG/nsg.png" class="nsglogo"></div>
<br><br>
        <label>Login - Sistema de Controle de Roupa</label><br><br>
        <form method="POST" action="" >

        <input type="text" name="username" placeholder="Digite seu login" required>
        <br><br>
      
        <input type="password" name="password" placeholder="Digite sua senha" required>
        <br><br><br>
        <button type="submit" class="btnEntrar" name="buttonEnviar">ENTRAR</button>
        <?php 
        if ($senhaInvalida == 1){
            echo '<p style="color:#B22222;">Senha Inválida! Tente novamente</p>';
        }
        ?>
       
    </form><br>
    


<footer class="w3-center" style="color: wheat"><h6 style="font-size: 0.8em">©Copyright - Jhony Santos e Raiane Sousa (Aprendizes Gamt - 2022)</h6></footer>






</body>
</html>