<?php

class Pages_model extends CI_Model
{

   public function retrieveAdmin($aCredentials){
        
        $this->load->database();

        $query= " SELECT * FROM `user` WHERE pseudo = ?";
        
        if ( ! $query = $this->db->query($query, $aCredentials)){

			$this->load->helper('url');
			$error = $this->db->error(); // Has keys 'code' and 'message';
			redirect('errors/database', 'location', $error['code']);
		}
		else{
		/*  var_dump($this->db->last_query()); 
			die(); */
			return $query->row();
		}

   }

   public function valid_current_password(){
    
    $this->set_error('valid_current_password', 'your error message');
    return false;
    }


} 