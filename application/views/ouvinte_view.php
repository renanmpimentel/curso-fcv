<div class="container">

	<a href="#" class="btn btn-info pull-right" title="Cadastrar"> Cadastrar </a>
	<div class="clearfix"></div>
	<hr />

	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Nome</th>
				<th>Email</th>
				<th>Telefone</th>
				<th>Cidade/UF</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($ouvintes as $ouvinte): ?>
			<tr>
				<td><?php echo $ouvinte['id'] ?></td>
				<td><?php echo $ouvinte['nome'] ?></td>
				<td><?php echo $ouvinte['email'] ?></td>
				<td><?php echo $ouvinte['telefone'] ?></td>
				<td><?php echo $ouvinte['cidade'] . "/" . $ouvinte['estado'] ?></td>
				<td>
					<a href="#" class="btn" title="Editar"><i class="icon-edit"></i></a> 
					<a href="#" class="btn btn-danger" title="Excluir"><i class="icon-trash icon-white"></i></a>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>