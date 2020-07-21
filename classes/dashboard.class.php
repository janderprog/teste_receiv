<?php

	/**
	 * Classe Login
	 */
	class Dashboad extends db
	{

		public $id;
		public $nome;
		public $cpf_cnpj;
		public $data_nascimento;
		public $endereco;
		public $numero;
		public $complemento;
		public $bairro;
		public $cidade;
		public $estado;
		public $descricao_titulo;
		public $valor;
		public $data_vencimento;
		public $pago;
		public $update;

		// Retorna quantidade de títulos
		public function getTitulos(){
			$result = $this->query("SELECT COUNT(id) as tot_titulos from devedores");
			return $result;
		}

		// Retorna valor total de títulos
		public function valorTitulos(){
			$result = $this->query("SELECT SUM(valor) as val_titulos from devedores");
			return $result;
		}

		// Retorna quantidade de títulos Abertos
		public function getAbertos(){
			$result = $this->query("SELECT COUNT(id) as tot_abertos from devedores WHERE data_vencimento >= {date('Y-m-d')} AND pago = 0");
			return $result;
		}

		// Retorna valor total de títulos Abertos
		public function valorAbertos(){
			$result = $this->query("SELECT SUM(valor) as val_abertos from devedores WHERE data_vencimento >= {date('Y-m-d')} AND pago = 0");
			return $result;
		}

		// Retorna quantidade de títulos Vencidos
		public function getVencidos(){
			$result = $this->query("SELECT COUNT(id) as tot_vencidos from devedores WHERE data_vencimento < {date('Y-m-d')} AND pago = 0");
			return $result;
		}

		// Retorna valor total de títulos vencidos
		public function valorVencidos(){
			$result = $this->query("SELECT SUM(valor) as val_vencidos from devedores WHERE data_vencimento < {date('Y-m-d')} AND pago = 0");
			return $result;
		}

		// Retorna quantidade de títulos Fechados
		public function getFechados(){
			$result = $this->query("SELECT COUNT(id) as tot_fechados from devedores WHERE pago = 1");
			return $result;
		}

		// Retorna valor total de títulos vencidos
		public function valorFechados(){
			$result = $this->query("SELECT SUM(valor) as val_fechados from devedores WHERE pago = 1");
			return $result;
		}

		// Retorna dados dos clientes
		public function getClientes(){

			$clientes = $this->query("SELECT * FROM devedores");
			return $clientes;
		}


		// Retorna dados de um cliente
		public function get(){

			$clientes = $this->query("SELECT * FROM devedores WHERE id = ".$this->id);
			return $clientes;
		}

		// Grava cliente e título
		public function salvar(){
			
			$valor = number_format($this->valor,2);

			echo $sql = "INSERT INTO `receiv`.`devedores`
									(
									`nome`,
									`cpf_cnpj`,
									`data_nascimento`,
									`numero`,
									`complemento`,
									`bairro`,
									`cidade`,
									`estado`,
									`descricao_titulo`,
									`valor`,
									`data_vencimento`,
									`pago`,
									`endereco`,
									`alterado`)
									VALUES
									(
									'{$this->nome}',
									{$this->cpf_cnpj},
									'{$this->data_nascimento}',
									'{$this->numero}',
									'{$this->complemento}',
									'{$this->bairro}',
									'{$this->cidade}',
									'{$this->estado}',
									'{$this->descricao_titulo}',
									{$valor},
									'{$this->data_vencimento}',
									{$this->pago},
									'{$this->endereco}',
									'{$this->update}'
								)";

			return $this->insert($sql);
		}


		// Altera dados do titulo
		public function Alterar(){

			$valor = number_format($this->valor,2);

			$sql = "UPDATE devedores set
						nome = '{$this->nome}',
						cpf_cnpj = {$this->cpf_cnpj},
						data_nascimento = '{$this->data_nascimento}',
						endereco = '{$this->endereco}',
						numero = '{$this->numero}',
						complemento = '{$this->complemento}',
						bairro = '{$this->bairro}',
						cidade = '{$this->cidade}',
						estado = '{$this->estado}',
						descricao_titulo = '{$this->descricao_titulo}',
						valor = '{$this->valor}',
						data_vencimento = '{$this->data_vencimento}',
						pago = '{$this->pago}',
						alterado = '".date('Y-m-d H:i:s')."'
					WHERE id = {$this->id}";

			return $this->update($sql);	

		}


		// Exclui os dados do titulo
		public function excluir(){

			$sql = "DELETE FROM devedores WHERE id = ".$this->id;

			return $this->delete($sql);
		}

	}

?>