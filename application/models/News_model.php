<?php

class News_model extends CI_Model 
{

    public function __construct()
    {
        parent::__construct();
    }


    public function get_all(){
        
        $this->load->database();

        $query = 'SELECT * FROM `news`';

        $query = $this->db->query($query);

        return $query->result();
    }
}