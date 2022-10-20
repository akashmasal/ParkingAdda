<?php

defined('BASEPATH') or exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET,POST, OPTIONS");

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/Auth_Model");
    }


    public function index()
    {
        if ($this->session->userdata("username") != "") {
            $data['page_title'] = "Dashboard";
            $data['success'] = "Already Logged In";
            $this->session->set_flashdata("success", $data['success']);
            $data['page_load'] = "admin/dashboard";
            $this->load->view("includes/admin/templates", $data);
        } else {
            $data['page_title'] = "login";
            $data['error'] = "You are not logged in, kindly login!!";
            $this->session->set_flashdata("error", $data['error']);
            $this->load->view("admin/login", $data);
        }
    }

    public function login()
    {
        if ($this->session->userdata("username") != "") {
            redirect(base_url("admin/auth/dashboard"));
        } else {
            $this->form_validation->set_rules("username", "Username", "required", array("required" => "%s is required"));
            $this->form_validation->set_rules("password", "Password", "required", array("required" => "%s is required"));

            if ($this->form_validation->run()) {
                $username = $this->security->xss_clean($this->input->post("username"));
                $password = $this->security->xss_clean($this->input->post("password"));

                $login = $this->Auth_Model->login($username, $password);
                if ($login) {
                    $setUserSession = array(
                        "username" => $username
                    );
                    $this->session->set_userdata($setUserSession);
                    $data['success'] = "Login Successfull";
                    $this->session->set_flashdata("success", $data['success']);
                    $this->dashboard();
                } else {
                    $data['error'] = "invalid username or password";
                    $this->session->set_flashdata("error", $data['error']);
                    $data['page_title'] = "Dashboard";
                    $this->load->view("admin/loginview", $data);
                }
            } else {
                $data['error'] = validation_errors();
                $this->session->flashdata("error", $data['error']);
                $this->index();
            }
        }
    }

    public function registerView()
    {
        $data['page_title'] = "register";
        $this->load->view("admin/register", $data);
    }

    public function register()
    {
        $this->form_validation->set_rules("username", "Username", "required", array("required" => "%s is required"));
        $this->form_validation->set_rules("email", "Password", "required", array("required" => "%s is required"));
        $this->form_validation->set_rules("password", "Password", "required", array("required" => "%s is required"));

        if ($this->form_validation->run()) {
            $username = $this->security->xss_clean($this->input->post("username"));
            $email = $this->security->xss_clean($this->input->post("email"));
            $password = $this->security->xss_clean($this->input->post("password"));

            $data = array(
                "username" => $username,
                "email" => $email,
                "password" => $password
            );

            $register = $this->Auth_Model->register($data);
            if ($register) {
                print_r($data);
            } else {
                echo "failed";
            }
        }
    }


    public function logout()
    {
        $this->session->unset_userdata('username');
        redirect(base_url("admin/auth"));
    }

    public function dashboard()
    {
        if ($this->session->userdata("username") != "") {
            $data['page_title'] = "Dashboard";
            $data['page_load'] = "admin/dashboard";
            $this->load->view("includes/admin/template", $data);
        } else {
            $this->index();
        }
    }
}
