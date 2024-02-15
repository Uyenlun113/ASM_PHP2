<?php
namespace App\Model;

use App\Model\Db;

class loginModel extends Db {
  function insertUser($users_name,$password,$email,$role){
    $sql = "INSERT INTO users (users_name,password,email,role) VALUES ('$users_name','$password','$email','$role')";
    return $this->getData( $sql );
  }
  function login($user_name,$password){
    $sql = "SELECT * FROM users WHERE user_name = '$user_name' AND password = '$password'";
    echo $sql;
    return $this->getData( $sql );
  }
  
}
 ?>