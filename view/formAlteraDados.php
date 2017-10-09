<?php

require_once ('../controller/ControllerAluno.php');

  $controller = new ControllerAluno();
  $dados  = $controller->retornaDados();

  $nome = $dados['NOME'];
  $email = $dados['EMAIL'];
  $senha = $dados['SENHA'];

?>

  
<div class="modal-dialog">
        <div class="loginmodal-container">
          <h1>Cadastro Aluno</h1> Alterar Dados<br>
          <form class="form-signin" method="post">
      <div class="form-group"> 
          <div class="input-group"> 
              <div class="input-group-addon ">Nome: </div>
          <input type="text" name="nome" id="nome" placeholder="Nome" required="" class="form-control input-lg" value="<?=$nome?>">
        </div>
      </div>
      
      <div class="form-group">
        <div class="input-group">
            <div class="input-group-addon">Email: </div>
        <input type="text" name="email" placeholder="Email" required="" value="<?=$email?>" class="form-control input-lg">
        </div>
      </div>

      <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon">Senha:</div>
          <input name="senha" class="form-control" placeholder="Senha" value="<?php echo $senha; ?>">
        </div>
      </div>
                    
          
          
          <button class="login loginmodal-submit" name="btnSubmit" type="submit">Salvar alterações</button>
          </form>

        </div>
      </div>

<p id="resultadoCadastro" style="font-weight: bold; font-size:large;">&nbsp;</p>




<?php
if (isset($_POST['btnSubmit'])) {

  if ($controller->update()) {
    echo '<script>location.href = "index.php?acao=alteradoComSucesso"; </script>';
  }
  


}

?>