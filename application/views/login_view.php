<div class="container">
	<h1> Titulo </h1>
	<hr />
	<div class="row-fluid">
		<div class="span7">
			<p>
				Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , 
				depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, 
				nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. 
				Sapien in monti palavris qui num significa nadis i pareci latim. 
				Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.
			</p>
		</div>

		<div class="span4 pull-right">
			<?php 
			echo form_open('login_controller/autenticacao'); 

			//INPUT USUÁRIO
			echo form_label('', 'usuario');
			echo form_input(array(
									'name'=>'usuario', 
									'class'=>'span12', 
									'value'=> set_value('usuario'),
									'placeholder'=>'Usuário'
								)
							);
			echo form_error('usuario');

			//INPUT SENHA
			echo form_label('', 'senha');
			echo form_password(array(
										'name'=>'senha', 
										'class'=>'span12', 
										'placeholder'=>'Senha'
									)
								);
			echo form_error('senha');

			//BOTAO LOGINrole="button" class="btn" data-toggle="modal"
			echo form_button(array(
									'name' => 'lembrar_senha',
									'type' => 'button',
									'href' => '#lembrar_senha',
									'role' => 'button',
									'class' => 'btn btn-link',
									'content' => 'Esqueci senha',
									'data-toggle' => 'modal'
								)
							);
			echo form_button(array(
									'name' => 'login',
									'type' => 'submit',
									'class' => 'btn btn-primary pull-right',
									'content' => 'Entrar'
								)
							);
			echo form_close();
			?>	
		</div>
	</div>
</div>

<!-- Modal -->
<div id="lembrar_senha" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">Recuperar minha senha</h3>
	</div>
	<div class="modal-body">
		<?php
			echo form_open('', array('id'=>'recuperar-senha'));

			echo form_label('', 'email');
			echo form_input(array(
									'name'=>'lembrar_senha', 
									'class' => 'span5',
									'placeholder'=>'email@email.com.br',
									'required' => 'required'
								)
							);
			echo form_error('email');
		?>

		<div id="resposta-email"></div>
	</div>
	<div class="modal-footer">
		<?php
			echo form_button(array(
									'class' => 'btn',
									'data-dismiss' => 'modal',
									'aria-hidden' => 'true',
									'content' => 'Fechar'
								)
							);

			echo form_button(array(
									'type' => 'submit',
									'class' => 'btn btn-primary',
									'content' => 'Enviar'
								)
							);
			form_close();
		?>
	</div>
</div>