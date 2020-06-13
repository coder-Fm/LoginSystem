<?php

?>
<!DOCTYPE html>
<html lang="en">

  <?php
    require "header.php";
   ?>
   <div class="login-form">
     <div class="form-title">
       <div class="signin-logo"><img src="images/logo.png" alt="logo" style="float:center;"></div>
       <h1>Sign Up</h1>
     </div>



     <main>
       <div class="wrapper-main">
         <section class="section-default">
           <h1>Sign Up</h1>
           <?php
             if (isset($_GET['error'])) {
               if ($_GET['error'] == "emptyfields") {
                 echo '<p class="signuperror">Please fill in all fields.</p>';
               }
               else if ($_GET['error'] == "invaliduidmail") {
                 echo '<p class="signuperror">Invalid username and e-mail.</p>';
               }
               else if ($_GET['error'] == "invaliduid") {
                 echo '<p class="signuperror">Invalid username.</p>';
               }
               else if ($_GET['error'] == "invalidmail") {
                 echo '<p class="signuperror">Invalid e-mail.</p>';
               }
               else if ($_GET['error'] == "passwordcheck") {
                 echo '<p class="signuperror">passwords do not match.</p>';
               }
               else if ($_GET['error'] == "usertaken") {
                 echo '<p class="signuperror">Username is already taken.</p>';
               }
             }
             else if ($_GET["signup"] == "success") {
               echo '<p class="signupsuccess">Successful Sign Up.</p>';
             }
           ?>
     </main>



     <form action="includes/signup.inc.php" method="post">
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
   </div>

</html>
