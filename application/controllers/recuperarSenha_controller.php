<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class recuperarSenha_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if(isset($_POST['lembrar_senha'])) { 

			$this->load->library('email');

			$this->email->from('renan.pimentel@gmail.com', 'Renan Martins Pimentel');
			$this->email->to('renan.pimentel@gmail.com'); 
			// $this->email->cc('another@another-example.com'); 
			// $this->email->bcc('them@their-example.com'); 

			$this->email->subject('Email Teste');
			$this->email->message('Enviando um email pelo CodeIgniter!');	

			$this->email->send();

			echo "<div class='alert alert-success'>A senha foi enviada para seu email.</div>";
			return;
		} 
		
		echo "<div class='alert alert-error'>Houve algum problema, tente novamente!</div>";
		return;
	}

}

/* End of file recuperarSenha_controller.php */
/* Location: ./application/controllers/recuperarSenha_controller.php */