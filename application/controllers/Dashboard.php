<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
            $data['title']  = 'Ini Dashboard';
            $this->load->view('web', $data);
	}
}
