<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cont_prod_option extends CI_Controller {
	public function index()
	{
		$this->load->view('head');
    	$this->load->view('header');
		$this->load->view('view_prod_option');
		$this->load->view('footer');
	}
}