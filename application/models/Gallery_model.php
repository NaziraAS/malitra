<?php
class Gallery_model extends CI_Model
{
	private $_table = 'gallery';
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
		$file = $this->db->get_where($this->_table, ['id' => $id])->row();
		$result = $this->db->delete($this->_table, ['id' => $id]);
		if ($this->db->affected_rows($result)) {
			return true;
		}
		unlink('./assets/images/gallery/' . $file->image);
	}
}
