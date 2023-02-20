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
    <title>Armários</title>
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
          <li><a href="armario.php">Voltar</a></li>
      </ul>
    </nav>
  </header>
  <script src="mobile-navbar.js"></script>
        <div class="w3-container w3-center">

<?php 

require_once 'conexaoBD.php';

echo '
        
                <div class="w3-content w3-center">
                <h1 class="w3-center w3-round-large w3-margin" style="background: #007BFF; color: white" >Armário Lehr</h1>
                <div class="table-responsive">
                
                <table class="w3-table-all w3-centered">
                <thead>   
                    <tr class="w3-center" style="background: #007BFF; color: white">
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Atualizar </th>
                    </tr>
                <thead>
                ';
                $sql = "SELECT * FROM armario WHERE depart = '2' ";
                $resultado = $conexao->query($sql);
                if($resultado != null)
                foreach($resultado as $linha) {
                    echo '<tr>';
                    echo '<td>'.$linha['tipo'].'</td>';
                    echo '<td>'.$linha['nome'].'</td>';
$linha['depart'];
$linha['cod'];
                    echo '<td><a href="atualizar.php?cod='.$linha['cod'].'$ &depart='.$linha['depart'].'&tipo='.$linha['tipo'].'&nome='.$linha['nome'].'"><i class="fa fa-refresh  w3-large" style="color: #007BFF"></i> </a></td></td>';
                }
                echo '
                    </table></div>
                </div>
                </div>';
            $conexao->close();








?>






        </div>
</body>
</html>