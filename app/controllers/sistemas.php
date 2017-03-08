<?php

	// Classe de controle do model Sistema
	class Sistemas extends Controller {

		// Chama o método de listarTodosSistemas e as páginas html
		public function index() {
			// lista todas as pessoas
			$sistemas = $this->sistema->listarTodosSistemas();

			// Carrega as páginas de visualização de listar sistema
			require APP . 'views/_templates/header.php';
			require APP . 'views/sistemas/index.php';
			require APP . 'views/_templates/footer.php';
		}

		// Carrega a página de visualização de nova sistema
		public function novoSistema() {
			// carrega as páginas de visualização de nova sistema
			require APP . 'views/_templates/header.php';
			require APP . 'views/sistemas/novo.php';
			require APP . 'views/_templates/footer.php';
		}

		// Chama o método de adicionar sistema e as páginas html
		public function adicionarSistema() {
			// Se submeter o formulário adiciona sistema por $_POST
			if (isset($_POST["submit_adicionar_sistema"])) {
				$this->sistema->adicionarSistema($_POST["descricao"], $_POST["sigla"], $_POST["email"], $_POST["url"]);
			}

			// Redireciona para index de sistema após salvar formulário 
			header('location: ' . URL_WITH_INDEX_FILE . 'sistemas/index');
		}

		// Chama o método de visualizar a página de alterar sistema
		public function editarSistema($sistema_id) {
	        if (isset($sistema_id)) {
	            $sistema = $this->sistema->getSistema($sistema_id);

	            // carrega as páginas de visualização de alterar sistema
	            require APP . 'views/_templates/header.php';
	            require APP . 'views/sistemas/alterar.php';
	            require APP . 'views/_templates/footer.php';
	        } 

	        else {
	            // Redireciona para index de sistema após salvar formulário 
	            header('location: ' . URL_WITH_INDEX_FILE . 'sistemas/index');
	        }
   		}

   		// Chama o método de alterar sistema
   		public function alterarSistema() {
	        if (isset($_POST["submit_alterar_sistema"])) {
	            $this->sistema->alterarSistema($_POST["descricao"], $_POST["sigla"],  $_POST["email"], $_POST["url"], POST["status"], POST["justificativa"], POST["updated_at"], $_POST['sistema_id']);
	        }

	        // Redireciona para index de sistema após salvar formulário 
	        header('location: ' . URL_WITH_INDEX_FILE . 'sistemas/index');
    	}

	}