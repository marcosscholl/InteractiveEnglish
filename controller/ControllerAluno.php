<?php


class ControllerAluno {

    private $view;
    private  $objView;

    public $conexao;
    private  $urlDAO;
    private  $urlClass;

    public function  __construct(){
        //Url Class
        $this->conexao = "../model/DAO.php";
        require_once($this->conexao);

        $this->urlClass = "../model/AlunoModel.php";
        require_once($this->urlClass);


        //Url DAO
        $this->urlDAO = "../Model/AlunoDAO.php";
        require_once($this->urlDAO);


    }


     public function login(){ 
                
        $con = new DAO(); 
        $alunoModel = new AlunoModel();
        $alunoModel -> setEmail($_POST['email']);
        $alunoModel -> setSenha($_POST['senha']);
        
        $alunoDAO = new AlunoDAO();



        if ($alunoDAO->login($alunoModel)) {

            
          $_SESSION['logado'] = '1';
          $_SESSION['nome'] = $alunoDAO->retornaNome($alunoModel);
          $_SESSION['id'] = $alunoDAO->consultarCodUsuario($alunoModel);

          //header ("Location: ../view/index.php");
          return true;


        } else {
            ?>
            <script type="text/javascript">
                alert("Usuário ou senha inválido.");
            </script>
            <?php
            return false;
        }
        
         
    }

    public function cadastrar(){    
        $con = new DAO(); 

        $alunoModel = new AlunoModel();
        $alunoModel -> setNome($_POST['nome']);
        $alunoModel -> setEmail($_POST['email']);
        $alunoModel -> setSenha($_POST['senha']);
        
        $alunoDAO = new AlunoDAO();
        $alunoDAO->insert($alunoModel);
         
    }

    public function consultaEmail(){    
        $con = new DAO(); 

        $alunoModel = new AlunoModel();
        $alunoModel -> setEmail($_POST['email']);
        
        $alunoDAO = new AlunoDAO();
        return $alunoDAO->consultarEmail($alunoModel);
         
    }


    public function retornaDados(){    
        $con = new DAO(); 

        $alunoModel = new AlunoModel();

        $alunoDAO = new AlunoDAO();

        $alunoModel->setId($_SESSION['id']);
        $alunoModel = $alunoDAO->retornaDados($alunoModel);
        
        return $alunoModel;
         
    }

    public function update(){    
        $con = new DAO(); 

        $alunoModel = new AlunoModel();
        $alunoModel -> setNome($_POST['nome']);
        $alunoModel -> setEmail($_POST['email']);
        $alunoModel -> setSenha($_POST['senha']);
        $alunoModel -> setId($_SESSION["id"]);
        
        $alunoDAO = new AlunoDAO();
        
        
        
        if ($alunoDAO->updateCadastro($alunoModel)) {

            $_SESSION['nome'] = $alunoDAO->retornaNome($alunoModel);
            return true;             
        }
        
    }


} 