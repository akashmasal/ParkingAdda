<?php

class Blogs extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Blogs_Model");
        $this->load->library('pagination');
    }

    public function index()
    {
        
        $config['base_url'] = 'http://localhost/PA/blogs/';
        $config['per_page'] = 3;
        $config['total_rows'] = $this->Blogs_Model->getCountOfBlogs();
        $this->pagination->initialize($config);
        $data['getAllBlogs'] = $this->Blogs_Model->getAllBlogs($config['per_page'],$this->uri->segment(3));
        $data['main_content'] = "main/blogs";
        $this->load->view("includes/template", $data);
    }
}
