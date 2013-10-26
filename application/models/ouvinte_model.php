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

	public function buscarOuvinte($id = null)
	{
		if ( $id ) {
			
			$sql = "SELECT nome, email, cidade, estado, telefone, observacao FROM banco.ouvinte WHERE id = ? ";
			$query = $this->db->query($sql, $id);

			return $query->row_array();
		}
	}

	public function cadastrarOuvinte($dadosOuvinte = null)
	{
		if ( $dadosOuvinte ) {
			$sql = "INSERT INTO banco.ouvinte (nome, email, cidade, estado, telefone, observacao) VALUES (?, ?, ?, ?, ?, ?)";
			return $this->db->query($sql, $dadosOuvinte);
		}

		return false;
	}

	public function editarOuvinte($dadosOuvinte = null)
	{
		if ( $dadosOuvinte ) {
			$sql = "UPDATE banco.ouvinte SET nome = ?, email = ?, cidade = ?, estado = ?, telefone = ?, observacao = ?";
			return $this->db->query($sql, $dadosOuvinte);
		}

		return false;
	}

	public function excluirOuvinte($id = null)
	{
		if ( $id ) {
			$sql = "DELETE FROM banco.ouvinte WHERE id = ? ";
			return $this->db->query($sql, $id);
		}

		return false;
	}
}

/* End of file ouvinte_model.php */
/* Location: ./application/models/ouvinte_model.php */