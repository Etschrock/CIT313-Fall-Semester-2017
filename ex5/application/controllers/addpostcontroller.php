<?php

class AddPostController extends Controller{
	
	public $postObject;

    protected $access = 1;
	
	public function defaultTask(){
		
		$this->postObject = new Post();
		$this->set('task', 'add');
	
	
	}
	
	public function add(){
		
			$this->postObject = new Post();
			
			$data = array('title'=>$_POST['post_title'],'content'=>$_POST['post_content'],'categoryID'=>$_POST['category'], 'date'=>$_POST['date']);
			
	
			$result = $this->postObject->addPost($data);
			
			$this->set('message', $result);
			
		
	}
	
	public function edit($pID){

        $this->postObject = new Post();

        $post = $this->postObject->getPost($pID);

        $this->set('pID', $post['pID']);
        $this->set('title', $post['title']);
        $this->set('content', $post['content']);
        $this->set('task', 'update');
		
	}


    public function update() {

        $this->postObject = new Post();

        $data = array('title'=>$_POST['post_title'],'content'=>$_POST['post_content'],'categoryID'=>$_POST['category'], 'date'=>$_POST['date'], 'pID'=>$_POST['pID']);

        $result = $this->postObject->updatePost($data);

        $this->set('message', $result);

    }
}
