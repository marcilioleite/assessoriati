<?php include UrlHelper::getHeaderPath(); ?>

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
			<a href="<?php echo UrlHelper::getRoot() ?>clientes" class="btn">
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