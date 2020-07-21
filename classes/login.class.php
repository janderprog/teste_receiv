<?php

	/**
	 * Classe Login
	 */
	class Login extends db
	{
		
		public $nome;
		public $login;
		public $email;
		public $senha;

		// Método logar
		public function logar(){

			$senha = $this->escape($this->senha);
			$email = $this->escape($this->email);
			$sql = "SELECT id,nome,email,senha FROM usuarios WHERE email = '{$email}' AND senha = '{$senha}' AND ativo = 1";

			return $this->query($sql);

		}

		
		public function deslogar(){
			session_destroy();
			return TRUE;
		}
		

	}
?>