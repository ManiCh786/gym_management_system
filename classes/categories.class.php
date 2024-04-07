<?php
    require_once('classes/database.class.php');

    class Categories extends Database{
        private $cat_id;
        private $cat_Name;

        public function __construct($_cat_id=0,$_cat_Name=''){
            parent::__construct();
            $this->cat_id=$_cat_id;
            $this->cat_Name=$_cat_Name;
        }
        public function DisplayAllCategories(){
            $this->Query('select * from categories where :flag');
            $this->Bind(':flag',1);
            return $this->All();
        }
       
    }
?>