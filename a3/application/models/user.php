<?php
class User extends Model{

    function getUser($uID){

        $sql =  'SELECT * FROM users WHERE uID = ?';

        // perform query
        $results = $this->db->getrow($sql, array($uID));

        $user = $results;

        return $user;

    }

    public function getAllUsers($limit = 0){

        //if numposts isnt set, set it to ""
        if (!isset($numposts)) {
            $numposts = "";
        }

        if($limit > 0){

            $numposts = ' LIMIT '.$limit;
        }

        $sql =  'SELECT * FROM users'.$numposts;

        // perform query
        $results = $this->db->execute($sql);

        while ($row=$results->fetchrow()) {
            $users[] = $row;
        }

        return $users;

    }

    public function addUser($data){

        $sql='INSERT INTO users (first_name,last_name,email,password) VALUES (?,?,?,?)';
        $this->db->execute($sql,$data);
        $message = 'User added.';
        return $message;

    }

}