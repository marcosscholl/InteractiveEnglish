<?php
require_once("DAO.php");
	/**
	* 
	*/
	class AlunoDAO extends DAO
	{
		
		public function insert(AlunoModel $alunoModel){
			try{

				
				$stmt = $this->conn->prepare("INSERT INTO ALUNO (NOME, EMAIL, SENHA) VALUES (:nome, :email, :senha)");

                    $stmt->bindValue(":nome", $alunoModel->getNome());
                    $stmt->bindValue(":email", $alunoModel->getEmail());
                    $stmt->bindValue(":senha", $alunoModel->getSenha());

                 $stmt->execute(); 	   

			}catch (Exception $e){

				return false;
			}	

			return true;
		}

		public function login(AlunoModel $alunoModel){
			try{
				$stmt = $this->conn->prepare("SELECT * FROM ALUNO WHERE EMAIL=:email AND SENHA=:senha");

				$stmt->bindValue(":email", $alunoModel->getEmail());
				$stmt->bindValue(":senha", $alunoModel->getSenha());

				$stmt -> execute();

				if ($stmt->rowCount() > 0) {
                	return true;
	            } else {
	                return false;
	            }
			}catch (Exception $e){
				
				return false;
			}	
		}


		public function retornaNome(AlunoModel $alunoModel){
			try{
				$stmt = $this-> conn-> prepare ("SELECT NOME FROM ALUNO WHERE EMAIL=:email");

				$stmt -> bindValue(":email", $alunoModel->getEmail());

				$stmt -> execute();

				$dados = $stmt->fetch(PDO::FETCH_ASSOC);

				 
				return $dados["NOME"];


			}catch (Exception $e){
				
				return false;
			}	
		}


		public function retornaDados(AlunoModel $alunoModel){
			try{
				$stmt = $this-> conn-> prepare ("SELECT * FROM ALUNO WHERE ID=:id");

				$stmt -> bindValue(":id", $alunoModel->getId());

				$stmt -> execute();

				$dados = $stmt->fetch(PDO::FETCH_ASSOC);

				 
				return $dados;


			}catch (Exception $e){
				
				return false;
			}	
		}



		public function consultarCodUsuario(AlunoModel $alunoModel){
			try{
				$stmt = $this-> conn-> prepare ("SELECT * FROM ALUNO WHERE EMAIL=:email");

				$stmt -> bindValue(":email", $alunoModel->getEmail());

				$stmt -> execute();

				if ($stmt->rowCount() > 0) {

                $consulta = $stmt->fetch(PDO::FETCH_ASSOC);
	                return $consulta['ID'];
	            } else {
	                return "";
	            }

			}catch (Exception $e){
				
				return false;
			}	

			return true;
		}


		public function consultarEmail(AlunoModel $alunoModel){
			try{
				$stmt = $this-> conn-> prepare ("SELECT * FROM ALUNO WHERE EMAIL=:email");

				$stmt -> bindValue(":email", $alunoModel->getEmail());

				$stmt -> execute();

				if ($stmt->rowCount() > 0) {
                	return true;
	            } else {
	                return false;
	            }

			}catch (Exception $e){
				
				return false;
			}	

			return true;
		}


		public function updateCadastro(AlunoModel $alunoModel){
			try{
				$stmt = $this-> conn-> prepare ("UPDATE ALUNO SET NOME=:nome, EMAIL=:email, SENHA=:senha WHERE ID=:id");

			

				$stmt -> bindValue(":nome", $alunoModel->getNome());
				$stmt -> bindValue(":email", $alunoModel->getEmail());
				$stmt -> bindValue(":senha", $alunoModel->getSenha());
				$stmt -> bindValue(":id", $alunoModel->getId());

				$stmt -> execute();

			}catch (Exception $e){
				
				return false;
			}	

			return true;
		}


		public function updateSenha(AlunoModel $alunoModel){
			try{
				$stmt = $this->conn->prepare("UPDATE ALUNO SET SENHA=:senha WHERE ID=:id");
				$stmt -> bindValue(":senha", $alunoModel->getSenha());
				$stmt -> bindValue(":id", $alunoModel->getId());

				$stmt -> execute();

			}catch (Exception $e){

				return false;
			}	

			return true;
		}

	}
