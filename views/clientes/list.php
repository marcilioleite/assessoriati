<?php include UrlHelper::getHeaderPath(); ?>

<h3>Clientes</h3>

<a href="clientes/new">Novo cliente</a>

<table class="table">
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
					<?php echo $item->nome ?>
				</td>
				<td>
					<?php echo $item->cidade ?>
				</td>
				<td>
					<?php echo $item->telefone ?>
				</td>
				<td>
					<div class="btn-group">
						<a href="<?php echo $item->id ?>" class="btn btn-mini">Ver</a>
						<a href="edit/<?php echo $item->id ?>" class="btn btn-mini">Editar</a>
						<button onclick="javascript:del(<?php echo $item->id ?>)" class="btn btn-danger btn-mini">Apagar</button>
					</div>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>

<div class="pagination">
	<ul>
		<li><a href="#">Anteriores</a></li>
		<li><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">5</a></li>
		<li><a href="#">Próximos</a></li>
	</ul>
</div>

<script>
	function del(id) {
		$.ajax({
			url: 'clientes/delete/'+id,
			statusCode: {
				200: function() {
					$("#row-"+id).remove()
				},
				404: function() {
					alert("Não foi possível remover")
				}
			}
		})
	}
</script>
<?php include UrlHelper::getFooterPath(); ?>