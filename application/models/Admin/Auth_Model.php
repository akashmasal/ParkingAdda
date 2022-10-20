<?php

class Auth_Model extends CI_Model
{
    public function login($username,$password)
    {
        $query = $this->db->select("*")
                          ->from("tbl_users")
                          ->where("username",$username)
                          ->where("password",$password)
                          ->where("status",1)
                          ->get();
        return $query->result();
    }

    public function register($data)
    {
        $query = $this->db->insert("tbl_users",$data);
        if($query !== false){
            return $query;
        }
        else
        {
            return false;
        }
    }
}

?>