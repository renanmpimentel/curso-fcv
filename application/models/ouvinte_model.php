<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ouvinte_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function listarTodos()
	{
		$query = $this->db->query('SELECT * FROM ouvinte');

		if ($query->num_rows() > 0)
			return $query->result_array();

		return false;
	}
}

/* End of file ouvinte_model.php */
/* Location: ./application/models/ouvinte_model.php */