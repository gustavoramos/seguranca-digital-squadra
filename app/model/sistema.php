<?php

	// Classe Sistema 
	class Sistema {

		// Método contrutor do objeto $db do banco de daods PDO
		function __construct($db) {
			try {
				$this->db = $db;	
			}

			catch (PDOException $e) {
				exit('Não foi possível estabelecer conexão com o banco de dados!');
			}
		}

		// Método que busca todas os sistemas no banco de dados
		public function listarTodosSistemas() {
			$sql = "SELECT * FROM sistema";
			$query = $this->db->prepare($sql);
			$query->execute();
			return $query->fetchAll();
		}

		// Método que adiciona um novo sistema ao banco de dados 
		public function adicionarSistema($descricao, $sigla, $email, $url) {
			$sql = "INSERT INTO sistema (descricao, sigla, email, url) VALUES (:descricao, :sigla, :email, :url)";
			$query = $this->db->prepare($sql);
			$parameters = array(':descricao' => $descricao, ':sigla' => $sigla, ':email' => $email, ':url' => $url);
			$query->execute($parameters);
		}

		// Método que seleciona um sistema por id 
		public function getSistema($sistema_id) {
	        $sql = "SELECT id, descricao, sigla, email, url, status, justificativa, updated_at FROM sistema WHERE id = :sistema_id LIMIT 1";
	        $query = $this->db->prepare($sql);
	        $parameters = array(':sistema_id' => $sistema_id);
	        $query->execute($parameters);
	        return $query->fetch();
    	}

    	// Método que altera um sistema no banco de dados 
    	public function alterarSistema($descricao, $sigla, $email, $url, $status, $justificativa, $updated_at, $sistema_id) {
	        $sql = "UPDATE sistema SET descricao = :descricao, sigla = :sigla, email = 	:email, url = :url, status = :status, justificativa = :justificativa, updated_at = :updated_at WHERE id = :sistema_id";
	        $query = $this->db->prepare($sql);
	        $parameters = array(':descricao' => $descricao, ':sigla' => $sigla, ':email' => $email, ':url' => $url, ':status' => $status, ':justificativa' => $justificativa, ':updated_at' => $updated_at, ':sistema_id' => $sistema_id);
	        $query->execute($parameters);
    	}

    	// Método que pesquisa sistemas por descrição, sigla e e-mail
    	public function pesquisarSistema() {
    		$sql = "SELECT * FROM sistema WHERE descricao LIKE '%".$descricao. "%'";
    		$query = $this->db->prepare($sql);
    		$query->execute();
    		return $query->fetchAll();
    	}

	}