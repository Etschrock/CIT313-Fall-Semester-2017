<?php

class User extends Model {
    
    function __construct() {
        parent::__construct();
    }
    
    public function getName() {
        
        return array(
            'firstname' => 'Eric',
            'lastname' => 'Schrock',
            'userID' => 'eschrock',
            'email' => 'etschrock@yahoo.com',
            'role' => 'admin'
            
        );
    }
}

