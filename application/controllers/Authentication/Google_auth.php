<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Google_login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function login()
	{
		// include_once APPPATH . "libraries/vendor/autoload.php";
		include_once APPPATH . "libraries/vendor/autoload.php";
		$google_client = new Google_Client();
		$google_client->getClientId('393279344071-j8stu8rpg1i9v91ehi1ttqeji652moka.apps.googleusercontent.com');
		$google_client->setClientSecret('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');
		$google_client->setRedirectUri('http://localhost/metronic-template-codeigniter-3/authentication/auth/index');
		$google_client->addScope('email');
		$google_client->addScope('profile');
		if (isset($_GET['codde'])) {
			$token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
			if ($token['error']) {
				$google_client->setAccessToken($token['access_token']);
				$this->session->set_userdata('access_token', $token['access_token']);
				$google_service = new Google_Service();
			}
		}
	}
}
