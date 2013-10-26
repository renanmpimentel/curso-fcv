<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();	
	}

	public function buscarUsuario($usuario = null, $senha = null)
	{
		if ($usuario && $senha) {

			$sql = "SELECT usuario, senha FROM usuario WHERE usuario = ? and senha = ? ";
			$query = $this->db->query($sql, array($usuario, $senha));
			
			return $query->row_array();
		}

		return false;
	}

}

/* End of file usuario_model.php */
/* Location: ./application/models/usuario_model.php */