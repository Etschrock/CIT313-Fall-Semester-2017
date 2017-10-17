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
        //setting attributes
        $this->user->userID = "eschrock";
        $this->user->firstname = "Eric";
        $this->user->lastname = "Schrock";
        $this->user->email = "etschrock@umail.iu.edu";
        $this->user->role = "admin";

        //setting the user to data and calling its getname function
        $data = $this->user->getName();
        
        //sends data to view
        $this->load->view("view.php", $data);
    }
}

