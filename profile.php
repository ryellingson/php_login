<?php
  session_start();
?>
<?php
  ini_set("display_errors", 1);
?>
<style><?php include_once 'style.css'; ?></style>


<div class="wrapper">
    <div class="form">
        <div class="login-form" action="includes/login.inc.php" method="post">
          <div class="title">
            Profile Page
          </div>
          <div class="welcome">
            <?php
              echo "Welcome: {$_SESSION["useruid"]}";
            ?>
          </div>
        </div>  
    </div>
</div>