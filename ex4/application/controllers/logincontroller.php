<?php

class LoginController extends Controller{
	
	protected $userObject;

    public function defaultTask(){

        $this->userObject = new User();
        $this->set('task', 'do_login');

    }

   public function do_login() {

       $this->userObject = new User();

       if ($this->userObject->checkUser($_POST['email'],$_POST['password'])) {

           $userInfo = $this->userObject->getUserFromEmail($_POST['email']);

           $_SESSION['uID'] = $userInfo['uID'];

           header('Location: ' . BASE_URL);

       } else {

           $this->set('error', 'Wrong password or Email combination.');
       }

   }
	
	
}