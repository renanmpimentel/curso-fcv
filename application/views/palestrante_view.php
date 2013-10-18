<div class="container">
	<?php 
		echo form_open(''); 
		echo form_fieldset('Cadastro');
	?>
	<div class="row-fluid">
		<div class="span6">
			<?php 
				echo form_label('nome', 'nome');
				echo form_input(array(
										'name'=>'nome',
										'class'=>'span12',
										'value'=>set_value('nome'),
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
										'value'=>set_value('email'),
										'placeholder'=>'email@dominio.com.br' 
									)
								);
				echo form_error('email');
			?>
		</div>
	</div>
	
	<div class="row-fluid">
		<div class="span12">
			<?php 
				echo form_label('Titulo', 'titulo');
				echo form_input(array(
										'name'=>'titulo',
										'class'=>'span12',
										'value'=>set_value('titulo'),
										'placeholder'=>'Titulo' 
									)
								);
				echo form_error('titulo');
			?>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span12">
			<?php 
				echo form_label('Resumo', 'resumo');
				echo form_textarea(array(
											'name'=>'resumo',
											'class'=>'span12',
											'rows'=>3,
											'value'=>set_value('resumo'),
											'placeholder'=>'Escreva um resumo sobre sua apresentação'
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