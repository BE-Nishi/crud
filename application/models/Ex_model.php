<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ex_model extends CI_Model {

    function __construct()  
    {  
        //call model constructor  
        parent::__construct(); 
        $this->load->database(); 
    }     
          
        function fetchtable()  
        {  
            $query = $this->db->get('contact');  
            return $query;  
        }  
        function addData($formData)  
        {  
              $this->db->insert('contact',$formData);
        }  

        function delete_data($id)  
        {  
             $this->db->where('id', $id);
             $this->db->delete('contact');
        }  
        
        public function fetch_single_data($id)
        {
           $this->db->where('id',$id);
           $query = $this->db->get('contact');
           return $query;
        }

}

?>