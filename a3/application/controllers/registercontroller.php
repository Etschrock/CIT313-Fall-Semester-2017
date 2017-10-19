<?php

class RegisterController extends Controller{

    public $registerObject;

    public function defaultTask(){

        $this->registerObject = new User();
        $this->set('task', 'add');


    }

    public function add(){

        $this->registerObject = new User();

        $data = array('first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name'],'email'=>$_POST['email'], 'password'=>$_POST['password']);


        $result = $this->registerObject->addUser($data);

        $this->set('message', $result);


    }
 /*
    public function edit($pID){

        $this->postObject = new Post();

        $post = $this->postObject->getPost($pID);

        $this->set('pID', $post['pID']);
        $this->set('title', $post['title']);
        $this->set('content', $post['content']);
        $this->set('category', $post['categoryID']);
        $this->set('date', $post['date']);
        $this->set('task', 'update');


    }
*/

}
