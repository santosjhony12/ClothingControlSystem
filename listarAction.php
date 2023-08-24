<?php require_once ('verificarAcesso.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
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
          <li><a href="box.php">Realizar Lançamentos</a></li>
          <li><a href="contagem.php">Contar</a></li>
         <li><a href="advertencia.php">Advertências</a></li>
      </ul>
    </nav>
  </header>
  <script src="JS/preloader.js"></script>
<script src="JS/mobile-navbar.js"></script>
        <div class="w3-container w3-center">
        <?php 
        require_once 'conexaoBD.php';
        echo '
        
                <div class="w3-content w3-center ">
                <h1 class="w3-center w3-round-large w3-margin" style="background: #007BFF; color: white" >Listagem de Lançamentos</h1>
                <div class="table-responsive">
                <table class="w3-table-all w3-centered ">
                <thead>   
                    <tr class="w3-center" style="background: #007BFF; color: white">
                        <th>Código Lançamento</th>
                        <th>Departamento</th>
                        <th>Data Lançamento</th>
                        <th>Tipo de Roupa</th>
                        <th>Código Roupa</th>
                        <th>Cor</th>
                        <th>Tamanho</th>
                        <th>Tipo de Movimento</th>
                        <th>Descrição</th>
                        <th>Excluir</th>
                    </tr>
                <thead>
                ';


                /*mudei apartir daqui */
                $sql = "SELECT * FROM lancamento WHERE cod_depart = '".$_GET['txtDepart']."' and data_lanc between '".$_GET['datainicio']."' and '".$_GET['datafinal']."' and tipo_movimento = '".$_GET['txtMovimento']."'";
                $resultado = $conexao->query($sql);
                if($resultado != null)
                foreach($resultado as $linha) {
                    echo '<tr>';
                    echo '<td>'.$linha['id_lanc'].'</td>';
                    echo '<td>'.$linha['descricao_depart'].'</td>';
                    echo '<td>'.$linha['data_lanc'].'</td>';
                    echo '<td>'.$linha['tipo'].'</td>';
                    echo '<td>'.$linha['cod_vest'].'</td>';
                    echo '<td>'.$linha['cor'].'</td>';
                    echo '<td>'.$linha['tamanho'].'</td>';
                    echo '<td>'.$linha['tipo_movimento'].'</td>';
                    echo '<td>'.$linha['descricao'].'</td>';
                    echo '<td><a href="excluir.php?id_lanc='.$linha['id_lanc'].'&tamanho='.$linha['tamanho'].'&descricao_depart='.$linha['descricao_depart'].'&data_lanc='.$linha['data_lanc'].'&tipo='.$linha['tipo'].'&cod_vest='.$linha['cod_vest'].'&cor='.$linha['cor'].'&tipo_movimento='.$linha['tipo_movimento'].'&descricao='.$linha['descricao'].'"><i class="fa fa-user-times w3-large" style="color: #007BFF"></i> </a></td></td>';
                }
                echo '
                    </table>
                    </div>
                </div>
                </div>';
            $conexao->close();
        
        /*and data_lanc between '".$_POST['date1']."' and '".$POST_['date2']."'"  */
        
  



        
      ?>
</body>
</html>