<?php include UrlHelper::getHeaderPath(); ?>

<p class="lead">
	Cliente #<?php echo $bean->id ?>
</p>

<div>
	<strong>Nome:</strong>
	<?php echo $bean->nome ?>
</div>

<address>
	<strong><?php echo $bean->endereco ?></strong><br>
	<?php echo $bean->bairro.", ".$bean->cidade." - ".$bean->estado ?><br>
	<abbr title="Telefone"><?php echo $bean->telefone ?></abbr> &mdash;
	<abbr title="Telefone Secundário"><?php echo $bean->telefone2 ?></abbr><br>
	<a href="mailto:#"><?php echo $bean->email ?></a>
</address>


<div class="form-actions">
	<a href="../clientes" class="btn btn-link">Voltar</a>
	<div class="btn-group">
		<a href="../clientes/edit/<?php echo $bean->id ?>" class="btn">Editar</a>
		<a href="../clientes/delete/<?php echo $bean->id ?>" class="btn btn-danger">Apagar</a>
	</div>
</div>

<?php include UrlHelper::getFooterPath(); ?>