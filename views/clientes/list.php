<?php include UrlHelper::getHeaderPath(); ?>

<ul class="breadcrumb">
  <li><a href="<?php echo UrlHelper::getRoot() ?>">Início</a> <span class="divider">/</span></li>
  <li class="active">Clientes</li>
</ul>

<h3>Clientes</h3>

<?php if ($count > 0): ?>
	
<a href="<?php echo UrlHelper::getRoot() ?>clientes/new">Novo cliente</a>
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
					<th>
						Cidade
					</th>
					<th>
						E-mail
					</th>
					<th>
						Telefone
					</th>
					<th>
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
							<a href="<?php echo UrlHelper::getRoot() ?>clientes/<?php echo $item->id ?>"><?php echo $item->nome ?></a>
						</td>
						<td>
							<?php if ($item->cidade != ""): ?>
							<?php echo $item->cidade . " - " . $item->estado ?>
							<?php endif ?>
						</td>
						<td>
							<?php echo $item->email ?>
						</td>
						<td>
							<?php echo $item->telefone ?>
						</td>
						<td>
							<div class="btn-group pull-right">
								<a href="<?php echo UrlHelper::getRoot() ?>clientes/edit/<?php echo $item->id ?>" class="btn btn-mini">Editar</a>
								<a href="<?php echo UrlHelper::getRoot() ?>clientes/delete/<?php echo $item->id ?>" id="btn-delete" class="btn btn-danger btn-mini">Apagar</a>
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
			
			<!-- Text input-->
			<label class="control-label">Cidade</label>
			<input id="cidade" name="cidade" type="text" placeholder="" class="input-large span3">
			
			<!-- Select Basic -->
			<label class="control-label">Estado</label>
			<select id="estado" name="estado" class="input-large span3">
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
			
			<div class="form-actions">
				<button type="submit" class="btn btn-success">
					Filtrar
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
	Nenhum registro a ser exibido. <a href="<?php echo UrlHelper::getRoot() ?>clientes/new">Crie o primeiro agora</a>.
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
		$('#menu-clientes').parent().addClass('active')		
	})
</script>

<?php include UrlHelper::getFooterPath(); ?>