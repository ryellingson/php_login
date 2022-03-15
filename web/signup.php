<style><?php include_once 'style.css'; ?></style>

<div class="wrapper">
    <div class="form">
        <form class="login-form" action="includes/signup.inc.php" method="post">
            <img class="lock" src="lock.png" alt="lock">
            <input type="text" name="name" placeholder="full name">
            <input type="text" name="email" placeholder="email">
            <input type="text" name="uid" placeholder="username">
            <input type="password" name="pwd" placeholder="password" required />
            <input type="password" name="pwdrepeat" placeholder="repeat password" required />
            <div class="buttons">
                <button type="submit" name="submit">Sign Up</button>
                <a href="index.html">
                  <div class="button-link">
                    Go Back
                  </div>
                </a>
            </div>
            <?php
              if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                  echo "<p class=\"error-notice\">Fill in all fields</p>";
                } else if ($_GET["error"] == "invaliduid") {
                  echo "<p class=\"error-notice\">Choose a proper username</p>";
                } else if ($_GET["error"] == "invalidemail") {
                  echo "<p class=\"error-notice\">Choose a proper email</p>";
                } else if ($_GET["error"] == "passwordsdontmatch") {
                  echo "<p class=\"error-notice\">Passwords do not match</p>";
                } else if ($_GET["error"] == "stmtfailed") {
                  echo "<p class=\"error-notice\">Something went wrong, try again!</p>";
                } else if ($_GET["error"] == "usernametaken") {
                  echo "<p class=\"error-notice\">Username taken</p>";
                } else if ($_GET["error"] == "none") {
                  echo "<p class=\"success-notice\">Sign up successful!</p>";
                }
              }
            ?>
        </form>  
    </div>
</div>


