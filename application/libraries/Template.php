<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Template
{
	private $CI;
	public function __construct()
	{
		$this->CI = &get_instance();
	}
	public function view($directory, $data = null, $return_html = false)
	{
		$data['content'] = $directory;
		$view_data = (empty($data) ? $data : $data);
		$view_html = $this->CI->load->view('templates/home', $view_data, $return_html);
		if ($return_html) return $view_html;
	}
}
