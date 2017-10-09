<?php
require_once ('../controller/ControllerAluno.php');
require_once ('../controller/ControllerView.php');

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
          <h1>Cadastro Aluno</h1><br>
          <form class="form-signin" method="post">

            <input name="id" type="hidden" value="<?php echo $id; ?>">

            <div class="form-group"> 
                <div class="input-group"> 
                    <div class="input-group-addon ">Nome: </div>
                <input type="text" name="nome" id="nome" placeholder="Nome" required="" class="form-control input-lg" required autofocus>
              </div>
            </div>
            
            <div class="form-group">
              <div class="input-group">
                  <div class="input-group-addon">Email: </div>
              <input type="text" name="email" placeholder="Email" required="" class="form-control input-lg">
              </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">Senha:</div>
                <input name="senha" class="form-control" placeholder="Senha" type="password">
              </div>
            </div>
                    
          
          <button class="login loginmodal-submit" name="btnSubmit" type="submit" ">Cadastrar</button>
          </form>
          <div class="login-help">
            <a href="login.php">Fazer Login</a>  
         </div>

        </div>
      </div>




</body>
</html>


<?php
/* Pega a ação passada pela URL*/

if (isset($_POST['btnSubmit'])) {

    $controller = new ControllerAluno();

    if (!$controller->consultaEmail()) {

        if (!$controller->cadastrar()) {
            $_SESSION['cadastroSucesso'] = True;

            ?>
            <script type = "text/javascript">
                location.href = "login.php";

            </script>
            <?php
        } else {
          $_SESSION['cadastroSucesso'] = False;
          echo '<script>alert("ERROR AO EFETUAR CADASTRO !");</script>';
          
        }
    } else {
        ?>
        <script type="text/javascript">
            document.getElementById("resultadoCadastro").innerHTML = "O email informado já esta cadastrado.";
            document.getElementById("resultadoCadastro").style.color = "red";</script>
        <?php
    }

}
?>