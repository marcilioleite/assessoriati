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
		<a href="<?php echo UrlHelper::getRoot() ?>clientes/delete/<?php echo $bean->id ?>" class="btn btn-danger">Apagar</a>
	</div>
</div>

<?php include UrlHelper::getFooterPath(); ?>