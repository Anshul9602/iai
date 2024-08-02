<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compliance extends CI_Controller {

	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('blog');
		$this->load->view('footer');
		
	}
}
