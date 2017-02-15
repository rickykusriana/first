<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['content']	= 'asassss';
		$data['apa']	= 'Test lagi';
        $this->load->view('web', $data);
	}
}
