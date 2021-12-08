<?php defined('BASEPATH') OR exit('No direct script access allowed');




class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("user_model");
		
	$this->load->model('product_model');
	$this->load->helper('url');
		$this->load->helper('download');
        $this->load->library('form_validation');
		require_once APPPATH.'third_party/fpdf/fpdf.php';
        
		$pdf = new FPDF();
		$pdf->AddPage();
		
		$CI =& get_instance();
		$CI->fpdf = $pdf;
     if($this->session->has_userdata('user_logged'))
        {
        
        }
        else{redirect(site_url('login?cek='));}
	}
  public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('login'));
    }

	public function index()
	{
        
        $this->load->view("mahasiswa/overview");
      
	}
}
