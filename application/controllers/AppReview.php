<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AppReview extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Homemodel");
    }


	
	public function index($id=0){
	        
	        
	        $verifier_id = $id;
	    	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	    	global $user_agent;
	    	$server_ip = $_SERVER['REMOTE_ADDR'];
	        $os = $this->getOS();
	        //$cur_date = date('Y-m-d H:i:s');
	        
	        
	        
	        
	       // $server_ip = $_SERVER['REMOTE_ADDR'];
	       // echo "<pre>";
	       // print_r($server_ip);
	       // echo "<br>";
	       // print_r($os);
	       // echo "<br>";
	       // print_r($verifier_id);
	       // echo "</pre>";
	       // die;
	       
	       
	        if($os=='Android'){
	            
                 header("Location: https://play.google.com/store/apps/details?id=com.stzsoft.parkingaddauser");
                //  header("Location: https://www.parkingadda.com/apk/parkingadda_v12.apk");
                
                $data = array
                (
                    "verifier_id" => $verifier_id,
                    "ip_address" => $server_ip,
                    "device_type"=>$os
                );
                
                $this->Homemodel->insert_qr($data);
                
                
                
                exit();
            }else if($os=='iPhone'){
                header("Location: https://apps.apple.com/in/app/parkingadda/id1601815297");
                $data = array
                (
                    "verifier_id" => $verifier_id,
                    "ip_address" => $server_ip,
                    "device_type"=>$os
                );
                
                $this->Homemodel->insert_qr($data);
                exit();
            }
            
            else if($os=='Mac OS X'){
                header("Location: https://apps.apple.com/in/app/parkingadda/id1601815297");
                $data = array
                (
                    "verifier_id" => $verifier_id,
                    "ip_address" => $server_ip,
                    "device_type"=>$os
                );
                
                $this->Homemodel->insert_qr($data);
                exit();
            }
            
            
            
            
            else{
                 header("Location: https://play.google.com/store/apps/details?id=com.stzsoft.parkingaddauser");
                 $data = array
                (
                    "verifier_id" => $verifier_id,
                    "ip_address" => $server_ip,
                    "device_type"=>$os
                );
                
                $this->Homemodel->insert_qr($data);
                 exit();
            }
	

	}
	
	public  function getOS() { 
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

function getBrowser() {

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

	
	
	
	
}
