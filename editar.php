<?php
	
	require_once("classes/db.class.php");
	require_once("classes/dashboard.class.php");

	$obj = new Dashboad();

	$obj->id = $_GET['id'];
	$cli = $obj->get();

	if($cli->pago == 1){
		$checked = "checked='checked'";
	}else{
		$checked = "";
	}
?>

<h1 class="mt-4">Cadastrar titulo</h1>
<div class="row">
	<div class="col-xl-8 col-md-6">
		<form action="Alterar.controller.php" method="post">

			<input type="hidden" name="id" value="<?php echo $cli->id?>">
			
			<div class="form-group">
				<label for="nome">Nome:</label>
				<input type="text" name="nome" class="form-control" id="nome" value="<?php echo $cli->nome?>" >
			</div>

			<div class="form-group">
				<label for="cpf_cnpj">CPF/CNPJ:</label>
				<input type="number" name="cpf_cnpj" class="form-control  col-xl-4" id="cpf_cnpj"  value="<?php echo $cli->cpf_cnpj?>">
			</div>

			<div class="form-group">
				<label for="nasc">Data de nascimento:</label>
				<input type="text" name="nasc" class="form-control col-xl-4" id="nasc"  value="<?php echo date("d/m/Y", strtotime($cli->data_nascimento));?>">
			</div>

			<div class="form-group">
				<label for="end">Endereço:</label>
				<input type="text" name="endereco" class="form-control" id="endereco"  value="<?php echo $cli->endereco?>">
			</div>

			<div class="form-group">
				<label for="num">Numero:</label>
				<input type="text" name="numero" class="form-control col-xl-2" id="numero"  value="<?php echo $cli->numero?>">
			</div>

			<div class="form-group">
				<label for="comp">Complemento:</label>
				<input type="text" name="complemento" class="form-control" id="complemento"  value="<?php echo $cli->complemento?>">
			</div>

			<div class="form-group">
				<label for="bairro">Bairro:</label>
				<input type="text" name="bairro" class="form-control" id="bairro"  value="<?php echo $cli->bairro?>">
			</div>

			<div class="form-group">
				<label for="cidade">Cidade:</label>
				<input type="text" name="cidade" class="form-control" id="cidade"  value="<?php echo $cli->cidade?>">
			</div>

		 	<div class="form-group">
  				<label for="sel1">Estados:</label>
  				<select class="form-control" id="estado" name="estado">
  					<option value="">Selecione ...</option>
				    <option value="AC" <?php echo ($cli->estado == 'AC')?"selected":"" ?> >Acre</option>
				    <option value="AL" <?php echo ($cli->estado == 'AL')?"selected":"" ?> >Alagoas</option>
				    <option value="AP" <?php echo ($cli->estado == 'AP')?"selected":"" ?> >Amapá</option>
				    <option value="AM" <?php echo ($cli->estado == 'AM')?"selected":"" ?> >Amazonas</option>
				    <option value="BA" <?php echo ($cli->estado == 'BA')?"selected":"" ?> >Bahia</option>
				    <option value="CE" <?php echo ($cli->estado == 'CE')?"selected":"" ?> >Ceará</option>
				    <option value="DF" <?php echo ($cli->estado == 'DF')?"selected":"" ?> >Distrito Federal</option>
				    <option value="ES" <?php echo ($cli->estado == 'ES')?"selected":"" ?> >Espírito Santo</option>
				    <option value="GO" <?php echo ($cli->estado == 'GO')?"selected":"" ?> >Goiás</option>
				    <option value="MA" <?php echo ($cli->estado == 'MA')?"selected":"" ?> >Maranhão</option>
				    <option value="MT" <?php echo ($cli->estado == 'MT')?"selected":"" ?> >Mato Grosso</option>
				    <option value="MS" <?php echo ($cli->estado == 'MS')?"selected":"" ?> >Mato Grosso do Sul</option>
				    <option value="MG" <?php echo ($cli->estado == 'MG')?"selected":"" ?> >Minas Gerais</option>
				    <option value="PA" <?php echo ($cli->estado == 'PA')?"selected":"" ?> >Pará</option>
				    <option value="PB" <?php echo ($cli->estado == 'PB')?"selected":"" ?> >Paraíba</option>
				    <option value="PR" <?php echo ($cli->estado == 'PR')?"selected":"" ?> >Paraná</option>
				    <option value="PE" <?php echo ($cli->estado == 'PE')?"selected":"" ?> >Pernambuco</option>
				    <option value="PI" <?php echo ($cli->estado == 'PI')?"selected":"" ?> >Piauí</option>
				    <option value="RJ" <?php echo ($cli->estado == 'RJ')?"selected":"" ?> >Rio de Janeiro</option>
				    <option value="RN" <?php echo ($cli->estado == 'RN')?"selected":"" ?> >Rio Grande do Norte</option>
				    <option value="RS" <?php echo ($cli->estado == 'RS')?"selected":"" ?> >Rio Grande do Sul</option>
				    <option value="RO" <?php echo ($cli->estado == 'RO')?"selected":"" ?> >Rondônia</option>
				    <option value="RR" <?php echo ($cli->estado == 'RR')?"selected":"" ?> >Roraima</option>
				    <option value="SC" <?php echo ($cli->estado == 'SC')?"selected":"" ?> >Santa Catarina</option>
				    <option value="SP" <?php echo ($cli->estado == 'SP')?"selected":"" ?> >São Paulo</option>
				    <option value="SE" <?php echo ($cli->estado == 'SE')?"selected":"" ?> >Sergipe</option>
				    <option value="TO" <?php echo ($cli->estado == 'TO')?"selected":"" ?> >Tocantins</option>
				    <option value="EX" <?php echo ($cli->estado == 'EX')?"selected":"" ?> >Estrangeiro</option>
				</select>
			</div>

			<div class="form-group">
				<label for="titulo">Descrição do título:</label>
				<input type="text" name="titulo" class="form-control" id="titulo"  value="<?php echo $cli->descricao_titulo?>">
			</div>

			<div class="form-group">
				<label for="valor">Valor:</label>
				<input type="text" name="valor" class="form-control" id="valor"  value="<?php echo $cli->valor?>">
			</div>

			<div class="form-group">
				<label for="venc">Data de Vencimento:</label>
				<input type="text" name="vencimento" class="form-control" id="vencimento"  value="<?php echo date("d/m/Y", strtotime($cli->data_vencimento));?>">
			</div>

			<div class="form-group">
				<label for="venc">Pago:</label>
				<input type="checkbox" name="pago" class="form-control" id="pago"  value="1" <?php echo $checked?> >
			</div>

			<button type="submit" class="btn btn-primary">Alterar</button>
		</form>
	</div>

</div>