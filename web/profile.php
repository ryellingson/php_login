<?php
  session_start();
?>
<?php
  ini_set("display_errors", 1);
?>
<style><?php include_once 'style.css'; ?></style>


<div class="wrapper">
    <div class="form">
        <div class="login-form">
          <div class="title">
            Profile Page
          </div>
          <div class="welcome">
            <?php
              echo "Welcome: {$_SESSION["useruid"]}";
            ?>
          </div>
          <a href="includes/logout.inc.php">
            <div class="buttons">
              <button type="submit" name="submit">Log Out</button>
            </div>
          </a>
        </div>  
    </div>
</div>