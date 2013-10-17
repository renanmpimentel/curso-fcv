<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Unicesumar";

		$this->load->view('template/header', $data);
		$this->load->view('login_view');
		$this->load->view('template/footer');
	}

	/**
	 * [autenticacao description]
	 * @return boolean 
	 */
	public function autenticacao()
	{
		$this->form_validation->config_rules = array();
        $this->form_validation->error_array = array();
        $this->form_validation->set_rules( $this->config->item('login') );

        if ($this->form_validation->run() == FALSE) {
        	
        	$this->index();
        } else {
        	
        	//TODO
        }
	}

	/**
	 * [sair description]
	 * @return boolean 
	 */
	public function sair()
    {
        $this->session->unset_userdata('sessao_codigoUsuario');
        $this->session->unset_userdata('sessao_emailUsuario');
        redirect(base_url());
        return TRUE;
    }
}

/* End of file login_controller.php */
/* Location: ./application/controllers/login_controller.php */