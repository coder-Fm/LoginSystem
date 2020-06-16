<?php $page = 'login'; ?>

<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

  <?php
    require "header.php";
   ?>


   <form class="login-form" action="includes/login.inc.php" method="post">
     <div class="form-title">
       <div class="signin-logo"><img src="images/logo.png" alt="logo" style="float:center;"></div>
       <h1>Log In</h1>
       <?php
         if (isset($_GET['error'])) {
           if ($_GET['error'] == "emptyfields") {
             echo '<p class="signuperror">Please fill in all fields.</p>';
           }
           else if ($_GET['error'] == "wrongpwd") {
             echo '<p class="signuperror">Wrong Username/Password.</p>';
           }
           else if ($_GET['error'] == "sqlerror") {
             echo '<p class="signuperror">Invalid username/Password.</p>';
           }

         }

       ?>
     </div>

     <label><input type="text" placeholder="Username" name="mailuid"></label>
     <label><input type="password" placeholder="Password" name="pwd"></label>
     <div class="remember-me">
       <input class="input-checkbox" type="checkbox" name="remember-me" id="checkbox1">
       <label class="label-checkbox" for="checkbox1">
         <span class="text1">Remember me</span>
       </label>
     </div>
     <button class="blue" type="submit" name="login-submit"><i class="fa fa-lock"></i>Login</button>
     <br><br>
     <a href="signup.php" class="header-signup"><i class="fa fa-user-plus" aria-hidden="true"></i>Sign Up</a>
     <p class="media-login">Log In with an existing account</p>
     <div class="media-login">
       <button onclick="window.location.href='https://twitter.com/login/';" class="media-links" type="button"><i class="fa fa-twitter"></i></button>
       <button onclick="window.location.href='https://www.facebook.com/login.php';" class="media-links" type="button"><i class="fa fa-facebook"></i></button>
       <button onclick="window.location.href='https://www.linkedin.com/uas/login';" class="media-links" type="button"><i class="fa fa-linkedin"></i></button>
       <button onclick="window.location.href='https://plus.google.com';" class="media-links" type="button"><i class="fa fa-google-plus"></i></button>
     </div>
   </form>

   <div class="main-footer">
     <?php
       require "footer.php";
      ?>
   </div>
</html>
