<?php
// session_start();
    require_once('classes/database.class.php');

    class Cart extends Database{
        private $cart_id;
        private $proName;
        private $proImage;
        private $proPrice;
        private $user_id;
        private $pro_id;
        private $qty;
        private $catId;

        public function __construct($_cart_id=0,$_proName='',$_proPrice=0,$_proImage='',$_user_id=0,$_pro_id=0,$_qty=0,$_catId=0){
            parent::__construct();
            $this->cart_id=$_cart_id;
            $this->proName=$_proName;
            $this->proPrice=$_proPrice;
            $this->proImage=$_proImage;
            $this->user_id=$_user_id;
            $this->pro_id=$_pro_id;
            $this->qty=$_qty;
            $this->catId=$_catId;

            
        }
        public function AddToCart(){
            $this->Query('select * from cart where pro_id=:proid and user_id=:userId');
            $this->Bind(':proid',$this->pro_id);
            $this->Bind(':userId',$_SESSION['User_id']);
            if($this->Total()){
                $this->Query('UPDATE `cart` SET `qty`= :qty WHERE pro_id= :proid AND user_id = :userid');
                $this->Bind(':proid',$this->pro_id);
                $this->Bind(':userid',$this->user_id);
                $this->Bind(':qty',$this->qty);

                $this->Run();
                echo '<script type="text/javascript"> setTimeout(function () { swal({
                    title: "Success !",
                    text: "Product Updated in cart !",
                    icon: "success",
                    button: "Ok",
                  }); }, 1000);</script>';
                //  echo '<script>alert("Product Updated In Cart")</script>';
                //  echo "<script>
                // window.location = 'shopping-cart.php';
                // </script>";
            }
            else{
            $this->Query("INSERT INTO `cart`(`proName`, `proPrice`, `proImage`, `user_id`, `pro_id`, `qty`, `cat_id`) VALUES (:pname,:pprice,:pimage,:userid,:pid,:qty,:catId)");
            $this->Bind(':pname',$this->proName);
            $this->Bind(':pprice',$this->proPrice);
            $this->Bind(':pimage',$this->proImage);
            $this->Bind(':userid',$_SESSION['User_id']);
            $this->Bind(':pid',$this->pro_id);
            $this->Bind(':qty',$this->qty);
            $this->Bind(':catId',$this->catId);
            $this->Run();
            echo '<script type="text/javascript"> setTimeout(function () { swal({
                title: "Success !",
                text: "Product Added to cart !",
                icon: "success",
                button: "Ok",
              }); }, 1000);</script>';
            // echo '<script>alert("Product Added To Cart")</script>';
            }

        }  
        public function DisplayProductCategories($cat_id){
            $this->Query('select * from categories where cat_id :catId');
            $this->Bind(':catId',1);
            return $this->All();
        } 
        public function DisplayAllCart(){
            $this->Query('SELECT * FROM products inner join cart on products.pro_id = cart.pro_id where cart.user_id=:userId');
            $this->Bind(':userId',$_SESSION['User_id']);
            if($this->Total()){
            return $this->All();
            }else{
                return false;
            }
        } 
         public function DeleteCartItem($cart_id){
            $this->Query('delete  from cart where cart_id=:cartid');
            $this->Bind(':cartid',$cart_id);
             $this->Run();
        }
}