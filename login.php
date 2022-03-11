<style><?php include_once 'style.css'; ?></style>

<div class="wrapper">
    <div class="form">
        <form class="login-form" action="includes/login.inc.php" method="post">
            <img class="lock" src="lock.png" alt="lock">
            <input type="text" name="uid" placeholder="Username/Email">
            <input type="password" name="pwd" placeholder="Password" required />
            <div class="buttons">
                <button type="submit" name="submit">Log In</button>
            </div>
            <?php
              if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                  echo "<p class=\"error-notice\">Fill in all fields</p>";
                } else if ($_GET["error"] == "wronglogin") {
                  echo "<p class=\"error-notice\">Incorrect Login Info</p>";
                }
              }
            ?>
        </form>  
    </div>
</div>