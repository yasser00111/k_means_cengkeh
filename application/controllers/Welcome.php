<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->model("user_model");
		
	$this->load->model('product_model');
		$this->load->helper('url');
		$this->load->helper('download');
	}

	public function index()
	{
		
redirect(site_url('login'));
	}

	

	
}
