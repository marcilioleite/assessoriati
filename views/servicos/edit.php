<?php include UrlHelper::getHeaderPath(); ?>

<ul class="breadcrumb">
  <li><a href="<?php echo UrlHelper::getRoot() ?>">Início</a> <span class="divider">/</span></li>
  <li><a href="<?php echo UrlHelper::getRoot() ?>servicos">Serviços</a> <span class="divider">/</span></li>
  <li class="active">Editar Serviço</li>
</ul>

<form action="<?php echo UrlHelper::getRoot() ?>servicos/update/bean" method="post" class="form-horizontal">
	<fieldset>

		<!-- Form Name -->
		<legend>
			Editar Serviço #<?php echo $bean->id ?>
		</legend>

		<input type="hidden" name="id" value="<?php echo $bean->id ?>">
		
		<!-- Text input-->
		<div class="control-group">
			<label class="control-label">Nome</label>
			<div class="controls">
				<input id="nome" name="nome" type="text" placeholder="" class="input-xlarge" required="" value="<?php echo $bean->nome ?>">

			</div>
		</div>

		<!-- Button -->
		<div class="form-actions">
			<button type="submit" class="btn btn-success">
				Salvar
			</button>
			<a href="<?php echo UrlHelper::getRoot() ?>servicos" class="btn">
				Cancelar
			</a>
		</div>
	</fieldset>
</form>

<script>
	$(function() {
		$('ul.nav li').removeClass('active')
		$('#menu-configuracoes').parent().addClass('active')		
	})	
</script>

<?php include UrlHelper::getFooterPath(); ?>