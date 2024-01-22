<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
	}
	public function index()
	{
		if ($this->session->userdata('current_user')) {
			redirect('main/dashboard');
		} else {
			$this->load->view('templates/header');
			$this->load->view('auth/sign-in');
		}
	}
	public function forgot_password()
	{
		$this->load->view('templates/header');
		$this->load->view('auth/password-reset');
	}
	public function register()
	{
		$this->load->view('templates/header');
		$this->load->view('auth/sign-up');
	}
	public function signup()
	{
		$firstname = $this->input->post('firstname', true);
		$lastname = $this->input->post('lastname', true);
		$email = $this->input->post('email', true);
		$password = $this->input->post('password', true);

		$this->db->trans_begin();

		$this->Auth_model->register($firstname, $lastname, $email, $password, $picture = "");

		if ($this->db->trans_status() === FALSE) {
			$result = json_encode([
				'message' => 'failed',
			]);
			$this->db->trans_rollback();
		} else {
			$result = json_encode([
				'message' => 'success',
			]);
			$this->db->trans_commit();
		}
		echo $result;
	}

	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$row = $this->db->get_where('auth', ['email' => $email])->row();
		if ($row) {
			if ($row->email) {
				if (password_verify($password, $row->password)) {
					echo json_encode([
						'status' => 'success',
					]);
					$this->session->set_userdata('current_user', $row->email);
					// $sess = [
					// 	'current_user' => $row->first_name,
					// 	'email' => $row->email
					// ];
				} else {
					echo json_encode([
						'status' => 'failed',
					]);
				}
			} else {
				echo json_encode([
					'status' => 'failed',
				]);
			}
		} else {
			echo json_encode([
				'status' => 'reject',
			]);
		}
	}
	public function success()
	{
		// $this->load->view();
	}
	public function logout()
	{
		$this->session->unset_userdata('current_user');
		redirect('main');
	}
}
