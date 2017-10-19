<?php
class Post extends Model{
	
	function getPost($pID){

        $sql = "select * from posts where pID = ?";
		
		// perform query
		$results = $this->db->getrow($sql, array($pID));
		
		$post = $results;
	
		return $post;
	
	}
		
	public function getAllPosts($limit = 0){

        //if numposts isnt set, set it to ""
        if (!isset($numposts)) {
            $numposts = "";
        }
		
		if($limit > 0){
			
			$numposts = ' LIMIT '.$limit;
		}
		
		$sql =  'SELECT * FROM posts'.$numposts;
		
		// perform query
		$results = $this->db->execute($sql);
		
		while ($row=$results->fetchrow()) {
			$posts[] = $row;
		}

		return $posts;
	
	}
	
	public function addPost($data){
		
		$sql='INSERT INTO posts (title,content,categoryID,date) VALUES (?,?,?,?)';
		$this->db->execute($sql,$data);
		$message = 'Post added.';
		return $message;
		
	}

	public function update($data) {

        $sql = "update posts set title=" . $_POST['title'] . "where pID = " . $_POST['pID'];
        $this->db->execute($sql,$data);
        $message = 'Post updated.';
        return $message;
    }
	
}
