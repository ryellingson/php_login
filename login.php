<div class="wrapper">
    <div class="form">
        <form class="login-form" action="signup.inc.php" method="post">
            <img class="lock" src="lock.png" alt="lock">
            <input type="text" name="name" placeholder="username">
            <input type="text" name="email" placeholder="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required/>
            <input type="password" name="pwd" placeholder="password" required />
            <div class="buttons">
                <button type="submit">Sign Up</button>
                <button type="submit">Log In</button>
            </div>
        </form>  
    </div>
</div>