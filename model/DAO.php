<?php


class DAO{
			
		public $conn;

		function __construct()
		{
			$dsn = 'mysql:host=localhost;port=3307;dbname=inglesanimado';
			$usuario = 'root';
			$senha = '';
			$opcoes = array (PDO::ATTR_PERSISTENT => true,
							PDO::ATTR_CASE => PDO::CASE_UPPER


				);

			try{

				$this->conn = new PDO ($dsn,$usuario,$senha,$opcoes);
			}catch(PDOException $e){
				echo 'erro: ', $e->getMessage();

			}

			
		}
	}

