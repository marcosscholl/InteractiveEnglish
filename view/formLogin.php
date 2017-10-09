<?php
require_once ('../controller/ControllerAluno.php');
require_once ("../controller/ControllerView.php");
$view = new ControllerView();

?>

<html lang="en">
<head>
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

<div class="modal-dialog">
	<p id="resultadoCadastro" style="font-weight: bold; font-size:large;">&nbsp;</p>
	<div class="loginmodal-container">
	  <h1>Área do Aluno</h1><br>
	  <form class="form-signin" method="post">
	<div class="form-group">
	  <div class="input-group">
	      <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
	  <input type="text" name="email" placeholder="Email" required="" class="form-control input-lg">
		</div>
	</div>
	            
	<div class="form-group">
	  <div class="input-group">
	      <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
	  <input name="senha" class="form-control" placeholder="Senha" type="password">
	</div>
	</div>
	            
	  
	  <button class="login loginmodal-submit" name="btnSubmitlOGIN" type="submit">Login</button>
	  </form>
	  <div class="login-help">
	      <a href="cadastro.php">Cadastre-se</a>  
	   </div>

	</div>
</div>

</body>
</html>


<?php

if (isset($_POST['btnSubmitlOGIN'])) {


    $controller = new ControllerAluno();
   $controller->login();

   if ($controller->consultaEmail()) {

        if ($controller->login()) {
            echo '<script>alert("Bem vindo ao Ingles Interativo!!"); location.href = "../view/index.php"</script>';

        } else {
          echo '<script>alert("ERROR AO EFETUAR LOGIN !");</script>';
          
        }
    } else {
        ?>
        <script type="text/javascript">
            document.getElementById("resultadoCadastro").innerHTML = "O email não foi encontrado.";
            document.getElementById("resultadoCadastro").style.color = "red";
            </script>
        <?php
    }

   //$view->index();


}

if (isset($_SESSION['cadastroSucesso'])) {
	if ($_SESSION['cadastroSucesso'] == True) {
		?>
	        <script type="text/javascript">
		 		document.getElementById("resultadoCadastro").innerHTML =  'Cadastrado com sucesso. <br><div style="text-align: center;">Efetue o Login</div>';
		 		document.getElementById("resultadoCadastro").style.color = "green";
		 </script>
	     <?php
	}
}


?>