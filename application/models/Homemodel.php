<?php

class Homemodel extends CI_Model
{
    public function insert($data)
    {
        $query = $this->db->insert("contactus",$data);
        return true;
    }
    
    public function insert_qr($data)
    {
        $query = $this->db->insert("pa_scanned_qrs",$data);
        return $query;
    }
    
    
    
    
    public function get_places()
    {
        $this->db->select("cpp.id,cpp.placename,cpp.place_address");
        $this->db->from("ci_parking_places as cpp");
        $this->db->where("place_status","1");
        // $this->db->join('ci_price_slab as cps','mpp.id = cps.id');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            
            return $query->result();
        }
        else
        {
            return false;
        }
        
    }
    
    
}

?>