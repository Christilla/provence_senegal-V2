<?php

class News_model extends CI_Model 
{

    public function __construct()
    {
        parent::__construct();
    }


    public function get_all(){
        
        $this->load->database();

        $query = 'SELECT * FROM `news` WHERE 1 ORDER BY `id` DESC LIMIT 3';

        $query = $this->db->query($query);

        return $query->result();
    }
}