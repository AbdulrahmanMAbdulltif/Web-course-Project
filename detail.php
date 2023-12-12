<!DOCTYPE html>
<html lang="en">

<?php
include "php/config.php";
include 'php/meal_db.php';
$db = new meal_db($connection);
include 'include/inc.header.php';
$id = $_GET['id'];
$data = $db->getMealById($id);

?>
<div class="best-sandwich row">

        <div class=" img-div col-lg-6 col-md-12 col-sm-12">
        <img src="projectImages\<?php echo $data['image'];  ?>" class="details-pic1 img-fluid">
    </div>

        <div class=" best-s col-lg-6 col-md-12">
        <h1 class="best-sandwich-h1"><?php echo $data['title'];  ?></h1>
        <p><?php echo $data['price'];  ?>  SAR</p>
        <p>&#11088;<?php echo $data['rating'];  ?> ⭐ rating</p>


        <p class="best-sandwich-p"><?php echo $data['description'];  ?> </p>
        <br>
        <a ><button id="des-order" onclick="desOrder()" class="best-sandwich-btn">-</button> </a>

        <a ><button class="best-sandwich-btn1"><p id="counter-cart">1</p></button> </a>

        <a ><button id="inc-order" onclick="incOrder()" class="best-sandwich-btn">+</button> </a>



        <a><button class="best-sandwich-add-cart" id="<?php echo $data['id'] ?>" onclick="card(this.id)" onclick="addToCartDetails()">add to cart</button></a>


    </div>
      </div>

            <ul class="tabs-button nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Description</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="<?php echo $data['id'];  ?>" data-bs-toggle="pill" data-bs-target=".reviews" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" onclick="showReviews(this.id)">Reviews</button>
              </li>
            </ul>


            <div class="tab-content" id="pills-tabContent">

          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="description">

              <p class="description-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>
              <p class="description-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>
            </div>



            <div class="table-responsive">

            <div class="table">

              <h4 class="nutrition">nutrition facts</h4>
              <table class="nutrition-table">
                <tr>
                  <td colspan="3"><strong>Supplement Facts</strong> </td>
                </tr>
                <tr>
                  <td colspan="3"><strong>Serving Size:</strong> <?php echo $data['nutrition']['serving_size'];  ?></td>
                </tr>
                <tr>
                  <td colspan="3"><strong>Serving Per Container:</strong> <?php echo $data['nutrition']['serving_per_container'];  ?></td>
                </tr>

                <tr>
                  <td> </td>
                  <th> Amount Per Serving</th>
                  <th> %Daily Value*</th>
                </tr>

                <?php
        foreach ($data['nutrition']['facts'] as $key => $value) {
        ?>
        <TR>

          <Td> <?php echo $value['item']; ?>  </Td>
          <Td> <?php echo $value['amount_per_serving']; ?> <?php echo $value['unit']; ?> </Td>
          <Td> <?php echo $value['daily_value']; ?>  </Td>
        </TR>
        <?php
        }
        ?>


                <tr>
                  <td colspan="3">* Percent Daily Values are based on a 2,000 calorie diet. Your daily values may be higher or lower depending on your calorie needs</td>
                </tr>
              </table>
            </div>

            </div>
          </div>

            <div class="reviews tab-pane fade fluid" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

              <div class="row">

                <div class="fh1">
              <div class="testimonial-left">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators whitebutoon">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                      aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                      aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                      aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active ">
                      <div class="row align-items-center">
                  <div class="col-lg-6 final">
                    <div class="pic">
                      <img class="img-fluid" src="projectImages/<?php echo $data['reviews']['image'];  ?>">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="p2">
                      <h4 class="final1"><?php echo $data['reviews']['reviewer_name'];  ?></h4>
                      <h5 class="final1"><?php echo $data['reviews']['city'];  ?> - <?php echo $data['reviews']['date'];  ?> <?php echo $data['reviews']['rating'];  ?></h5>
                      <p><?php echo $data['reviews']['review'];  ?> </p>
                    </div>
                  </div>
                </div>
                    </div>

                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>

            </div>


              <button class="reviews-btn" onclick="showForm(this)">Add Your Review</button>
              <form method="POST" enctype="multipart/form-data" id="reviewForm">
                  <p>Image </p>
                <p> <input type="file" id="Image" name="picture"> </p>
                <p>Rate the Food</p>
                <input type="range" name="volume"  min="0" max="100" value="50" step="20" class="slider" id="myRange">
                <p>Name</p>
                <input class="name-rev" type="text" placeholder="First and Last name" name="name" size="20">
                <p>City </p>
                <input class="name-rev" type="text" name="city" id="city_textbox" placeholder="City">
                <p>Review</p>


                   <p id="Error-message"> </p>
                  <textarea class="rev-input" id="revIn" onkeyup="textCount(this)" type="text" placeholder="Type your review here max 500 characters" name="review" size="20"></textarea>
                  <p>
                  <span id="text-count">0</span>
                  <span id="out500">/500</span>
                </p>
                <input type="hidden" name="id" id="id" value="<?php echo $data['id'];  ?>">

                  <button class="reviews-btn2" type="submit" name="submit" onclick="checkText(this)">Submit</button>

              </form>

          </div>

            </div>

            </div>


      <?php include 'include/inc.footer.php'; ?>
