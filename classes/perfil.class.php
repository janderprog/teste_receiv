<?php

	/**
	 * Classe Login
	 */
	class Perfil extends db
	{

		public $id_usuario;
		public $nome;
		public $login;
		public $email;
		public $senha;

		//Método Get retorna os dados do perfil
		function get(){
			 $query = "SELECT nome,login,email,senha FROM usuarios WHERE id = ".$this->id_usuario;
			 $result = $this->query($query);

			 return $result;
		}

		function alterar(){
			
			$query = "UPDATE usuarios SET
									 nome  = '".$this->nome."',
									 login = '".$this->login."',
									 email = '".$this->email."',
									 senha = '".$this->senha."'
						WHERE id = ".$this->id_usuario;
						
			// Altera os dados 
			if($this->update($query)){
				return true;
			}
			else{
				return false;
			}

		}


	}


?>	