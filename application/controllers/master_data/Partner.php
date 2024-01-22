<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Partner extends CI_Controller
{
	private $_session = "";
	private $image = "";
	public function __construct()
	{
		parent::__construct();
		$this->_session = $this->session->userdata('current_user');
		$this->load->model('partner_model');
	}


	public function save()
	{
		$title = $this->input->post('title');
		$slug = str_replace(" ", "-", $title);
		$data = [
			'title' => $title,
			'image' => $this->image_process(),
			'slug' => $slug
		];
		$this->partner_model->save($data);
		redirect('main/partner');
	}

	public function image_process()
	{
		if (!empty($_FILES['file']['name'])) {
			$x = 1;
			$nama_file               = "image_" . time() . "" . mt_rand() . '' . $x++;
			$config['upload_path']          = FCPATH . 'assets/images/partner';
			$config['allowed_types']        = 'gif|png|jpeg|jpg';
			$config['file_name']     		= $nama_file;
			$config['overwrite']            = true;
			$config['max_size']             = 10024; // 1MB
			// $config['max_width']            = 1080;
			// $config['max_height']           = 1080;

			// $this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('file')) {
				$data['error'] = $this->upload->display_errors();
				echo $data['error'];
			}
			$foto = $nama_file . $this->upload->data('file_ext');
			return $foto;
		}
	}


	public function load()
	{
		$result = $this->partner_model->load();
		echo json_encode($result);
	}

	public function hapus()
	{
		$id = $this->input->post('id');
		$result = $this->partner_model->hapus($id);
		if ($result == true) {
			echo json_encode([
				'status' => 'ok',
				'message' => 'berhasil di hapus'
			]);
		}
	}
}
