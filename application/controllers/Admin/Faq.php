<?php

class Faq extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/Faq_Model");
    }
    public function getAllFaqs()
    {
        $data['getAllFaqs'] = $this->Faq_Model->getAllFaqs();
        $data['page_title'] = "Dashboard";
        $data['page_load'] = "admin/faqs";
        $this->load->view("includes/admin/template", $data);
    }

    public function addFaqView()
    {
        // $data['getAllFaqs'] = $this->Faq_Model->getAllFaqs();
        $data['page_title'] = "Add Faq";
        $data['page_load'] = "admin/Add_Faq";
        $this->load->view("includes/admin/template", $data);
    }

    public function addFaq()
    {
        $this->form_validation->set_rules("faq_title", "Faq Title", "required", array("required" => "%s is required"));
        $this->form_validation->set_rules("faq_content", "Faq Content", "required", array("required" => "%s is required"));
        $this->form_validation->set_rules("faq_status", "Faq Status", "required", array("required" => "%s is required"));

        if ($this->form_validation->run()) {
            $faq_title = $this->security->xss_clean($this->input->post("faq_title"));
            $faq_content = $this->security->xss_clean($this->input->post("faq_content"));
            $faq_status = $this->security->xss_clean($this->input->post("faq_status"));

            $data = array(
                "faq_title" => $faq_title,
                "faq_content" => $faq_content,
                "faq_status" => $faq_status

            );

            // echo '<pre>';
            // print_r($data);
            // die;
                $addFaq = $this->Faq_Model->addFaq($data);
                if ($addFaq) {
                    $data['success'] = "Faq Added Successfully...!!";
                    $this->session->set_flashdata("success", $data['success']);
                    $this->addFaqView();
                } else {
                    $data['error'] = "Failed To Add Blog";
                    $this->session->set_flashdata("error", $data['error']);
                    $this->addFaqView();
                }
            } else {
            $this->addFaqView();
        }
    }
}
