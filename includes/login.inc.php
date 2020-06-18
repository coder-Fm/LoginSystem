<?php
require_once('dbh.inc.php');
session_start();
  if(isset($_POST['login-submit']))
  {
    if(empty($_POST['uid']) || empty($_POST['pwd']))
    {
      header("Location: ../login.php?Empty= Please fill in all fields.");
    }
    else
    {
      $query = "SELECT * FROM users WHERE uidUsers='".$_POST['uid']."' and pwdUsers='".$_POST['pwd']."'";
      $result=mysqli_query($conn,$query);

      if(mysqli_fetch_assoc($result))
      {
          $_SESSION['User']=$_POST['uid'];
          header("Location: ../_success-login.php");
      }
      else
      {
        header("Location: ../login.php?Invalid= Wrong Username/Password.");
      }
    }
  }

?>
