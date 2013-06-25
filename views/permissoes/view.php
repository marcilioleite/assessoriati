<?php include UrlHelper::getHeaderPath(); ?>

<p class="lead">
	Permissões #<?php echo $bean->id ?>
</p>

<div>
	<strong>Nome:</strong>
	<?php echo $bean->nome ?>
</div>

<div class="form-actions">
	<a href="<?php echo UrlHelper::getRoot() ?>permissoes" class="btn btn-link">Voltar</a>
	<div class="btn-group">
		<a href="<?php echo UrlHelper::getRoot() ?>permissoes/edit/<?php echo $bean->id ?>" class="btn">Editar</a>
		<a href="<?php echo UrlHelper::getRoot() ?>permissoes/delete/<?php echo $bean->id ?>" class="btn btn-danger" id="btn-delete">Apagar</a>
	</div>
</div>

<script>
	$('a#btn-delete').click(function(event) {
		event.preventDefault();
		var that = $(this);
		noty({
		  text: 'Tem certeza que deseja continuar esta operação?',
		  layout: 'center',
		  modal: true,
		  buttons: [
		    {addClass: 'btn btn-success', text: 'Sim', onClick: function($noty) {
		        $noty.close();
		        window.location = that.attr('href');
		      }
		    },
		    {addClass: 'btn', text: 'Não', onClick: function($noty) {
		        $noty.close();
		      }
		    }
		  ]
		})			
	})
	
	$(function() {
		$('ul.nav li').removeClass('active')
		$('#menu-configuracoes').parent().addClass('active')		
	})	
</script>

<?php include UrlHelper::getFooterPath(); ?>