<?php

class Admin extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata("username") == ""){
            redirect(base_url("admin/auth"));
        }
    }

    public function dashboard()
    {
        $data['page_title'] = "Admin Dashboard";
        $data['page_load'] = "admin/dashboard";
        $this->load->view("includes/admin/template",$data);
    }
}


?>