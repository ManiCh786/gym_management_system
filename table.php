<?php
    // session_start();
    require_once("classes/user.class.php");
    require_once("classes/tables.class.php");
    if(isset($_SESSION['Logged_in'])){
    $LoggedInUserId = $_SESSION['User_id'];
    $userInfo = new User();
    $usersInfo = $userInfo->getLoggedInUserInformation($LoggedInUserId);
    // print_r($usersInfo);
    
    if(isset($_POST['Submit'])){
        $name= $_POST['name'];
        $mobile= $_POST['phone'];//
        $email= $_POST['email'];
        $noofPersons = $_POST['noofPersons'];
        $tableNumber = $_POST['tableNumber'];
        // $tableNumber = "fdsk";
        $date = $_POST['date'];
        $time= date($_POST['time']);
        $message = $_POST['message'];
        $duration = $_POST['duration'];
        $user_id = $_SESSION['User_id'];
        $tableReservation = new TableReservation(0,$name,$mobile,$email,$noofPersons,$tableNumber,$date,$time,$duration,$message,$user_id);
        $tableReservation->BookTable();
        // echo($time);
    }
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
    <title>Table Reservation</title>
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
        <h1 class="heading"> <span> Table RESERVATION</span> </h1>
        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-xl-6 col-lg-6 col-md-8 offset-xl-2 offset-lg-1 mt-3">
                    <div class="booking-form">
                        <h2>Booking Your Table</h2>
                       <?php
                       foreach($usersInfo as $eachInfo){
                       ?>
                        <form action="#" method="POST">
                            <div class="check-date">
                                <input type="text" class="form-control" value="<?=$eachInfo['firstName']?> <?=$eachInfo['lastName']?>" placeholder="Your Name" name="name" required />
                            </div>
                            <div class="check-date">
                                <input type="text" class="form-control" placeholder="Phone Number"  value="<?=$eachInfo['mobile']?>" name="phone" required/>
                            </div>
                            <div class="check-date">
                                <input type="email" class="form-control" placeholder="Your Email" value="<?=$eachInfo['email']?>" name="email" />
                            </div>
                            <div class="check-date">
                                <input type="number" class="form-control" placeholder="Number of Persons" name="noofPersons"min="1" max="15" required/>
                            </div>
                            
                            <div class="check-date">
                                <input type="number" class="form-control" placeholder="Table Number" name="tableNumber" min="1" max="15" required/>
                            </div>
                            <div class="check-date">
                                <input type="date" class="form-control" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" name="date" required>
                            </div>
                            <div class="check-date">
                                <input type="time" class="form-control" name="time" required>
                            </div>
                            <Label>Booking Duration</Label>
                            <div class="check-date">
                                <input type="time" class="form-control" name="duration" required/>
                            </div>
                            <div class="check-date">
                                <textarea class="form-control"  id="" cols="30" rows="5" name="message" placeholder="Message"></textarea>
                            </div>
                            <button class="center" name="Submit" type="submit">Check Availability</button>
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