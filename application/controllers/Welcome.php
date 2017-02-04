<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['haha'] = 'commit kedua';
		$this->load->view('welcome_message', $data);
	}
}
