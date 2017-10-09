<?php
session_start();




?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>Ingles Animado</title>

    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



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

                                
            </div>
          </div>

          
          <div class="col-xs-6 col-md-4" style="border: none; background: none;padding-top:0px;padding-bottom:0px;background-color: none;" >
            <div style="padding-left: 90px">
              Efetuar Login!
              <br>
              <span class="glyphicon glyphicon-user" style="font-size: 50px"></span>
              <br>
            </div>
          </div>

      </header>
      <div class="row">
          <div role="main" class="col-md-6 col-md-push-3">
                 

          <?php include("formCadastro.php"); ?>
          
          </div>
          
      </div>
      <footer class="row">
          
      </footer>
  </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php  

?>