<?php

class MembersController extends Controller{

    public $membersObject;

    public function users($uID){

        $this->membersObject = new User();
        $user = $this->membersObject->getUser($uID);
        $this->set('user',$user);

    }

    public function index(){

        $this->membersObject = new User();
        $users = $this->membersObject->getAllUsers();
        $this->set('title', 'The Members View');
        $this->set('users',$users);

    }


}
