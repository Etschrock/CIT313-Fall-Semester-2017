<?php

class User extends Model {
    
    function __construct() {
        parent::__construct();
    }
    
    public function getName() {

        //returning an array
        return array (
            'userID' => $this->userID,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'role' => $this->role
        );

    }
}

