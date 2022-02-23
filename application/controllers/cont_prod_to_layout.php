<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cont_prod_to_layout extends CI_Controller {
	public function index()
	{
		$this->load->view('head');
    	$this->load->view('header');
		$this->load->view('view_prod_to_layout');
		$this->load->view('footer');
	}
}