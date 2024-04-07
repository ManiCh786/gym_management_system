<?php
  require_once('database.class.php');
  class User extends Database{
      private $userId;
      private $fname;
      private $lname;
      private $cnic;
      private $mobile;
      private $email;
      private $occupation;
      private $monthlyIncome;
      private $address;
      private $gender;
      private $profilepic;
      private $cnicpic;
      private $userLoginId;
      private $password;


      public function __construct($_userId=0,
      $_fname='',$_lname='',$_cnic=0,$_mobile=0,
      $_email='',$_occupation='',$_monthlyIncome=0,
      $_address='',$_gender='',$_profilepic='',$_cnicpic='',$_userLoginId=0,$_password=''
      ){
          parent::__construct();
          $this->userId=$_userId;
          $this->fname=$_fname;
          $this->lname=$_lname;
          $this->cnic=$_cnic;
          $this->mobile=$_mobile;
          $this->email=$_email;
          $this->occupation=$_occupation;
          $this->monthlyIncome=$_monthlyIncome;
          $this->address=$_address;
          $this->gender=$_gender;
          $this->profilepic=$_profilepic;
          $this->cnicpic=$_cnicpic;
          $this->userLoginId = $_userLoginId;
          $this->password=$_password;

      }
      public function Login(){
          $this->Query('select * from userslogincredentials where userLoginId=:loginId and password=:pwd');
          $this->Bind(':loginId',$this->userLoginId);
          $this->Bind(':pwd',$this->password);
          if($this->Total()){
            $user_id= $this->Single();
            $accountType = $user_id['account_type'];
            $_SESSION['Logged_in'] = true;
            $_SESSION['User_id']=$user_id['userId'];
            if($accountType == 'User'){
              echo '<script>alert("You are Logged In Succesfully")</script>';
              echo "<script>
                window.location = 'home.php';
                </script>";
              } 
          if($accountType == 'Admin'){
            // echo($accountType);
              echo '<script>alert("Welcome Admin")</script>';
              echo "<script>
             window.location = 'adminpanel.php';
              </script>";
            }
            else{
              echo '<script>alert("Your Account is Invalid !")</script>';
             
            }
   
          }else{
              echo "Invalid Credentials ! Login Failed";
          }
      }
      public function Signup(){
        $this->Query('select * from users where email=:eml');
        $this->Bind(':eml',$this->email);
        if($this->Total()){
             echo '<script>alert("This Email Already Exits !")</script>';
             return 0;
        }else{
        $this->Query('INSERT INTO `users`(`firstName`, `lastName`, `cnic`, `mobile`, `email`, `occupation`, `monthlyIncome`, `address`,  `gender`, `profilepic`, `cnicpic`)  VALUES (:fname,:lname,:cnic,:mobile,:email,:occupation,:salary,:address,:gender,:profilepic,:cnicpic)');
        $this->Bind(':fname',$this->fname);
        $this->Bind(':lname',$this->lname);
        $this->Bind(':cnic',$this->cnic);
        $this->Bind(':mobile',$this->mobile);
        $this->Bind(':email',$this->email);
        $this->Bind(':occupation',$this->occupation);
        $this->Bind(':salary',$this->monthlyIncome);
        $this->Bind(':address',$this->address);
        // $this->Bind(':account_type','User');
        $this->Bind(':gender',$this->gender);
        $this->Bind(':profilepic',$this->profilepic);
        $this->Bind(':cnicpic',$this->cnicpic);
        if($this->Run()){
          echo('<Script>alert("Your Request is Recieved. We will contact you shortly")</Script>');
          echo "<script>
          window.location = 'index.php';

          </script>";
          return 1;
        }
        
        }
  }
  public function getLoggedInUserInformation($user_id){
    $this->Query('SELECT * FROM  `userslogincredentials` inner join `users` on userslogincredentials.userId = users.userId where users.userId=:userId');
    $this->Bind(':userId',$user_id);
    if($this->Total()){
      return $this->All();
      }else{
          return 0;
      }
  }
}
?>