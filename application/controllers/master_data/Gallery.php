<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{
	private $_session = "";
	public function __construct()
	{
		parent::__construct();
		$this->_session = $this->session->userdata('current_user');
		$this->load->model('gallery_model');
	}

	public function image_process()
	{
		if (!empty($_FILES['file']['name'])) {
			$x = 1;
			$nama_file               = "image_" . time() . "" . mt_rand() . '' . $x++;
			$config['upload_path']          = FCPATH . 'assets/images/gallery';
			$config['allowed_types']        = 'gif|jpg|jpeg|png';
			$config['file_name']     		= $nama_file;
			$config['overwrite']            = true;
			$config['max_size']             = 1024; // 1MB
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
	public function save()
	{

		// $title = $this->input->post('title');
		// $slug = str_replace(" ", "-", $title);
		$data = [
			// 'title' => $title,
			'image' => $this->image_process(),
			// 'slug' => $slug
		];
		// echo json_encode($data);
		$this->gallery_model->save($data);
		redirect('main/gallery');
	}
	public function load()
	{
		$result = $this->gallery_model->load();
		echo json_encode($result);
	}
	public function hapus()
	{
		$id = $this->input->post('id');
		$result = $this->gallery_model->hapus($id);
		if ($result == true) {
			echo json_encode([
				'status' => 'ok',
				'message' => 'berhasil di hapus'
			]);
		}
	}
}
