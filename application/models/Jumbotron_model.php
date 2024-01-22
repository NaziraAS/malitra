<?php
class Jumbotron_model extends CI_Model
{
	private $_table = 'jumbotron';
	public function __construct()
	{
		parent::__construct();
	}

	public function save($data)
	{
		$this->db->insert($this->_table, $data);
	}

	public function load()
	{
		return $this->db->get($this->_table)->result();
	}
	public function total_rows()
	{
		return $this->db->get($this->_table)->num_rows();
	}
	public function hapus($id, $filename)
	{
		$result = $this->db->delete($this->_table, ['id' => $id]);
		if ($this->db->affected_rows($result)) {
			return true;
		}
		unlink(APPPATH . 'assets/images/jumbotron' . $filename);
	}
}
