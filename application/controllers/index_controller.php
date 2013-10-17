<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class index_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Unicesumar';

		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('template/footer');
	}

}

/* End of file index_controller.php */
/* Location: ./application/controllers/index_controller.php */