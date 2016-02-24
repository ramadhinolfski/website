<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/aside');
		$this->load->view('home');
		$this->load->view('layout/footer');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */