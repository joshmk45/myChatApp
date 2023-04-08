<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error-txt">This is an error message</div>
                    <div class="field input">
                        <label for="Email">Email</label>
                        <input type="email" placeholder=" Enter Your Email" id="Email">
                    </div>
                    <div class="field input">
                        <label for="Password">Password</label>
                        <input type="password" placeholder=" Enter your password" id="password">
                        <i class="fa fa-eye"></i>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox">
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
</body>
</html>