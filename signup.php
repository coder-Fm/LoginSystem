<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

  <?php
    require "header.php";
   ?>

   <form class="login-form" action="includes/signup.inc.php" method="post">
     <div class="form-title">
       <div class="signin-logo"><img src="images/logo.png" alt="logo" style="float:center;"></div>
       <h1>Sign Up</h1>
       
     </div>
      <input type="text" name="uid" placeholder="Username"><br><br>
      <input type="text" name="mail" placeholder="Email"><br><br>
      <input type="password" name="pwd" placeholder="Password"><br><br>
      <input type="password" name="pwd-repeat" placeholder="Repeat password"><br><br>
      <button class="blue" type="submit" name="signup-submit"><i class="fa fa-user-plus" aria-hidden="true"></i>Sign Up</button>
  </form>


   <div class="main-footer">
     <?php
       require "footer.php";
      ?>
   </div>
</html>
