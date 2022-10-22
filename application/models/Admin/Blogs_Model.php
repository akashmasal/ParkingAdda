<?php

class Blogs_Model extends CI_Model
{
    public function getAllBlogs()
    {
        $query = $this->db->select("*")
            ->from("tbl_blogs")
            ->where("blog_status", 1)
            ->get()
            ->result();
        if (count($query) > 0) {
            return $query;
        } else {
            return false;
        }
    }

    public function getBlogById($id)
    {
        $query = $this->db->select("*")
            ->from("tbl_blogs")
            ->where("blog_id", $id)
            ->get()
            ->row();
        if ($query) {
            return $query;
        } else {
            return false;
        }
    }

    public function addBlog($data)
    {
        $query = $this->db->insert("tbl_blogs", $data);
        if ($query) {
            return $query;
        } else {
            return false;
        }
    }
}
