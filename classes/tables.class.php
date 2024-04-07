<?php
session_start();
require_once("classes/database.class.php");
class TableReservation extends Database{
    private $table_id;
    private $customerName;
    private $customerMobile;
    private $email;
    private $numberofPersons;
    private $tableNumber;
    private $date;
    private $time;
    private $duration;
    private $message;
    private $user_id;
    public function __construct($_table_id=0,$_customerName='',$_customerMobile='',$_email='',$_numberofPersons=0,$_tableNumber='',$_date='',$_time='',$_duration='',$_message='',$_user_id=0){
        parent::__construct();
        $this->table_id=$_table_id;
        $this->customerName=$_customerName;
        $this->customerMobile=$_customerMobile;
        $this->email=$_email;
        $this->numberofPersons=$_numberofPersons;
        $this->tableNumber=$_tableNumber;
        $this->date=$_date;
        $this->time=$_time;
        $this->duration=$_duration;
        $this->message=$_message;
        $this->user_id=$_user_id;
        
    }
    public function BookTable(){
        $this->Query('SELECT * FROM `tablereservation` WHERE tableNumber = :tableNumber AND date = :date ');
        $this->Bind(':tableNumber',$this->tableNumber);
        $this->Bind(':date',$this->date);
        if($this->Total()){
        $this->Query('SELECT * FROM `tablereservation` WHERE tableNumber = :tableNumber AND date = :date AND time > :time AND time < (SELECT ADDTIME(time, duration)) ');
        $this->Bind(':tableNumber',$this->tableNumber);
        $this->Bind(':date',$this->date);
        $this->Bind(':time',$this->time);
        $this->Bind(':duration',$this->duration);
            echo '<script>alert("This table is already reserved !")</script>';
            return 0;
        }else{
        $this->Query("INSERT INTO `tablereservation`(`customerName`, `customerMobile`, `email`, `numberOfPersons`, `tableNumber`, `date`, `time`,`duration`, `message`, `user_id`) VALUES (:name,:mobile,:email,:noofperson,:tablenumber,:date,:time,:duration,:message,:userid)");
        $this->Bind(':name',$this->customerName);
        $this->Bind(':mobile',$this->customerMobile);
        $this->Bind(':email',$this->email);
        $this->Bind(':noofperson',$this->numberofPersons);
        $this->Bind(':tablenumber',$this->tableNumber);
        $this->Bind(':date',$this->date);
        $this->Bind(':time',$this->time);
        $this->Bind(':duration',$this->duration);
        $this->Bind(':message',$this->message);
        $this->Bind(':userid',$this->user_id);
        // $data = [];
        // $data= [$this->customerName,$this->customerMobile,$this->email,$this->numberofPersons,$this->tableNumber,$this->date,$this->time,$this->message,$this->user_id];
        // print_r($data);
        // echo '<script>alert("f")</script>';
        // echo($this->time);
        if($this->Run()){
        echo '<script>alert("Table is Reserved Succesfully")</script>';
        }      
    }

    }
}

?>