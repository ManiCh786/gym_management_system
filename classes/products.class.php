<?php
    require_once('classes/database.class.php');

    class Products extends Database{
        private $pro_id;
        private $proName;
        private $proImage;
        private $proPrice;
        private $cat_Id;
        public function __construct($_pro_id=0,$_proName='',$_proImage='',$_proPrice='',$_cat_Id=''){
            parent::__construct();
            $this->pro_id=$_pro_id;
            $this->proName=$_proName;
            $this->proImage=$_proImage;
            $this->proPrice=$_proPrice;
            $this->cat_Id=$_cat_Id;
            
        }
        public function DisplayAllProducts($catId=''){
            if($catId != '' && $catId != '1'){
                // echo $catId;
                $this->Query('select * from products where cat_id =:catId');
                $this->Bind(':catId',$catId);
                return $this->All();
            }
            else{
            $this->Query('select * from products where :flag');
            $this->Bind(':flag',1);
            return $this->All();
            }
        } 
        
       
    }
?>