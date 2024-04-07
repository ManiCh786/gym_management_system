<?php
  require_once("classes/user.class.php");
  session_start();
  if(isset($_POST['Login'])){
    $userLoginId = $_POST['loginId'];
    $password = $_POST['password'];
    $user = new User(0,'','',0,'','','',0,'','','','',$userLoginId,$password);
      $user->Login();
  }
 
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
</head>

<body>


    <div class="hero" style=" background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.5)), url('images/front.jpg');">
        <div class="wrapper" id="w1">
            <div class="title-text">
                <div class="title login">
                    <h1> Login</h1>
                </div>
            </div>
            <div class="form-inner">
                <form action="#" method="POST" class="login">
                    <div class="field">
                        <input type="text" placeholder="Member Id" name="loginId" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Password" name="password" required>
                    </div>
                    <div class="pass-link"><a href="#">Forgot password?</a></div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" name="Login" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>