<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ouvinte_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Unicesumar';

		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('ouvinte_view', $data);
		$this->load->view('template/footer');
	}

}

/* End of file ouvinte_controller.php */
/* Location: ./application/controllers/ouvinte_controller.php */