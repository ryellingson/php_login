<style><?php include_once 'style.css'; ?></style>

<div class="wrapper">
    <div class="form">
        <form class="login-form" action="includes/signup.inc.php" method="post">
            <img class="lock" src="lock.png" alt="lock">
            <input type="text" name="name" placeholder="username">
            <input type="password" name="pwd" placeholder="password" required />
            <div class="buttons">
                <button type="submit" name="submit">Log In</button>
            </div>
        </form>  
    </div>
</div>