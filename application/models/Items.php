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
    
    public function getItembyid($id){
        
        
        $query = $this->db->get_where('items',array('id'=>$id));
        return $query->result();
        
    }
    
    public function getItembyname($name){
        
        
        $query = $this->db->get_where('items',array('name'=>$name));
        return $query->result();
        
    }
}
