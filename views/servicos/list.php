<?php include UrlHelper::getHeaderPath(); ?>

<ul class="breadcrumb">
  <li><a href="<?php echo UrlHelper::getRoot() ?>">Início</a> <span class="divider">/</span></li>
  <li class="active">Serviços</li>
</ul>

<h3>Serviços</h3>

<?php if ($count > 0): ?>
	
<a href="<?php echo UrlHelper::getRoot() ?>servicos/new">Novo serviço</a>
<hr>
<?php if ($count > 1): ?>
<p class="text-center muted"><?php echo $count ?> resultados a serem exibidos.</p>
<?php else: ?>
<p class="text-center muted"><?php echo $count ?> resultado a ser exibido.</p>
<?php endif ?>

<div class="row">
	<div class="span9">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>
						#
					</th>
					<th>
						Nome
					</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($list as $item): ?>
					<tr id="row-<?php echo $item->id ?>">
						<td>
							<?php echo $item->id ?>
						</td>
						<td>
							<a href="<?php echo UrlHelper::getRoot() ?>servicos/<?php echo $item->id ?>"><?php echo $item->nome ?></a>
						</td>
						<td>
							<div class="btn-group pull-right">
								<a href="<?php echo UrlHelper::getRoot() ?>servicos/edit/<?php echo $item->id ?>" class="btn btn-mini">Editar</a>
								<a href="<?php echo UrlHelper::getRoot() ?>servicos/delete/<?php echo $item->id ?>" id="btn-delete" class="btn btn-danger btn-mini">Apagar</a>
							</div>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
		
	</div>
	<div class="span3">
		<form>
			<fieldset>
			
			<!-- Form Name -->
			<legend>Filtros</legend>
			
			<!-- Text input-->
			<label class="control-label">Nome</label>
			<input id="nome" name="nome" type="text" placeholder="" class="input-large span3">
			
			<div class="form-actions">
				<button type="submit" class="btn btn-success">
					<i class="icon-filter icon-white"></i> Filtrar
				</button>
				<a href="<?php echo UrlHelper::getRoot() ?>clientes" class="btn">
					Limpar filtros
				</a>
			</div>
			</fieldset>
		</form>
	</div>
</div>
<?php $pages = PaginatorHelper::paginate(UrlHelper::getRoot(), 'servicos/paginate/', round($count % RESULTS_PER_PAGE), $page, 5) ?>

<div class="pagination">
	<ul>
	<?php foreach ($pages as $pagi): ?>
		<?php if ($pagi['text'] != $page): ?>
		<li><a href="<?php echo $pagi['url'] ?>"><?php echo $pagi['text'] ?></a></li>
		<?php else: ?>
		<li class="active"><a><?php echo $pagi['text'] ?></a></li>	
    	<?php endif ?>
    <?php endforeach ?>
    </ul>
</div>

<?php else: ?>
	
<div class="well">
	Nenhum registro a ser exibido. <a href="<?php echo UrlHelper::getRoot() ?>servicos/new">Crie o primeiro agora</a>.
</div>

<?php endif ?>
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