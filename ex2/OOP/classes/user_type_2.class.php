<?php

class user_type_2 extends user {
    
    //public construct function
    public function __construct($user_level,$user_id) {
        parent::__construct($user_level);
        $this->user_id = $user_id;
        $this->user_type = 2;
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
