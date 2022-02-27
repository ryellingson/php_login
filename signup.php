<style><?php include_once 'style.css'; ?></style>

<div class="wrapper">
    <div class="form">
        <form class="login-form" action="includes/signup.inc.php" method="post">
            <img class="lock" src="lock.png" alt="lock">
            <input type="text" name="name" placeholder="username">
            <input type="password" name="pwd" placeholder="password" required />
            <input type="password" name="pwdrepeat" placeholder="repeat password" required />
            <div class="buttons">
                <button type="submit" name="submit">Sign Up</button>
            </div>
        </form>  
    </div>
</div>