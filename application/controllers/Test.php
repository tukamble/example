<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller 
{

    public function index()
    {
        $this->load->model("Items");
        
        
        $data['items'] = $this->Items->getItems();
        //echo "<pre>";print_r($data);//die;
        $this->load->view('welcome_message',$data);
    }
}
