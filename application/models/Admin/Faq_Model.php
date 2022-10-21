<?php

class Faq_Model extends CI_Model{

    public function getAllFaqs()
    {
        $query = $this->db->select("*")
                          ->from("tbl_faqs")
                          ->where("status",1)
                          ->get()
                          ->result_array();
        if(mysqli_num_rows($query)>0){
            return $query;
        }
        else{
            return false;
        }
    }

    public function addFaq($data)
    {
        $query = $this->db->insert("tbl_faqs",$data);
        if($query){
            return $query;
        } else {
            return false;
        }
    }


    
}

?>