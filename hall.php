<?php
    session_start();
    require_once("classes/user.class.php");
    if(isset($_SESSION['Logged_in'])){
    $LoggedInUserId = $_SESSION['User_id'];
    $userInfo = new User();
    $usersInfo = $userInfo->getLoggedInUserInformation($LoggedInUserId);
    // print_r($usersInfo);
    }else{
        echo('<script>alert("You are not Logged In ! Log In to Book a Table")</script>');
        echo "<script>
        window.location = 'memberlogin.php';
        </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hall Reservation</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/hotel.css">

</head>

<body>

    <!-- reservation section starts  -->

    <section class="book_section layout_padding">
        <h1 class="heading"> <span> Hall RESERVATION</span> </h1>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 offset-xl-2 offset-lg-1 mt-3">
                    <div class="booking-form">
                        <h2>Book Hall For Gathering</h2>
                        <?php
                       foreach($usersInfo as $eachInfo){
                       ?>
                        <form action="#" method="POST">
                            <div class="row">
                                <div class="col-6 col-sm-6 ">
                                    <div class="check-date">
                                        <input type="text" class="form-control" value="<?=$eachInfo['firstName']?>" placeholder="First Name" name="name" required />
                                    </div>
                                    <div class="check-date">
                                        <input type="text" class="form-control" value="<?=$eachInfo['mobile']?>" placeholder="Phone Number" name="phone" required/>
                                    </div>
                                    <div class="check-date">
                                        <input type="number" class="form-control"  placeholder="Number of Persons" min="1" max="500" required>
                                    </div>
                                    <div class="check-date">
                                        <label for="time">Check-in Time</label>

                                        <input type="time" class="form-control" name="time" required>
                                    </div>
                                    <div class="check-date">
                                        <input type="number" class="form-control" placeholder="Number of Chairs Required" min="1" max="500" required>
                                    </div>


                                </div>
                                <div class="col-6">
                                    <div class="check-date">
                                        <input type="text" class="form-control" placeholder="Last Name" value="<?=$eachInfo['lastName']?>" name="name" required />
                                    </div>
                                    <div class="check-date">
                                        <input type="email" class="form-control" placeholder="Your Email" value="<?=$eachInfo['email']?>" name="email" />
                                    </div>

                                    <div class="check-date">
                                        <input type="date" class="form-control " name="date" required>
                                    </div>
                                    <div class="check-date">
                                        <label for="time">Check-out Time</label>

                                        <input type="time" class="form-control" name="time" required>
                                    </div>
                                    <div class="check-date">
                                        <input type="number" class="form-control" placeholder="Number of Tables Required" min="1" max="500" required>
                                    </div>

                                </div>
                            </div>
                            <div class="check-date">
                                <textarea class="form-control" name="" id="" cols="30" rows="5" placeholder="Message"></textarea>
                            </div>
                            <button class="center" type="submit">Check Availability</button>
                        </form>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--  section ends -->

    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/js.js"></script>


</body>

</html>