<?php

class About extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
       $data['main_content'] = "main/aboutus";
       $this->load->view('includes/template', $data);         
    }
}



?>