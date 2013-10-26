<?php

$config = array(
				'login' => 
			  		array(
						    array(
						          'field'   => 'usuario',
						          'label'   => 'usuario', 
						          'rules'   => 'required'
						        ),
						    array(
						          'field'   => 'senha',
						          'label'   => 'senha', 
						          'rules'   => 'required'
						        )
			   			),          
				'lembrar_senha' => 
			  		array(
						    array(
						          'field'   => 'email_lembrarSenha',
						          'label'   => 'email', 
						          'rules'   => 'required|valid_email'
						        )
			   			),
			   	'ouvinte' =>
			   		array(
			   				array(
			   						'field' => 'nome',
			   						'label' => 'nome',
			   						'rules' => 'required'
			   					),
			   				array(
			   						'field' => 'email',
			   						'label' => 'email',
			   						'rules' => 'required|valid_email'
			   					),
			   				array(
			   						'field' => 'cidade',
			   						'label' => 'cidade',
			   						'rules' => 'required'
			   					),
			   				array(
			   						'field' => 'uf',
			   						'label' => 'uf',
			   						'rules' => 'required'
			   					),
			   				array(
			   						'field' => 'contato',
			   						'label' => 'contato',
			   						'rules' => 'required'
			   					),
			   				array(
			   						'field' => 'observacao',
			   						'label' => 'observação',
			   						'rules' => ''
			   					)
			   			)          
				);
