<?php include UrlHelper::getHeaderPath(); ?>

<ul class="breadcrumb">
  <li><a href="<?php echo UrlHelper::getRoot() ?>">Início</a> <span class="divider">/</span></li>
  <li><a href="<?php echo UrlHelper::getRoot() ?>clientes">Clientes</a> <span class="divider">/</span></li>
  <li class="active">Novo Cliente</li>
</ul>

<form action="<?php echo UrlHelper::getRoot() ?>clientes/create" method="post" class="form-horizontal">
	<fieldset>

		<!-- Form Name -->
		<legend>
			Novo Cliente
		</legend>

		<!-- Text input-->
		<div class="control-group">
			<label class="control-label">Nome</label>
			<div class="controls">
				<input id="nome" name="nome" type="text" placeholder="" class="input-xlarge" required="">

			</div>
		</div>

		<!-- Text input-->
		<div class="control-group">
			<label class="control-label">Endereço</label>
			<div class="controls">
				<input id="endereco" name="endereco" type="text" placeholder="" class="input-xlarge">
				<p class="help-block">
					Ex.: Rua Silvio Alvárez, 1050
				</p>
			</div>
		</div>

		<!-- Text input-->
		<div class="control-group">
			<label class="control-label">Bairro</label>
			<div class="controls">
				<input id="bairro" name="bairro" type="text" placeholder="" class="input-xlarge">

			</div>
		</div>

		<!-- Text input-->
		<div class="control-group">
			<label class="control-label">Cidade</label>
			<div class="controls">
				<input id="cidade" name="cidade" type="text" placeholder="" class="input-xlarge">

			</div>
		</div>

		<!-- Select Basic -->
		<div class="control-group">
			<label class="control-label">Estado</label>
			<div class="controls">
				<select id="estado" name="estado" class="input-xlarge">
					<option value="AC">Acre - AC</option>
					<option value="AL">Alagoas - AL</option>
					<option value="AP">Amapá - AP</option>
					<option value="AM">Amazonas - AM</option>
					<option value="BA">Bahia  - BA</option>
					<option value="CE">Ceará - CE</option>
					<option value="DF">Distrito Federal  - DF</option>
					<option value="ES">Espírito Santo - ES</option>
					<option value="GO">Goiás - GO</option>
					<option value="MA">Maranhão - MA</option>
					<option value="MT">Mato Grosso - MT</option>
					<option value="MS">Mato Grosso do Sul - MS</option>
					<option value="MG">Minas Gerais - MG</option>
					<option value="PA">Pará - PA</option>
					<option value="PB">Paraíba - PB</option>
					<option value="PR">Paraná - PR</option>
					<option value="PE">Pernambuco - PE</option>
					<option value="PI">Piauí - PI</option>
					<option value="RJ">Rio de Janeiro - RJ</option>
					<option value="RN">Rio Grande do Norte - RN</option>
					<option value="RS">Rio Grande do Sul - RS</option>
					<option value="RO">Rondônia - RO</option>
					<option value="RR">Roraima - RR</option>
					<option value="SC">Santa Catarina - SC</option>
					<option value="SP">São Paulo - SP</option>
					<option value="SE">Sergipe - SE</option>
					<option value="TO">Tocantins - TO</option>
				</select>
			</div>
		</div>

		<!-- Text input-->
		<div class="control-group">
			<label class="control-label">CEP</label>
			<div class="controls">
				<input id="cep" name="cep" type="text" placeholder="" class="input-xlarge">
				<p class="help-block">
					Ex.: 56700-000
				</p>
			</div>
		</div>

		<!-- Text input-->
		<div class="control-group">
			<label class="control-label">E-mail</label>
			<div class="controls">
				<input id="email" name="email" type="text" placeholder="" class="input-xlarge" required="">
				<p class="help-block">
					Ex.: nome@exemplo.com
				</p>
			</div>
		</div>

		<!-- Text input-->
		<div class="control-group">
			<label class="control-label">Telefone</label>
			<div class="controls">
				<input id="telefone" name="telefone" type="text" placeholder="" class="input-xlarge" required="">
				<p class="help-block">
					Ex.: (11) 8008-0880
				</p>
			</div>
		</div>
		
		<!-- Text input-->
		<div class="control-group">
			<label class="control-label">Telefone alternativo</label>
			<div class="controls">
				<input id="telefone2" name="telefone2" type="text" placeholder="" class="input-xlarge">
				<p class="help-block">
					Ex.: (11) 8008-0880
				</p>
			</div>
		</div>

		<!-- Textarea -->
		<div class="control-group">
			<label class="control-label">Observação</label>
			<div class="controls">
				<textarea id="observacao" name="observacao"></textarea>
			</div>
		</div>

		<!-- Button -->
		<div class="form-actions">
			<button type="submit" class="btn btn-success">
				Finalizar
			</button>
			<a href="<?php echo UrlHelper::getRoot() ?>clientes" class="btn">
				Cancelar
			</a>
		</div>

	</fieldset>
</form>

<script>
	$(function() {
		$('ul.nav li').removeClass('active')
		$('#menu-clientes').parent().addClass('active')		
	})	
</script>

<?php include UrlHelper::getFooterPath(); ?>