<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ouvinte_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if(!$this->session->userdata('usuario'))
			redirect('/');
		
		$this->load->model('ouvinte_model');
	}

	public function index()
	{
		$data['title'] = 'FCV - Curso de Codeigniter com Twitter Bootstrap';

		$data['ouvintes'] = $this->ouvinte_model->listarTodos();
		
		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('ouvinte_view', $data);
		$this->load->view('template/footer');
	}

	public function cadastrarOuvinte()
	{
		$data['title'] = 'FCV - Curso de Codeigniter com Twitter Bootstrap';

		$this->form_validation->config_rules = array();
        $this->form_validation->error_array = array();
        $this->form_validation->set_rules( $this->config->item('ouvinte') );

        if (!$this->form_validation->run()) {
			
			$this->load->view('template/header', $data);
			$this->load->view('template/menu', $data);
			$this->load->view('cadastrarOuvinte_view');
			$this->load->view('template/footer');
		} else {

			$inserirOuvinte = $this->ouvinte_model->cadastrarOuvinte($this->input->post());

			if( $inserirOuvinte ) { 
				$this->session->set_flashdata('aviso',"O ouvinte <b>{$this->input->post('nome')}</b> foi cadastrado com sucesso!");
				redirect('/ouvinte_controller');
			}
		}
	}

	public function editarOuvinte( $id = null )
	{
		$data['title'] = 'FCV - Curso de Codeigniter com Twitter Bootstrap';

		$this->form_validation->config_rules = array();
        $this->form_validation->error_array = array();
        $this->form_validation->set_rules( $this->config->item('ouvinte') );

        if (!$this->form_validation->run()) {

        	$data['editar'] = $this->ouvinte_model->buscarOuvinte($id);
			
			$this->load->view('template/header', $data);
			$this->load->view('template/menu', $data);
			$this->load->view('editarOuvinte_view', $data);
			$this->load->view('template/footer');
		} else {

			$atualizarOuvinte = $this->ouvinte_model->editarOuvinte($this->input->post());

			if( $atualizarOuvinte ) {
				$this->session->set_flashdata('aviso', "Ouvinte atualizado com sucesso!");
				redirect("/ouvinte_controller/editarOuvinte/{$id}");
			}
		}
	}

	public function excluirOuvinte($id = null)
	{
		$data['excluir'] = $this->ouvinte_model->excluirOuvinte($id);
		
		if ($data['excluir']) {
			
			$this->session->set_flashdata('aviso',"O registro <b>{$id}</b> foi excluido com sucesso!");
			redirect('/ouvinte_controller');
		}

		return false;
	}


}

/* End of file ouvinte_controller.php */
/* Location: ./application/controllers/ouvinte_controller.php */