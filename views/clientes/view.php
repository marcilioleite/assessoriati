<?php include UrlHelper::getHeaderPath(); ?>

<p class="lead">
	Cliente #<?php echo $bean->id ?>
</p>

<div>
	<strong>Nome:</strong>
	<?php echo $bean->nome ?>
</div>

<address>
	<?php if ($bean->endereco != ""): ?>
	<strong><?php echo $bean->endereco ?></strong><br>
	<?php endif ?>
	<?php if ($bean->bairro != ""): ?>
	<?php echo $bean->bairro ?>, 
	<?php endif ?>
	<?php if ($bean->cidade != ""): ?>
	<?php echo $bean->cidade." - ".$bean->estado ?><br>
	<?php endif ?>
	<?php if ($bean->telefone != ""): ?>
	<abbr title="Telefone"><?php echo $bean->telefone ?></abbr>
	<?php endif ?>
	<?php if ($bean->telefone2 != ""): ?>
	 &mdash; <abbr title="Telefone Secundário"><?php echo $bean->telefone2 ?></abbr>
	<?php endif ?>
	<br>
	<?php if ($bean->email != ""): ?>
	<a href="mailto:<?php echo $bean->email ?>"><?php echo $bean->email ?></a>
	<?php endif ?>
</address>

<div class="form-actions">
	<a href="<?php echo UrlHelper::getRoot() ?>clientes" class="btn btn-link">Voltar</a>
	<div class="btn-group">
		<a href="<?php echo UrlHelper::getRoot() ?>clientes/edit/<?php echo $bean->id ?>" class="btn">Editar</a>
		<a href="<?php echo UrlHelper::getRoot() ?>clientes/delete/<?php echo $bean->id ?>" class="btn btn-danger" id="btn-delete">Apagar</a>
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
		$('#menu-clientes').parent().addClass('active')		
	})	
</script>

<?php include UrlHelper::getFooterPath(); ?>