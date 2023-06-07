
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/248e85b2ee.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./assets/css/about.css">
    <title>Register</title>
</head>
<body>
    <div class="main">
        <form action="signup.php" name="myform" class="left" method="POST">
            <span class="form-txt">Registration</span>
            <div class="name">
                <input type="text" name="first" placeholder="Firstname">
                <span class="rounddiv"></span>
                    <span class="emaildiv">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
            </div>
            <div class="name">
                <input type="text" name="last" placeholder="Lastname">
                <span class="rounddiv"></span>
                        <span class="emaildiv">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
            </div>
            <div class="email">
                <input type="text" name="email" placeholder="E-mail">
                <span class="rounddiv"></span>
                    <span class="emaildiv">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
            </div>

            <div class="phone">
                <input type="text" name="uid" placeholder="Username">
                <span class="rounddiv"></span>
                    <span class="emaildiv">
                        <i class="fa fa-phone-alt" aria-hidden="true"></i>
                    </span>
            </div>

            <div class="pass" required>
                <input type="text" name="pwd" placeholder="Password">
                <span class="rounddiv"></span>
                    <span class="emaildiv">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
            </div>

            <!-- <div class="form-group">
                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required>
                <label for="agree-term" class="label-agree-term">
                    <span>
                        I agree all statements in
                        <a href="#" class="term-service">Terms of service</a>
                    </span>
                </label>
            </div> -->
            <button type="submit" name="submit" class="register">Sign up</button>
            <div class="account">
                <a class="txt2" href="login.php">
                    I am already member
                    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                </a>
            </div>
        </form>
        <div class="right">
            <figure><img src="/assets/img/signup-image.jpg" alt="sing up image"></figure>
        </div>
    </div>
</body>
</html>