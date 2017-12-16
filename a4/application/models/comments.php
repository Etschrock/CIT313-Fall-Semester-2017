<?php
class Comments extends Model{

    //function to add the comment to the database
    public function insertComment($data) {
        $sql='INSERT INTO comments (uID,commentText,date,postID) VALUES (?,?,?,?)';
        $this->db->execute($sql,$data);

        header ('Location:' . BASE_URL . 'blog/post/' . $data['postID']);

    }

}
