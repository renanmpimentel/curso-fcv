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

	public function listarPalestrantes()
	{
		$data['title'] = 'Unicesumar';

		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('template/footer');
	}

	public function cadastrarPalestrante()
	{
		$data['title'] = 'Unicesumar';

		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('template/footer');
	}

	public function editarPalestrante()
	{
		$data['title'] = 'Unicesumar';

		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('template/footer');
	}

	public function excluirPalestrante()
	{
		$data['title'] = 'Unicesumar';

		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('template/footer');
	}
}

/* End of file palestrante_controller.php */
/* Location: ./application/controllers/palestrante_controller.php */