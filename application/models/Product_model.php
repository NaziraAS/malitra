<?php
class Product_model extends CI_Model
{
	private $_table = 'product';
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

	public function edit($id)
	{
		return $this->db->get_where($this->_table, ['id' => $id])->row();
	}
	public function getById($id)
	{
		return $this->db->get_where('product', ['id' => $id])->row();
	}
	public function updateProduct($id, $data)
	{
		$res = $this->db->update('product', $data, ['id' => $id]);
		if ($this->db->affected_rows($res)) {
			return true;
		} else {
			return false;
		}
	}
}
