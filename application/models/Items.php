<?php

Class Items extends CI_Model{
    
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        
    }
    
    public function getItems(){
        
        
        $query = $this->db->get('items');
        return $query->result();
        
    }
}
