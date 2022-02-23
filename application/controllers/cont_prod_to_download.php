<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cont_prod_to_download extends CI_Controller {
	public function index()
	{
		$this->load->view('head');
    	$this->load->view('header');
		$this->load->view('view_prod_to_download');
		$this->load->view('footer');
	}
}