<?php 
    session_start();
    require_once('classes/cart.class.php');

      if(isset( $_SESSION['Logged_in'])){   
        $cart = new Cart();
        $cartProducts= $cart->DisplayAllCart();
        $productCategories =$cart-> DisplayProductCategories();
      }else{
        echo "<script>
        window.location = 'memberlogin.php';
          </script>";           
      } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart </title>    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="js/counter.js"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="js/sweetalert.min.js"></script>
    <link rel="stylesheet" href="css/cart.css">

</head>
<body>
<section class="h-100 h-custom" style="background-color: #d2c9ff;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
    <?php
    foreach($cartProducts as $eachProduct){
    ?>  
    <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-8">
                <div class="p-5">
                  <div class="d-flex justify-content-between align-items-center mb-5">
                    <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                    <h6 class="mb-0 text-muted">3 items</h6>
                  </div>
                  <hr class="my-4">
                  <div class="row mb-4 d-flex justify-content-between align-items-center">
                    <div class="col-md-2 col-lg-2 col-xl-2">
                      <img
                        src="uploads/foodMenuPics/<?=$eachProduct['proImage']?>"
                        class="img-fluid rounded-3" alt="Image Not Found">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3">
                      <h6 class="text-muted">Shirt</h6>
                      <h6 class="text-black mb-0"><?=$eachProduct['proName']?></h6>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                      <span class="minus">-</span>
                      <input type="text" name = "qty" value="<?=$eachProduct['qty']?>"/>
                      <span class="plus">+</span>
                      </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                      <h6 class="mb-0"><?=$eachProduct['proPrice']?> PKR</h6>
                    </div>
                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                      <a href="#" class="text-muted btn  bg-danger text-dark">Delete</a>
                    </div>
                  </div>
                  <hr class="my-4">
                  <div class="pt-5">
                    <h6 class="mb-0"><a href="menu.php?cat_id=1" class="text-body"><i
                          class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                  </div>
                </div>
            </div>
              <div class="col-lg-4 bg-grey">
                <div class="p-5">
                  <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                  <hr class="my-4">

              
                  <h5 class="text-uppercase mb-3">Shipping Details</h5>

                 
                  <h5 class="text-uppercase mb-3">Name</h5>
                  <div class="mb-1">
                    <div class="form-outline">
                      <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                    </div>
                  </div>
                  <h5 class="text-uppercase mb-3">Phone</h5>
                  <div class="mb-1">
                    <div class="form-outline">
                      <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                    </div>
                  </div><h5 class="text-uppercase mb-3">Address</h5>
                  <div class="mb-1">
                    <div class="form-outline">
                      <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                    </div>
                  </div>

                  <hr class="my-4">

                  <div class="d-flex justify-content-between mb-5">
                    <h5 class="text-uppercase">Total price</h5>
                    <h5>€ 137.00</h5>
                  </div>
                  <button type="button" class="btn btn-dark btn-block btn-lg"
                    data-mdb-ripple-color="dark">CheckOut</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    }
    ?>
  </div>
</section>
</body>
</html>