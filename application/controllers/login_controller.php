<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ( $this->session->userdata('usuario') ) {
			redirect('/index_controller/');
		}

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
		$this->load->model('usuario_model');

		$this->form_validation->config_rules = array();
        $this->form_validation->error_array = array();
        $this->form_validation->set_rules( $this->config->item('login') );

        if ($this->form_validation->run() == FALSE) {
        	
        	$this->index();
        } else {
        	
			$data['usuario'] = $this->usuario_model->buscarUsuario(
																	$this->input->post('usuario'), 
																	sha1($this->input->post('senha')) 
																);

			if ( $data['usuario'] ) {

				$this->session->set_userdata($data['usuario'], 'conectado');
				redirect('/index_controller/');
			}
        }
	}

	/**
	 * [sair description]
	 * @return boolean 
	 */
	public function sair()
    {
        $this->session->unset_userdata('usuario');
        $this->session->unset_userdata('senha');
        redirect(base_url());

        return TRUE;
    }
}

/* End of file login_controller.php */
/* Location: ./application/controllers/login_controller.php */