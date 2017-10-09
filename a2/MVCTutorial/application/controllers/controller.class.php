<?php

class Controller {
    
    //load and model attributes
    public $load;
    public $model;
    
    //construct
    function __construct() {
        //instantiates new load and model, also calls home function
        $this->load = new Load();
        $this->user = new User();
        $this->home();
        
    }
    
    //display home page
    function home() {
        //grabbing data from model
        $data = $this->user->getName();
        
        //sends data to view
        $this->load->view("view.php", $data);
    }
}

