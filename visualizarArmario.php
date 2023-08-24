<?php require_once ('verificarAcesso.php'); ?>
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
    <title>Armários</title>
    <link rel="stylesheet" href="Style/style.css" />
    <link rel="icon" type="image/png" href="IMG/favicon.ico" />

 <link rel="stylesheet" type="text/css" href="Style/load.css">

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
          <li><a href="armario.php">Voltar</a></li>
    
      </ul>
    </nav>
  </header>
  <script src="JS/preloader.js"></script>
<script src="JS/mobile-navbar.js"></script>
     <div class="w3-container w3-center">

<?php 

require_once 'conexaoBD.php';

echo '
        
                <div class="w3-content w3-center">
             
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
                $sql = "SELECT * FROM armario WHERE depart = ".$_GET['txtDepartamento']." ORDER BY tipo asc";
                $resultado = $conexao->query($sql);
                if($resultado != null)
                foreach($resultado as $linha) {
                    echo '<tr>';
                    echo '<td>'.$linha['tipo'].'</td>';
                    echo '<td>'.$linha['nome'].'</td>';
$linha['depart'];
$linha['cod'];
                    echo '<td><a href="atualizarArmario.php?cod='.$linha['cod'].'&depart='.$linha['depart'].'&tipo='.$linha['tipo'].'&nome='.$linha['nome'].'"><i class="fa fa-refresh  w3-large" style="color: #007BFF"></i> </a></td></td>';
                }
                echo '
                    </table>
                    </div>
                </div>
                </div>';
            $conexao->close();








?>






        </div>
</body>
</html>