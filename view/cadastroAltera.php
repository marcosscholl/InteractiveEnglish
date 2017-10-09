<?php
session_start();


if (isset($_GET["acao"])) {

    if ($_GET["acao"] == "sair") {
        $_SESSION['logado'] = 0;
        ?>
        <script type="text/javascript">
            document.location.href = "login.php";
        </script>
        <?php
    }
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>Ingles Animado</title>

    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>

 
</head>
<body>
    <div class="container">
      <header class="row">

          <!-- LOGO -->
          <div class="col-xs-6 col-md-4" style="border: none; background: none;padding-top: 0px;padding-bottom:0px;background-color: none;">
            <img src="img/LogoIngles.png" class="img-rounded" alt="Cinque Terre" width="150" height="100" align="center">
          </div>

          <!-- BOTOES -->

          <div class="col-xs-6 col-md-4" style="border: none; background: none;padding-top:0px;padding-bottom:0px;background-color: none;" >

            <div style="padding-top: 0px;">
            
              <h1> Ingles Animado</h1>
              <button style="font-size:16px" onclick="window.location='index.php';"><i class="fa fa-home "></i></button>
              

               <?php

    if ($_SESSION['logado'] == 1) {
      ?>
                                                      
                  
                    <button class="btn-primary dropdown-toggle" style="font-size:15px"  type="button" id="menu1" data-toggle="dropdown">Configurações do Usuário
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="cadastroAltera.php">Atualizar Dados</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?opcao=ajuda">Ajuda</a></li>
                      <li role="presentation" class="divider"></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?opcao=sobre">Sobre</a></li>
                    </ul>


                  
            </div>
          </div>

          <div class="col-xs-6 col-md-4" style="border: none; background: none;padding-top:0px;padding-bottom:0px;background-color: none;" >
            <div style="padding-left: 90px">
              <?php
              
              if ($_SESSION['nome']) {
                echo strtoupper($_SESSION['nome']);
              } else {
                echo "Efetuar Login!";
              }
              
              ?>
              <br>
              <span class="glyphicon glyphicon-user" style="font-size: 50px"></span>
              <br>
              <!-- <input type="button" name="botao-ok" value="Sair"> -->
              <button style="font-size:15px;" onclick="window.location='?acao=sair';">Sair</button>
            </div>
          </div>
      </header>
      <div class="row">
          <div role="main" class="col-md-6 col-md-push-3">
                 
          <p id="resultadoCadastro" style="font-weight: bold; font-size:large;">&nbsp;</p>
          <?php include("formAlteraDados.php"); ?>
          
          </div>
          
      </div>
      <footer class="row">
          
      </footer>
      <?php
      
    } else {
      echo "Necessário efetuar o Login";
       ?>
        <script type="text/javascript">
      document.location.href = "login.php";
       </script>
        <?php
    }
    
    ?>

  </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    
</body>
</html>
