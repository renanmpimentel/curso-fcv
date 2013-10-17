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
						          'rules'   => 'required|email'
						        )
			   			)          
				);
