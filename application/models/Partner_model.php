<?php
class Partner_model extends CI_Model
{
	private $_table = 'partners';
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
	public function hapus($id)
	{
		$result = $this->db->delete($this->_table, ['id' => $id]);
		if ($this->db->affected_rows($result)) {
			return true;
		}
	}
}
