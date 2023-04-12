<!DOCTYPE html>
<html lang="en">
<?php include_once('header.php')?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error-txt">This is an error message</div>
                    <div class="field input">
                        <label for="Email">Email</label>
                        <input type="email" name="email" placeholder=" Enter Your Email" id="Email">
                    </div>
                    <div class="field input">
                        <label for="Password">Password</label>
                        <input type="password" name="password" placeholder=" Enter your password" id="password">
                        <i class="fa fa-eye"></i>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="rememberMe">
                        <label for="">Remember Me</label>
                    </div>
                    <div class="field button">
                        <input type="submit" placeholder="First Name" value="Continue to chat">
                    </div>            
            </form>
            <div class="link">Not signed up yet?<a href="index.php">Sign up now</a></div>
        </section>
    </div>
    <script src="javascript/password_show_hide.js"></script>
    <script src="javascript/login.js"></script>
</body>
</html>