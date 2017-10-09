<?php

abstract class Model {
    //private attributes
    private $userID, $firstname, $lastname, $email, $role;
    
    //construct
    public function __construct() {
        //will do something with later
        
    }
    
    //set method
    public  function __set($name, $value) {
        $this->$name = $value;
        return;
    }
    
    //get method
    public function __get($name) {
        return $this->$name;
    }
   
    //destruct method
    public function __destruct() {
        
    }
}

