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
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#" enctype="multipat/form-data">
                <div class="error-txt">this is error message</div>
                <div class="name-details">
                    <div class="field input">
                        <label for="First-Name">First Name</label>
                        <input type="text" name="fname" placeholder="First Name" id="First-Name" required>
                    </div>
                    <div class="field input">
                        <label for="Last-Name">Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" id="Last-Name" required >
                    </div>
                </div>
                    <div class="field input">
                        <label for="Email">Email</label>
                        <input type="email" name="email" placeholder=" Enter YourEmail" id="Email" required>
                    </div>
                    <div class="field input">
                        <label for="Password">Password</label>
                        <input type="password" name="password" placeholder=" Enter new password" id="password" required>
                        <i class="fa fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label for="Image">select Image</label>
                        <input type="file" name="image" id="Image" required>
                    </div>
                    <div class="field button">
                        <input type="submit" placeholder="First Name" value="Continue to chat">
                    </div>
                
            </form>
            <div class="link">Already signed up?<a href="login.php">Login now</a></div>
        </section>
    </div>
    <script src="./javascript/password_show_hide.js"></script>
    <script src="./javascript/signup.js"></script>
</body>
</html>