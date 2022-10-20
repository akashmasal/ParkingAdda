<?php

class Blog extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/Blogs_Model");
    }
    public function getAllBlogs()
    {
        $data['getAllBlogs'] = $this->Blogs_Model->getAllBlogs();
        $data['page_title'] = "Dashboard";
        $data['page_load'] = "admin/blogs";
        $this->load->view("includes/admin/template", $data);
    }

    public function addBlogView()
    {
        $data['getAllBlogs'] = $this->Blogs_Model->getAllBlogs();
        $data['page_title'] = "Add Blog";
        $data['page_load'] = "admin/Add_Blog";
        $this->load->view("includes/admin/template", $data);
    }

    public function addBlog()
    {
        $this->form_validation->set_rules("blog_title", "Blog Title", "required", array("required" => "%s is required"));
        $this->form_validation->set_rules("blog_short_description", "Blog Short Description", "required", array("required" => "%s is required"));
        $this->form_validation->set_rules("blog_content", "Blog Content", "required", array("required" => "%s is required"));
        $this->form_validation->set_rules("blog_status", "Blog Status", "required", array("required" => "%s is required"));
        $this->form_validation->set_rules("blog_category", "Blog Category", "required", array("required" => "%s is required"));

        if ($this->form_validation->run()) {
            $blog_title = $this->security->xss_clean($this->input->post("blog_title"));
            $blog_short_description = $this->security->xss_clean($this->input->post("blog_short_description"));
            $blog_content = $this->security->xss_clean($this->input->post("blog_content"));
            $blog_status = $this->security->xss_clean($this->input->post("blog_status"));
            $blog_category = $this->security->xss_clean($this->input->post("blog_category"));


            $config['upload_path']          = 'assets/uploads/';
            $config['allowed_types']        = 'gif|jpg|png|webp';
            $config['max_size']             = 2048;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('blog_image')) {
                $data['error'] = $this->upload->display_errors();
                $this->session->set_flashdata("error", $data['error']);
                $data['page_title'] = "Add Blog";
                $data['page_load'] = "admin/Add_Blog";
                $this->load->view("includes/admin/template", $data);
            } else {
                $file = array('upload_data' => $this->upload->data());
                $data = array(
                    "blog_title" => $blog_title,
                    "blog_image" => $config['upload_path'] . $file["upload_data"]['file_name'],
                    "blog_short_description" => $blog_short_description,
                    "blog_content" => $blog_content,
                    "blog_status" => $blog_status,
                    "blog_category" => $blog_category,
                    "blog_created_date" => date("d-m-y")
                );

                $addBlog = $this->Blogs_Model->addBlog($data);
                if ($addBlog) {
                    $data['success'] = "Blog Added Successfully...!!";
                    $this->session->set_flashdata("success", $data['success']);
                    $this->addBlogView();
                } else {
                    $data['error'] = "Failed To Add Blog";
                    $this->session->set_flashdata("error", $data['error']);
                    $this->addBlogView();
                }
            }
        } else {
            // $data['error'] = validation_errors();
            // $this->session->set_flashdata("error", $data['error']);
            $this->addBlogView();
        }
    }
}
