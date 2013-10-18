<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Palestrante_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Unicesumar';

		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('palestrante_view', $data);
		$this->load->view('template/footer');
	}

	public function cadastrarPalestrante()
	{
		$data['title'] = 'Unicesumar';

		$this->form_validation->config_rules = array();
        $this->form_validation->error_array = array();
        $this->form_validation->set_rules( $this->config->item('palestrante') );

        if ($this->form_validation->run() == FALSE) {

			$this->load->view('template/header', $data);
			$this->load->view('template/menu', $data);
			$this->load->view('cadastrarPalestrante_view', $data);
			$this->load->view('template/footer');
		} else {
			//TODO
		}
	}

	public function editarPalestrante()
	{
		$data['title'] = 'Unicesumar';

		$this->form_validation->config_rules = array();
        $this->form_validation->error_array = array();
        $this->form_validation->set_rules( $this->config->item('palestrante') );

        if ($this->form_validation->run() == FALSE) {

			$this->load->view('template/header', $data);
			$this->load->view('template/menu', $data);
			$this->load->view('cadastrarPalestrante_view', $data);
			$this->load->view('template/footer');
		} else {
			//TODO
		}
	}

	public function excluirPalestrante()
	{
		//TODO
	}
}

/* End of file palestrante_controller.php */
/* Location: ./application/controllers/palestrante_controller.php */