<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ouvinte_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('ouvinte_view', $data);
		$this->load->view('template/footer');
	}

	public function cadastrarOuvinte()
	{
		$data['title'] = 'Unicesumar';

		$this->form_validation->config_rules = array();
        $this->form_validation->error_array = array();
        $this->form_validation->set_rules( $this->config->item('ouvinte') );

        if ($this->form_validation->run() == FALSE) {
			
			$this->load->view('template/header', $data);
			$this->load->view('template/menu', $data);
			$this->load->view('cadastrarOuvinte_view', $data);
			$this->load->view('template/footer');
		} else {

			//TODO
		}
	}

	public function editarOuvinte()
	{
		$data['title'] = 'Unicesumar';

		$this->form_validation->config_rules = array();
        $this->form_validation->error_array = array();
        $this->form_validation->set_rules( $this->config->item('ouvinte') );

        if ($this->form_validation->run() == FALSE) {
			
			$this->load->view('template/header', $data);
			$this->load->view('template/menu', $data);
			$this->load->view('cadastrarOuvinte_view', $data);
			$this->load->view('template/footer');
		} else {

			//TODO
		}
	}


}

/* End of file ouvinte_controller.php */
/* Location: ./application/controllers/ouvinte_controller.php */