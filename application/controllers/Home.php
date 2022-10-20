<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function __construct(){
        parent::__construct();
        $this->load->library("session");
        $this->load->model("Homemodel");
        $this->load->library("form_validation");
    }

    public function index(){
        $data['main_content'] = "main/home";
        $this->load->view('includes/template', $data);
    }

    public function aboutus(){
        $data['main_content'] = "main/aboutus";
        $this->load->view('includes/template', $data);
    }

    public function findaparkingslot(){
        $data['main_content'] = "main/findaparkingslot";
        $this->load->view('includes/template', $data);
    }

    public function rentandearn(){
        $data['main_content'] = "main/rentandearn";
        $this->load->view('includes/template', $data);
    }



    public function ourplaces(){

        $data['main_content'] = "main/ourplaces";
        $this->load->model("Homemodel");
        $data["get_places"] = $this->Homemodel->get_places();
        $this->load->view('includes/template', $data);
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // die;

    }


    // public function pp()
    // {
    //     $data['main_content'] = "main/ourplaces";
    //     $this->load->model("Homemodel");
    //     $data["get_places"] = $this->Homemodel->get_places();
    //     $this->load->view('includes/template', $data);
    //     echo "<pre>";
    //     print_r($data);
    //     echo "</pre>";
    //     die;   
    // }



    public function places_list()
    {
        $this->load->model("Homemodel");
        $data["get_places"] = $this->Homemodel->get_places();
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        die;
    }



    // public function blogs()

    // {

    //     $data['main_content'] = "main/blogs";

    //     $this->load->view('includes/template', $data);
    // }



    public function contactus()

    {

        $data['main_content'] = "main/contactus";

        $this->load->view('includes/template', $data);
    }



    public function faq()

    {

        $data['main_content'] = "main/faq";

        $this->load->view('includes/template', $data);
    }



    public function privacypolicy()

    {

        $data['main_content'] = "main/privacypolicy";

        $this->load->view('includes/template', $data);
    }



    public function termsofuse()

    {

        $data['main_content'] = "main/termsofuse";

        $this->load->view('includes/template', $data);
    }

    public function downloads()

    {



        $user_agent = $_SERVER['HTTP_USER_AGENT'];

        global $user_agent;

        $os = $this->getOS();

        if ($os == 'Android') {

            header("Location: https://play.google.com/store/apps/details?id=com.stzsoft.parkingaddauser");

            //  header("Location: https://www.parkingadda.com/apk/parkingadda_v12.apk");





            exit();
        } else if ($os == 'iPhone') {

            header("Location: https://apps.apple.com/in/app/parkingadda/id1601815297");

            exit();
        } else {

            header("Location: https://play.google.com/store/apps/details?id=com.stzsoft.parkingaddauser");

            exit();
        }
    }

    public  function getOS()

    {

        $user_agent = $_SERVER['HTTP_USER_AGENT'];



        $os_platform  = "Unknown OS Platform";

        $os_array     = array(

            '/windows nt 10/i'      =>  'Windows 10',

            '/windows nt 6.3/i'     =>  'Windows 8.1',

            '/windows nt 6.2/i'     =>  'Windows 8',

            '/windows nt 6.1/i'     =>  'Windows 7',

            '/windows nt 6.0/i'     =>  'Windows Vista',

            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',

            '/windows nt 5.1/i'     =>  'Windows XP',

            '/windows xp/i'         =>  'Windows XP',

            '/windows nt 5.0/i'     =>  'Windows 2000',

            '/windows me/i'         =>  'Windows ME',

            '/win98/i'              =>  'Windows 98',

            '/win95/i'              =>  'Windows 95',

            '/win16/i'              =>  'Windows 3.11',

            '/macintosh|mac os x/i' =>  'Mac OS X',

            '/mac_powerpc/i'        =>  'Mac OS 9',

            '/linux/i'              =>  'Linux',

            '/ubuntu/i'             =>  'Ubuntu',

            '/iphone/i'             =>  'iPhone',

            '/ipod/i'               =>  'iPod',

            '/ipad/i'               =>  'iPad',

            '/android/i'            =>  'Android',

            '/blackberry/i'         =>  'BlackBerry',

            '/webos/i'              =>  'Mobile'

        );

        foreach ($os_array as $regex => $value)

            if (preg_match($regex, $user_agent))

                $os_platform = $value;



        return $os_platform;
    }

    function getBrowser()

    {



        global $user_agent;



        $browser        = "Unknown Browser";



        $browser_array = array(

            '/msie/i'      => 'Internet Explorer',

            '/firefox/i'   => 'Firefox',

            '/safari/i'    => 'Safari',

            '/chrome/i'    => 'Chrome',

            '/edge/i'      => 'Edge',

            '/opera/i'     => 'Opera',

            '/netscape/i'  => 'Netscape',

            '/maxthon/i'   => 'Maxthon',

            '/konqueror/i' => 'Konqueror',

            '/mobile/i'    => 'Handheld Browser'

        );



        foreach ($browser_array as $regex => $value)

            if (preg_match($regex, $user_agent))

                $browser = $value;



        return $browser;
    }

    public function send()
    {
        $this->form_validation->set_rules("name", "name", "required");
        $this->form_validation->set_rules("email", "email", "required");
        $this->form_validation->set_rules("phone", "phone", "required");
        $this->form_validation->set_rules("companyname", "companyname", "required");
        $this->form_validation->set_rules("subject", "subject", "required");
        $this->form_validation->set_rules("message", "message", "required");


        if ($this->form_validation->run()) {
            $name = $this->input->post("name");
            $email = $this->input->post("email");
            $phone = $this->input->post("phone");
            $companyname = $this->input->post("companyname");
            $subject = $this->input->post("subject");
            $message = $this->input->post("message");

            $data = array(
                "name" => $name,
                "email" => $email,
                "phone" => $phone,
                "companyname" => $companyname,
                "subject" => $subject,
                "message" => $message
            );
            $add = $this->Homemodel->insert($data);
            if ($add) {
                $config = array(
                    'protocol' => 'smtp',
                    // 'smtp_host' => 'ssl://smtp.googlemail.com',
                    'smtp_host' => 'ssl://smtp.zoho.com',
                    'smtp_port' => 465,
                    'smtp_user' => 'akash.m@stzsoft.com', // change it to yours
                    'smtp_pass' => 'Bond@#213786.', // change it to yours
                    'mailtype' => 'html',
                    'charset' => 'iso-8859-1',
                    'wordwrap' => TRUE
                );


                $this->load->library('email', $config);
                $this->email->set_newline("\r\n");
                $this->email->set_mailtype("html");
                $this->email->from('akash.m@stzsoft.com'); // change it to yours
                // $list = array('mail participants');
                $this->email->to($email); // change it to yours
                $this->email->subject('Career Recruitment');
                $this->email->message("<h1>Hello, $name</h1>");
                if ($this->email->send()) {
                    echo 'Email sent.';
                } else {
                    show_error($this->email->print_debugger());
                }
                $this->session->set_flashdata('success', 'Your Form Has Been Submitted Successfully!! we will reach you soon via email');
                redirect(base_url('home/contactus'));
            } else {
                $this->session->set_flashdata("error", "Oops!! Something Went Wrong..");
                redirect(base_url("home/contactus"));
            }
        } else {
            $data = array(
                "error" => validation_errors()
            );
            $this->session->set_flashdata("error", $data['error']);
            redirect(base_url("home/contactus"));
        }
    }
}
