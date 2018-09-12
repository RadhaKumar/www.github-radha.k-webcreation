<?php
session_start();
  
  $db = mysqli_connect("localhost","root","","loginform");

  if (isset($_POST['getvalue'])) {
    
    $email= mysql_real_escape_string($_POST['email']);
    
    $password = mysql_real_escape_string($_POST['password']);

    $password = md5($password);

    $sql="SELECT * FROM login WHERE userid='$userid' AND password='$password'";
    $result = mysqli_query($db,$sql);

if (mysqli_num_rows($result) == 1) {
        $_SESSION['message'] = "You are now logged in";
        
        
        header("location: home.php"); //redirect to next page
    }else{
        $_SESSION['message'] = "username/password combination incorrect";
    }
      
 }


?>

