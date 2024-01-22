<?php
class Auth_model extends CI_Model
{
	private $_table = 'auth';
	public function __construct()
	{
		parent::__construct();
	}
	public function register($firstname, $lastname, $email, $password, $picture)
	{
		$data = [
			'first_name' => $firstname,
			'last_name' => $lastname,
			'email' => $email,
			'password' => password_hash($password, PASSWORD_DEFAULT),
			'picture' => ($picture) ? $picture : 'default.jpg',
			'created_at' => Date('Y-m-d H:i:s'),
			'deleted_at' => '',
			'updated_at' => ''
		];
		$this->db->insert($this->_table, $data);
	}
}
