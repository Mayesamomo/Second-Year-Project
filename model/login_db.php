<?php
function login($username, $password) {
    global $db;
    //cheching if the user exist
    $query ="SELECT * FROM users WHERE username = :username AND password = :password AND user_status =1 ";
    $statement = $db ->prepare($query);
    $statement->bindValue(":username", $username);
    $statement->bindValue(":password", $password);
    $statement->execute();
    $all_queries = $statement->fetch();
      $arrayLength = $statement->rowCount();
    $statement->closeCursor();
  
  

    if($arrayLength !=1){
        return -1;
    }
    else{
        
        //username and password is valid
        #start session
        session_start();
        $_SESSION['username'] =$username;
        $_SESSION['id'] = $all_queries['id'];
        
    }
    return $all_queries['id'];
}

