<?php
session_start();
require_once ("../controller/ControllerView.php");
$view = new ControllerView();

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
      <p id="resultadoCadastro" style="font-weight: bold; font-size:large;"></p>
        <div role="main" id="mostraConteudo" class="col-md-9 col-md-push-3" style="height: 100%; text-align: left;">

          
          <?php include("conteudos/modulo_1/1_verboToBe_1.php"); ?>
          
      </div>
          <aside role="complementary" class="col-md-3 col-md-pull-9">
            <div class="panel-group text-left" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                            </span> Verb To Be</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                  <td>  
                                  <span class="glyphicon glyphicon-file text-info"></span><a href="index.php?conteudo=1_verboToBe_1">Introdução</a>
                                  </td>
                                </tr>
                                <tr>
                                  <td>  
                                  <span class="glyphicon glyphicon-file text-info"></span><a href="index.php?conteudo=1_verboToBe_2">The Numbers</a>
                                  </td>
                                </tr>
                                <tr>
                                  <td>  
                                  <span class="glyphicon glyphicon-file text-info"></span><a href="index.php?conteudo=1_verboToBe_3">The Human body</a>
                                  </td>
                                </tr>
								                <tr>
                                  <td>  
                                  <span class="glyphicon glyphicon-file text-info"></span><a href="index.php?conteudo=1_verboToBe_4">The Animals</a>
                                  </td>
                                </tr>
                                <tr>
                                  <td>  
                                  <span class="glyphicon glyphicon-file text-info"></span><a href="index.php?conteudo=1_verboToBe_5">The Months Of The Year</a>
                                  </td>
                                </tr>
                                <tr>
                                    <td>
                                        
                                        <span class="glyphicon glyphicon-pencil text-primary "></span><a href="index.php?conteudo=1_verboToBe_Quizz">   Exercício</a>
                                        
                                    </td>

                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                       <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-folder-close">
                            </span> The Greetings</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        
                                    <span class="glyphicon glyphicon-file text-info"></span><a href="index.php?conteudo=1_verboToBe_1">Introdução</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a href="">Exercício</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-folder-close">
                            </span> Personal Pronouns</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        
                                    <span class="glyphicon glyphicon-file text-info"></span><a href="index.php?conteudo=1_verboToBe_1">Introdução</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a href="">Exercício</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                            </span>Reports</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-file text-info"></span><a href="index.php?conteudo=1_verboToBe_1">Introdução</a>
                                    </td>
                                </tr>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
          </aside>
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
<script type="text/javascript">
deslogado = false;
</script>

<?php
if (isset($_GET["acao"])) {

    if ($_GET["acao"] == "sair") {
        ?>
        <script type="text/javascript">
        var answer = confirm('Você tem certeza que deseja deixar o site?');
        if (answer == true) {
              deslogado = true;
          } else  if (answer == false){
              deslogado = false;
              
        }
        </script>
        <?php
    }

     if ($_GET["acao"] == "alteradoComSucesso") {
      ?>
        <script type="text/javascript">
        document.getElementById("resultadoCadastro").innerHTML = "<center>Cadastrado alterado com sucesso.</center>";
        document.getElementById("resultadoCadastro").style.color = "green";
        </script>
        <?php
        
    }

?>
    
    
<script type="text/javascript">

    if (deslogado == true) {
      document.write("<php $_SESSION['logado'] = 0; $_SESSION['cadastroSucesso'] = False;?>");
      document.location = 'logout.php';
      
    }
</script>

<?php

}



if (isset($_GET["opcao"])) {

      ?>
       
        <script type="text/javascript">
            
            var $_GET = <?php echo json_encode($_GET); ?>;

            document.getElementById("mostraConteudo").innerHTML = "";
            $.get('conteudos/'+$_GET['opcao']+'.php', function(result) {
              $("#mostraConteudo").append(result);
          });
        </script>

        <?php
}


if (isset($_GET["conteudo"])) {

      ?>
       
        <script type="text/javascript">
            
            var $_GET = <?php echo json_encode($_GET); ?>;

            document.getElementById("mostraConteudo").innerHTML = "";
            $.get('conteudos/modulo_1/'+$_GET['conteudo']+'.php', function(result) {
              $("#mostraConteudo").append(result);
          });
        </script>

        <?php
}


?>

