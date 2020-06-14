<?php
  session_start();
?>

<?php
  require "logged-header.php";
 ?>

      <main>
        <div class="wrapper-main">
          <section class="section-default">
            <style media="screen">
              p
                {
                  font-size: 25px;
                  font-weight:bolder;
                  text-align: center;
                  padding: 25px 0;
                  letter-spacing: 2px;
                }
              button {
                display: block;
                margin: auto auto;
                width: 50%;
              }
            </style>
            <?php
              if (isset($_SESSION['userId'])) {
                echo '<p class="login-status">You are logged in.</p>';
                echo '<form action="includes/logout.inc.php" method="post">
                  <button type="submit" name="logout-submit">Logout</button>
                  </form>';
              }
              else {
                echo '<p class="login-status">You are logged out.</p>';
              }
            ?>
          </section>
        </div>
      </main>

<?php
  require "footer.php";
?>
