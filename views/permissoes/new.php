<?php include UrlHelper::getHeaderPath(); ?>

<ul class="breadcrumb">
  <li><a href="<?php echo UrlHelper::getRoot() ?>">Início</a> <span class="divider">/</span></li>
  <li><a href="<?php echo UrlHelper::getRoot() ?>permissoes">Permissões</a> <span class="divider">/</span></li>
  <li class="active">Nova Permissão</li>
</ul>


<form action="<?php echo UrlHelper::getRoot() ?>permissoes/create" method="post" class="form-horizontal">
	<fieldset>

		<!-- Form Name -->
		<legend>
			Nova Permissão
		</legend>

		<!-- Text input-->
		<div class="control-group">
			<label class="control-label">Nome</label>
			<div class="controls">
				<input id="nome" name="nome" type="text" placeholder="" class="input-xlarge" required="">
			</div>
		</div>

		<!-- Button -->
		<div class="form-actions">
			<button type="submit" class="btn btn-success">
				Finalizar
			</button>
			<a href="<?php echo UrlHelper::getRoot() ?>permissoes" class="btn">
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