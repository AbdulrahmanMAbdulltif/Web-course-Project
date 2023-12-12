<?php
if (isset($_COOKIE['cart']) && $_COOKIE['cart']!="") {
$cartVal = $_COOKIE['cart'];
$cart = explode(",", $_COOKIE['cart']);
$cartCounter = count($cart);
} else {
$cartVal = "";
$cartCounter = 0;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Index</title>
</head>

<body>

   <div id="Home">

    <div class="container">
      <div class="inside">


    <nav class="navbar navbar-expand-xl navbar-dark fixed-top">

            <img class="logow" src="projectImages/logo-White.svg" alt="">

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="#navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-end  " id="navbarTogglerDemo03">
            <ul class="navbar-nav  ml-auto">
                <li class="nav-item"><a href="index.php#Home">Home</a></li>
                <li class="nav-item"><a href="#Menu">Menu</a></li>
                <li class="nav-item"><a href="#Gallery">Gallery</a></li>
                <li class="nav-item"><a href="#Testimonials">Testimonials</a></li>
                <li class="nav-item"><a href="#Contact-Us">Contact Us</a></li>

</ul>
                <ul class="navbar-nav navbar2 ml-auto">
                <li class="nav-item"><a href="Search">Search</a></li>
                <li class="nav-item"><a href="Profile">Profile</a></li>
                <li class="nav-item"><a class="nav-link  cart " data-bs-toggle="modal" data-bs-target="#exampleModal"
                  href="#">Cart <span class="counter-index" id="cco"><?php echo $cartCounter;  ?></span></a></li>



            </ul>
          </div>
      </nav>
      </div>


    </div>

    </div>



    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">


          <div class="d-flex justify-content-between">
              <p>Item</p>
              <p>Price</p>
            </div>
            <?php
            $price = 0;
            if ($cartCounter!=0) {
            foreach ($cart as $key => $value) {
            $data = $db->getMealById($value);
            $price+=$data['price'];
            ?>
            <div class="d-flex justify-content-between">
              <p><?php echo $data['title']; ?></p>
              <p><?php echo $data['price']; ?></p>
            </div>
            <?php


            }
            }

            ?>
            <div class="d-flex justify-content-between">
              <p>Total</p>
              <p><?php echo $price; ?></p>
            </div>







          </div>
          <div class="modal-footer">


         <form action="php/order.php" method="POST">
            <input type="hidden" name="cart" value="<?php echo $cartVal; ?>">
            <input type="hidden" name="price" value="<?php echo $price; ?>">
            <button type="button" class="btn btn-Danger" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="submit" class=" gallery-button rounded-pill">order now</button>
          </form>


          </div>
        </div>
      </div>
</div>
