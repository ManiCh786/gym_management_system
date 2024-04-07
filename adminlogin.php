<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>admins login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
</head>

<body>
    <div class="hero" style=" background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.5)), url('images/front.jpg');
    ;">
        <div class="wrapper" id="w1">
            <div class="title-text">
                <div class="title login">
                    <h1>Admin Login</h1>
                </div>
            </div>
            <div class="form-inner">
                <form action="loginprocess.php" class="login" method="POST">
                    <div class="field">
                        <input type="text" name="username" placeholder="Admin Id" required>
                    </div>
                    <div class="field">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" name="login" value="Login">
                    </div>
                    <div class="signup-link">Not an Admin? <a href="memberlogin.html">Login as Member Now</a></div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>