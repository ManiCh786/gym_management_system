<?php
 require_once("classes/user.class.php");
 session_start();
if(isset($_POST['btnRegister'])){
    $fname= $_POST['FName'];
    $lname= $_POST['LName'];
    $email= $_POST['email'];
    $mobile = $_POST['mobilePhone'];
    $cnic= $_POST['cnic'];
    $address= $_POST['address'];
    $occupation= $_POST['occupation'];
    $income= $_POST['Income'];
    $gender= $_POST['gender'];

    $target = "uploads/usersSignupPics";
    $profilePic = $_FILES['profilepic']['name'];
    $profilepic_tmp1 = $_FILES['profilepic']['tmp_name'];
    $cnicPic = $_FILES['cnicpic']['name'];
    $cnicPic_tmp2 = $_FILES['cnicpic']['tmp_name'];
  
    $uploadOk = 1;
    if ($_FILES["profilepic"]["size"] > 500000) {
        echo "Your Profile size is larger to upload ! ";
        $uploadOk = 0;
      }if ($_FILES["cnicpic"]["size"] > 500000) {
        echo "Your CNIC Picture is larger to upload ! ";
        $uploadOk = 0;
      }
      else{
        $profileImageSize = getimagesize($profilepic_tmp1);
        $cnicImageSize = getimagesize($cnicPic_tmp2);
          if($profileImageSize !== false && $cnicImageSize !== false) {
            $uploadOk = 1;
            $profileImageTargetFile =$target . basename($_FILES["profilepic"]["name"]);
            $cnicImageTargetFile =$target . basename($_FILES["cnicpic"]["name"]);
            if (file_exists($profileImageTargetFile)) {
              echo "$profileImageTargetFile  already exists! ";
              $uploadOk = 0;
            } if (file_exists($cnicImageTargetFile)) {
              echo "$cnicImageTargetFile already exists! ";
              $uploadOk = 0;
            }else {
                if($uploadOk == '1'){
                        $user = new User(0,$fname,$lname,$cnic,$mobile,$email,$occupation,$income,$address,$gender,$profilePic,$cnicPic);
                        if($user->Signup()){
                            move_uploaded_file($profilepic_tmp1,$target.$profilePic);
                            move_uploaded_file($cnicPic_tmp2,$target.$cnicPic);
                        }
                        
                      
                  }else{
                    echo "An error occured !";
            
                  }
            }
          } else {
            echo "File is not an image.";
            $uploadOk = 0;
          }
         
      
      }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply for Membership</title>
    <link rel="stylesheet" href="css/membership.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
</head>

<body>
    <div class="hero" style=" background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.5)), url('images/front.jpg');">
        <div class="container register">
            <div class="row">
            
                <div class="col-2 "></div>
                <div class="col-7 col-sm-8 register-right">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h2 class="register-heading">Apply For Membership</h2>
                            <form action="" method="POST" enctype="multipart/form-data">
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="FName" placeholder="First Name *" value="" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Your Email *" value="" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="cnic" class="form-control" name="cnic" pattern="[0-9]{5}[0-9]{7}[0-9]{1}" placeholder="CNIC No. *" value="" required/>
                                    </div> 
                                     <div class="form-group">
                                         <input type="file" name="profilepic" id="profilepic" required/>
                                    </div>

                                    <!-- <div class="form-group">
                                        <label for="custom-file-upload" class="filupp">
                                        <span class="filupp-file-name js-value">Upload your picture</span>
                                        <input type="file" name="attachment-file" value="1" id="custom-file-upload" />
                                        </label>

                                    </div> -->
                                    <div class="form-group">
                                        <input type="text" name="occupation" class="form-control" placeholder="Occupation *" value="" required/>
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="male" checked>
                                                <span> Male </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="female">
                                                <span>Female </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="LName" placeholder="Last Name *" value="" required/>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" minlength="11" maxlength="11" name="mobilePhone" pattern="[0-3]{2}[0-9]{2}[0-9]{7}" class="form-control" placeholder="Phone No. *" value="" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="address" placeholder="Your Address *" value="" required/>
                                    </div>
                                    <div class="form-group">
                                         <input type="file" name="cnicpic" id="" required/>
                                    </div>
                                    <!-- <div class="form-group">
                                        <div class="form-group">
                                            <label for="custom-file-upload" class="filupp">
                                            <span class="filupp-file-name js-value">Upload your CNIC Picture</span>
                                            <input type="file" name="attachment-file" value="1"  />
                                            </label>

                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="Income" placeholder="Monthly Income *" value="" required/>
                                    </div>
                                    <input type="submit" class="btnRegister" name="btnRegister" value="Apply" />
                                </div>
                            </div>
                            </form>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            // get the name of uploaded file
            $('input[type="file"]').change(function() {
                var value = $("input[type='file']").val();
                $('.js-value').text(value);
            });

        });
    </script>
</body>

</html>