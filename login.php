<?php
include 'core/init.php';

if(empty($_POST) === false) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  if (empty($username) === true || empty($password) === true) {
    $errors[] ="You need to enter a username and password";
  } else if (user_exists($username) === false)  {
    $error[] = 'We can\'t find that username. Have you registered';
  }
  
}
?>