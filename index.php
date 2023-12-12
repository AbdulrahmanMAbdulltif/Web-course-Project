<?php
include "php/config.php";
include 'php/meal_db.php';
$db = new meal_db($connection);
include 'include/inc.header.php';

?>




<div class="Home" id="Home">

      <div class="content">
      <h1 class="partytime  ">Party Time </h1>

      <div class="shape1">
      <h3 class="buy2 h3 ">Buy any 2 burgers and get 1.5L Pepsi Free</h3>
    </div>

      <a href=""><button class="testbutton  rounded-pill btn-sm">Order Now</button></a>
    </div>

  </div>




  <?php
  if (isset($_COOKIE['recent-bought'])) {

  ?>
  <div id="recent">
    <div class="container">

      <h2 class="text-center">Your Recent Bought Products</h2>


  <div class="card-group  ">

        <div class="row" >
        <?php
        $recent = explode(",", $_COOKIE['recent-bought']);
        foreach ($recent as $key => $value) {
        $data = $db->getMealById($value);

        echo '<div class="card border-0 col-lg-3 col-md-4 col-sm-12" >




			  <a href="detail.php?id='.$data["id"].'">

			  <img class="card-img-top" src="projectImages/'.$data["image"].'">
	            </a>


	          <div class="gallery-box card-body ">
	            <div class="con1"><a href="detail.php?id='.$data["id"].'">
	                <p  class="card-text">⭐'.$data["rating"].' rating</p>
	                <p  class="card-text">'.$data["title"].'</p>
	                <p class="card-text">some</p>
	              </a>
	            </div>
	            <button class="gallery-button rounded-pill btn-sm "type="button" name="button"id="'.$data["id"].'" onclick="card(this.id)">buy again</button>
	            <p card-text gallery-price>'.$data["price"].' SAR</p>
	          </div>
	        </div>



			';
        }
        ?>

      </div>

      </div>
      </div>
    </div>
      </div>
  <?php } ?>






<div id="Menu">
      <h2 class="Menu-heading">Want to Eat </h2>
      <p class="Menu-p">Try our most delicious food and usually takes minutes to deliver</p>

      <div class="Menu-food-div">


        <a class="Menu-food" href="pizza">pizza</a>
        <a class="Menu-food" href="fast food">fast food</a>
        <a class="Menu-food" href="cupcake">cupcake</a>
        <a class="Menu-food" href="sandwich">sandwich</a>
        <a class="Menu-food" href="spaghetti">spaghetti</a>
        <a class="Menu-food" href="burger">burger</a>

      </div>
      <div class="row">

      <div class="delivery-pic container-fluid ">
        <img class=" delivery img-fluid col-lg-6 " src="projectImages\delivery.png">

        <h2 class="buy3 col-lg-6  ">We guarantee 30 minutes delivery </h2>

      <p class="Menu-p2">If your having a meeting, working late at night and need an extra push</p>
      </div>
    </div>


    </div>



    <div id="Gallery">
      <h2 class="gallery-heading">Our Most Popular Recipes </h2>
      <p class="gallery-heading">Try our most delicious food and usually takes minutes to deliver</p>


      <div class="card-group  ">

      <div class="row" >


      <?php


         echo $db->getAllMeals();

        ?>


      </div>
      </div>


      </div>

      <div id="Testimonials">
    <h2 class="Testimonials-heading">Clients Testimonials </h2>


    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators colorind">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="projectImages/man-eating-burger.png" class="d-block w-100" alt="...">

          <p class="Testimonials-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ullam deserunt laborum, laboriosam veritatis quibusdam blanditiis dolor exercitationem velit commodi quae assumenda incidunt voluptas. Corporis ex nulla
              repellendus ullam nihi!
            </p>
        </div>
        <div class="carousel-item">
          <img src="projectImages/man-eating-burger.png" class="d-block w-100" alt="...">

          <p class="Testimonials-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ullam deserunt laborum, laboriosam veritatis quibusdam blanditiis dolor exercitationem velit commodi quae assumenda incidunt voluptas. Corporis ex nulla
            repellendus ullam nihi!
          </p>
        </div>
        <div class="carousel-item">
          <img src="projectImages/man-eating-burger.png" class="d-block w-100" alt="...">


          <p class="Testimonials-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ullam deserunt laborum, laboriosam veritatis quibusdam blanditiis dolor exercitationem velit commodi quae assumenda incidunt voluptas. Corporis ex nulla
            repellendus ullam nihi!
          </p>


      </div>


      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    </div>

<?php include 'include/inc.footer.php'; ?>
