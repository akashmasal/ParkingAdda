<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // if(empty($this->session->userdata("username"))){
        //     redirect(base_url("admin/auth"));
        // }
        // else{
            $data['page_load'] = "admin/dashboard";
            $this->load->view("includes/admin/template",$data);
        // }
    }
}


?>