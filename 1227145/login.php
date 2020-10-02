<?php

function login(){
$legitUsername = "stamat";
$legitPassword = "1234";
print_r($_POST);

if($_POST["username"] == $legitUsername &&
 $_POST["password"] == $legitPassword
  ) { 
      header("Location: welcome.html");
  }
    
 else {
     header("Location: index.html");
 } }

login();

