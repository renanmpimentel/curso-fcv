<div class="container">
	<?php 
		echo $this->session->flashdata('aviso');
		
		echo form_open(''); 
		echo form_fieldset('Cadastro Ouvinte');
	?>
	<div class="row-fluid">
		<div class="span6">
			<?php 
				echo form_label('nome', 'nome');
				echo form_input(array(
										'name'=>'nome',
										'class'=>'span12',
										'value'=>set_value('nome', $editar['nome']),
										'placeholder'=>'Nome' 
									)
								);
				echo form_error('nome');
			?>
		</div>
		<div class="span6">
			<?php 
				echo form_label('Email', 'email');
				echo form_input(array(
										'name'=>'email',
										'class'=>'span12',
										'value'=>set_value('email', $editar['email']),
										'placeholder'=>'email@dominio.com.br' 
									)
								);
				echo form_error('email');
			?>
		</div>
	</div>
	
	<div class="row-fluid">
		<div class="span9">
			<?php 
				echo form_label('Cidade', 'cidade');
				echo form_input(array(
										'name'=>'cidade',
										'class'=>'span12',
										'value'=>set_value('cidade', $editar['cidade']),
										'placeholder'=>'Cidade' 
									)
								);
				echo form_error('cidade');
			?>
		</div>

		<div class="span1">
			<?php 
				echo form_label('UF', 'uf');
				echo form_input(array(
										'name'=>'uf',
										'class'=>'span12',
										'value'=>set_value('uf', $editar['estado']),
										'placeholder'=>'UF' 
									)
								);
				echo form_error('uf');
			?>
		</div>

		<div class="span2">
			<?php 
				echo form_label('Contato', 'contato');
				echo form_input(array(
										'name'=>'contato',
										'class'=>'span12',
										'value'=>set_value('contato', $editar['telefone']),
										'placeholder'=>'(00) 0000-0000' 
									)
								);
				echo form_error('contato');
			?>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span12">
			<?php 
				echo form_label('Observações', 'observacao');
				echo form_textarea(array(
											'name'=>'observacao',
											'class'=>'span12',
											'rows'=>3,
											'value'=>set_value('observacao', $editar['observacao']),
											'placeholder'=>'Tem alguma observação para o evento ?'
										)
									);
				echo form_error('resumo');
			?>
		</div>
	</div>

	<div class="form-actions">
		<?php
				echo form_button(array(
										'name' => 'login',
										'type' => 'submit',
										'class' => 'btn btn-primary pull-right',
										'content' => 'Cadastrar'
									)
								);
			?>	
	</div>
	
	<?php
		echo form_fieldset_close(); 
		echo form_close();
	?>
</div>