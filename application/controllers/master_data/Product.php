<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
	private $_session = "";
	public function __construct()
	{
		parent::__construct();
		$this->_session = $this->session->userdata('current_user');
		$this->load->model('product_model');
	}

	public function image_process()
	{
		if (!empty($_FILES['file']['name'])) {
			$x = 1;
			$nama_file               = "image_" . time() . "" . mt_rand() . '' . $x++;
			$config['upload_path']          = FCPATH . 'assets/images/product';
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

		$title = $this->input->post('title');
		$position = $this->input->post('position');
		$description = $this->input->post('description');
		$shortdescription = $this->input->post('shortdescription');
		$slug = str_replace(" ", "-", $title);
		$data = [
			'title' => $title,
			'image' => $this->image_process(),
			'slug' => $slug,
			'position' => $position,
			'description' => $description,
			'shortdescription' => $shortdescription,
		];
		$this->product_model->save($data);
		redirect('main/product');
	}

	public function load()
	{
		$result = $this->product_model->load();
		echo json_encode($result);
	}
	public function hapus()
	{
		$id = $this->input->post('id');
		$result = $this->product_model->hapus($id);
		if ($result == true) {
			echo json_encode([
				'status' => 'ok',
				'message' => 'berhasil di hapus'
			]);
		}
	}

	public function edit()
	{
		$id = $this->input->post('id');
		echo json_encode($this->product_model->edit($id));
	}

	public function image_process_edit()
	{
		if (!empty($_FILES['fileEdit']['name'])) {
			$x = 1;
			$nama_file               = "image_" . time() . "" . mt_rand() . '' . $x++;
			$config['upload_path']          = FCPATH . 'assets/images/product';
			$config['allowed_types']        = 'gif|jpg|jpeg|png';
			$config['file_name']     		= $nama_file;
			$config['overwrite']            = true;
			$config['max_size']             = 1024; // 1MB
			// $config['max_width']            = 1080;
			// $config['max_height']           = 1080;

			// $this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('fileEdit')) {
				$data['error'] = $this->upload->display_errors();
				echo $data['error'];
			}
			$foto = $nama_file . $this->upload->data('file_ext');
			return $foto;
		}
	}

	public function update()
	{
		$id = $this->input->post('id');
		$title = $this->input->post('titleEdit');
		$position = $this->input->post('positionEdit');
		$shortdescription = $this->input->post('shortdescriptionEdit');
		$description = $this->input->post('descriptionEdit');
		$slug = str_replace(" ", "-", $title);

		if ($_FILES['fileEdit']['name']) {
			$image = $this->image_process_edit();
		} else {
			$image = $this->input->post('gambarLama');
		}

		$data = [
			'title' => $title,
			'image' => $image,
			'slug' => $slug,
			'position' => $position,
			'description' => $description,
			'shortdescription' => $shortdescription
		];

		$result = $this->product_model->updateProduct($id, $data);
		if ($result == true) {
			redirect('main/product');
		}
	}
}
