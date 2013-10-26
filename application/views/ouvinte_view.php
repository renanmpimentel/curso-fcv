<div class="container">

	<a href="<?php echo base_url('ouvinte_controller/cadastrarOuvinte') ?>" class="btn btn-info pull-right" title="Cadastrar"> Cadastrar </a>
	<div class="clearfix"></div>
	<hr />

	<?php 
	echo $this->session->flashdata('aviso');
	
	if ( $ouvintes ): 
	?>
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
					<a href="<?php echo base_url("ouvinte_controller/editarOuvinte/{$ouvinte['id']}") ?>" class="btn" title="Editar"><i class="icon-edit"></i></a> 
					<a href="<?php echo base_url("ouvinte_controller/excluirOuvinte/{$ouvinte['id']}") ?>" class="btn btn-danger" title="Excluir"><i class="icon-trash icon-white"></i></a>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<?php else: ?>
		<div class="alert alert-info text-center"> Nenhum ouvinte cadastrado </div>
	<?php endif ?>
</div>