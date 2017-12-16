<?php

class BlogController extends Controller{

    public $postObject;
    public $commentsObject;

    public function post($pID){

        $this->postObject = new Post();
        $post = $this->postObject->getPost($pID);
        $this->set('post',$post);

    }

    public function index(){

        $this->postObject = new Post();
        $posts = $this->postObject->getAllPosts();
        $this->set('title', 'The Default Blog View');
        $this->set('posts',$posts);

    }

    public function addComment() {
        $this->commentsObject = new Comments();

        $data = array('uID'=>$_POST['uID'],'commentText'=>$_POST['commentText'],'date'=>$_POST['date'], 'postID'=>$_POST['pID']);

        $this->commentsObject->insertComment($data);

    }

}
