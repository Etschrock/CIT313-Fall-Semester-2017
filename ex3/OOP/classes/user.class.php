<?php

abstract class user {
    
    //properties of the user class
    protected $user_id, $user_type, $first_name, $last_name, $email_address, $user_level;
    
    //public construct function
    public function __construct($user_level) {
        $this->user_level = $user_level;
    }
    
    //public set function
    public function __set($name, $value) {
        $this->$name = $value;
        return;
    }

    //public get function
    public function __get($name) {
        return $this->$name;
    }

    //public destruct function
    public function __destruct() {
        
    }
}
