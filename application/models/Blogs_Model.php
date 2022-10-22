<?php

class Blogs_Model extends CI_Model
{
    public function getAllBlogs($limit,$offset)
    {
        $query = $this->db->select("*")
            ->from("tbl_blogs")
            ->where("blog_status", 1)
            ->limit($limit,$offset)
            ->get()
            ->result_array();
        if ($query) {
            return $query;
        } else {
            return false;
        }
    }

    


    public function getCountOfBlogs()
    {
        $query = $this->db->count_all("tbl_blogs");
        if ($query) {
            return $query;
        } else {
            return false;
        }
    }
}
