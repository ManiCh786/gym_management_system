<?php
    session_start();
    require_once('classes/categories.class.php');
    require_once('classes/products.class.php');
    require_once('classes/cart.class.php');
    $category = new Categories();
    $categories = $category->DisplayAllCategories();
    $product = new Products();
    $Products = $product->DisplayAllProducts(isset($_GET['cat_id']) ? $_GET['cat_id']:'');
        if(isset($_POST['addToCart']) ){
            // echo '<script type="text/javascript"> setTimeout(function () { swal({
            //     title: "Good job!",
            //     text: "You clicked the button!",
            //     icon: "success",
            //     button: "Aww yiss!",
            //   }); }, );</script>';
 
           if(isset( $_SESSION['Logged_in'])){   
                $proId = $_POST['proId'];
                $proName = $_POST['proName'];
                $proPrice = $_POST['proPrice'];
                $proImage = $_POST['proImage'];
                $user_id = $_SESSION['User_id'];
                $qty = $_POST['qty'];
                $catId = $_POST['catId'];
                echo($catId);
                $cart = new Cart(0,$proName,$proPrice,$proImage,$user_id,$proId,$qty,$catId);
                $cart->AddToCart();
               
            }else{
                echo "<script>
                window.location = 'memberlogin.php';
                   </script>";           
            } 
        }
   ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="js/counter.js"></script>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
   
</head>

<body>

    <!-- dish section starts  -->

    <section class="dish" id="dish">
        <nav class="navbar navbar-light bg-danger justify-content-between mr-5 ml-5">
            <a class="navbar-brand" style="color: white;">Menu</a>
            <form class="form-inline">
                <div class="d-flex  h-100">
                    <div class="searchbar mr-4">
                        <input class="search_input" type="text" name="" id="myInput" placeholder="Search..." onkeyup="searchFunc()">
                        <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                    </div>
                </div>
                <a href=""><i class="fas fa-shopping-cart mr-4 back"></i></a>
                <a href="table.php" target="_blank" id="bot" class="back">Reserve Table</a>
            </form>
        </nav>
        <h1 class="heading"> <span> MENU</span> </h1>
        <ul class="controls">
  
            <!-- <li class="buttons button-active" data-filter="all">All</li> -->
               <?php
               foreach($categories as $eachCategory){
                ?>
                <?php                 
                if($eachCategory['cat_id'] == $_GET['cat_id']){ ?> 
                <li class="buttons button-active"><a href="menu.php?cat_id=<?=$eachCategory['cat_id']?>"><?=$eachCategory['cat_Name']?></a></li>
               <?php
                }else{
                ?>
                <li class="buttons"><a href="menu.php?cat_id=<?=$eachCategory['cat_id']?>"><?=$eachCategory['cat_Name']?></a></li>
                <?php }?>
                <?php
            }
            ?>
        </ul>

        <div class="image-container" id="fetch">
        <?php
         foreach($Products as $eachProduct){
            ?>
            <div class="image breakfast">
                <a class="arrow" href="#"><?=$eachProduct['proPrice']?> PKR</a>
                <img src="images/<?=$eachProduct['proImage']?>" alt="">
                <h1 class="head mt-3"><?=$eachProduct['proName']?></h1>
               
                <form action="" method="POST">
                    <input type="hidden" name="proId" value="<?=$eachProduct['pro_id']?>">
                    <input type="hidden" name="proName" value="<?=$eachProduct['proName']?>">
                    <input type="hidden" name="proImage" value="<?=$eachProduct['proImage']?>">
                    <input type="hidden" name="proPrice" value="<?=$eachProduct['proPrice']?>">
                    <input type="hidden" name="catId" value="<?=$eachProduct['cat_id']?>">
                <div>
            <input type= "submit" class="mt-3 addtocart"  name="addToCart"  value="Add to Cart">
            <div class="number">     
            <span class="minus">-</span>
            <input type="text" name = "qty" value="1"/>
            <span class="plus">+</span>
            </div>
            </div>    
                </form>
            </div>
        <?php
        }
        ?>
        </div>

    </section>

    <!-- dish section ends -->














    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/js.js"></script>



</body>

</html>