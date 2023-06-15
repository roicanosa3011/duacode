<?php

class UserModel {
    public function getUsers() {
        
        require_once '../database/db.php';
        
  
        $query = "SELECT * FROM users";
        $result = mysqli_query($connection, $query);

       
        $users = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $users[] = $row;
        }

    
        mysqli_close($connection);

   
        return $users;
    }
}
