<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/Auth_Model");
    }

    public function index()
    {
        if ($this->session->userdata("username") != '') {
            $data['page_title'] = "Dashboard";
            $data['page_load'] = "admin/dashboard";
            $this->load->view("includes/admin/template", $data);
        } else {
            $data['page_title'] = "login";
            $data['error'] = "You Have Not Logged In, Kindly Do Login......";
            $this->session->set_flashdata("error",$data['error']);
            $this->load->view("admin/login", $data);
        }
    }

    public function login()
    {
        $data['page_title'] = "Login";
        $this->load->view("admin/login", $data);
        // $data['page_load'] = "admin/login";
        // $this->load->view("includes/admin/template", $data);
    }

    public function loginValidation()
    {
        $this->form_validation->set_rules("username", "Username", "required", array("required" => "Please Enter Your Username"));
        $this->form_validation->set_rules("password", "Password", "required", array("required" => "Please Enter Your Password"));

        if ($this->form_validation->run()) {
            $username = $this->security->xss_clean($this->input->post("username"));
            $password = $this->security->xss_clean($this->input->post("password"));

            $checkLogin = $this->Auth_Model->checkLogin($username, $password);
            if ($checkLogin) {
                $setUserSession = array("username" => $username);
                $this->session->set_userdata($setUserSession);
                $data['success'] = "Login Successfull.....!!!";
                $this->session->set_flashdata("success", $data['success']);
                redirect(base_url("dashboard"));
            } else {
                $data['error'] = 'Invalid Email Or Password';
                $this->session->set_flashdata("error", $data['error']);
                redirect(base_url("admin"));
            }
        } else {
            $this->index();
        }
    }

    public function logout()
    {
        $this->session->unset_userdata("username");
        $data['success'] = "logged out successfully....!!";
        $this->session->set_flashdata("success", $data['success']);
        $this->load->view("admin/login", $data);
    }
}
