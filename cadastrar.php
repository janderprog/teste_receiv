<h1 class="mt-4">Cadastrar titulo</h1>
<div class="row">
	<div class="col-xl-8 col-md-6">
		<form action="cadastrar.controller.php" method="post">
			
			<div class="form-group">
				<label for="nome">Nome:</label>
				<input type="text" name="nome" class="form-control" id="nome">
			</div>

			<div class="form-group">
				<label for="cpf_cnpj">CPF/CNPJ:</label>
				<input type="number" name="cpf_cnpj" class="form-control  col-xl-4" id="cpf_cnpj">
			</div>

			<div class="form-group">
				<label for="nasc">Data de nascimento:</label>
				<input type="text" name="nasc" class="form-control col-xl-4" id="nasc">
			</div>

			<div class="form-group">
				<label for="end">Endereço:</label>
				<input type="text" name="endereco" class="form-control" id="endereco">
			</div>

			<div class="form-group">
				<label for="num">Numero:</label>
				<input type="text" name="numero" class="form-control col-xl-2" id="numero">
			</div>

			<div class="form-group">
				<label for="comp">Complemento:</label>
				<input type="text" name="complemento" class="form-control" id="complemento">
			</div>

			<div class="form-group">
				<label for="bairro">Bairro:</label>
				<input type="text" name="bairro" class="form-control" id="bairro">
			</div>

			<div class="form-group">
				<label for="cidade">Cidade:</label>
				<input type="text" name="cidade" class="form-control" id="cidade">
			</div>

		 	<div class="form-group">
  				<label for="sel1">Estados:</label>
  				<select class="form-control" id="estado" name="estado">
  					<option value="">Selecione ...</option>
				    <option value="AC">Acre</option>
				    <option value="AL">Alagoas</option>
				    <option value="AP">Amapá</option>
				    <option value="AM">Amazonas</option>
				    <option value="BA">Bahia</option>
				    <option value="CE">Ceará</option>
				    <option value="DF">Distrito Federal</option>
				    <option value="ES">Espírito Santo</option>
				    <option value="GO">Goiás</option>
				    <option value="MA">Maranhão</option>
				    <option value="MT">Mato Grosso</option>
				    <option value="MS">Mato Grosso do Sul</option>
				    <option value="MG">Minas Gerais</option>
				    <option value="PA">Pará</option>
				    <option value="PB">Paraíba</option>
				    <option value="PR">Paraná</option>
				    <option value="PE">Pernambuco</option>
				    <option value="PI">Piauí</option>
				    <option value="RJ">Rio de Janeiro</option>
				    <option value="RN">Rio Grande do Norte</option>
				    <option value="RS">Rio Grande do Sul</option>
				    <option value="RO">Rondônia</option>
				    <option value="RR">Roraima</option>
				    <option value="SC">Santa Catarina</option>
				    <option value="SP">São Paulo</option>
				    <option value="SE">Sergipe</option>
				    <option value="TO">Tocantins</option>
				    <option value="EX">Estrangeiro</option>
				</select>
			</div>

			<div class="form-group">
				<label for="titulo">Descrição do título:</label>
				<input type="text" name="titulo" class="form-control" id="titulo">
			</div>

			<div class="form-group">
				<label for="valor">Valor:</label>
				<input type="text" name="valor" class="form-control" id="valor">
			</div>

			<div class="form-group">
				<label for="venc">Data de Vencimento:</label>
				<input type="text" name="vencimento" class="form-control" id="vencimento">
			</div>

			<button type="submit" class="btn btn-primary">Salvar</button>
		</form>
	</div>

</div>