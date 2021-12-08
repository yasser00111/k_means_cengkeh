<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->model("product_model");
        $this->load->library('form_validation');
        // $this->output->enable_profiler(TRUE);
    }

    public function index()
    { 
        $this->session->unset_userdata('user_logged');
        $data['cek']="";
        if ($this->input->get('username')) {
            $user = $this->input->get('username');
            $pass = $this->input->get('password');
            $cek=$this->product_model->getUser($user,$pass)->row();
            
            if ($cek > 0   ) {
                 $this->session->set_userdata(['user_logged' => TRUE ]);
                if ($user !== "admin") {
                 redirect(site_url('normal/overview?id='.$pass));
                }
                else{
                     
                    redirect(site_url('admin/overview')); 
                    }
                }
               
               
            
             else{
                $data['cek']="gagal";
             
             }   
               
        }
   
        $this->load->view("login",$data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('login'));
    }

   
}
