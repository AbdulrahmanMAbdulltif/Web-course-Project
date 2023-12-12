function addToCartDetails() {
  var counter = document.querySelector("#counter");
  var text1 = counter.textContent;
  var number1 = Number(text1);

  var counterCart = document.getElementById("counter-cart");
  var text = counterCart.textContent;
  var number = Number(text);

  counter.innerHTML = number + number1;
}






 function addToCartIndex() {
  var counterIndex = document.getElementById("counter-index");
  var text = counterIndex.textContent;
  var number = Number(text);
  counterIndex.innerHTML = number += 1;
}





function textCount(textarea) {

  var length = textarea.value.length;

  var max = 500;
  if (length > max) {


    textarea.value = textarea.value.substring(0, 500)
  } else {


    document.getElementById("text-count").innerHTML = length;

  }
}


function checkText(button) {
  var nameLength = document.querySelector(".name-rev").value.length;

  if (nameLength == 0) {
    document.querySelector(".name-rev").value = "Customer";
  }

  var length = document.getElementById("revIn").value.length;
  if (length == 0) {
    button.setAttribute('type', 'button');
    document.getElementById("revIn").style.border = "3px solid red";
    document.getElementById("revIn").style.borderRadius = "0";
    document.getElementById("Error-message").innerHTML = "Please type your review";
  } else {
    button.setAttribute('type', 'onclick');
  }
}


const form = document.querySelector("#review");
document.onload = setTimeout(hideFrom, 0);

function hideFrom() {
  form.style.marginLeft = "120rem";
  form.style.display = "none";
  marginTop();

}

function showForm(source) {
  form.style.display = "block";
  document.onload = setTimeout(setMargin, 1);

}

function setMargin() {
  form.style.marginLeft = "0";
}





function incOrder() {
  var counterCart = document.getElementById("counter-cart");
  var text = counterCart.textContent;
  var number = Number(text);
  counterCart.innerHTML = number += 1;

}

function desOrder() {
  var counterCart = document.getElementById("counter-cart");
  var text = counterCart.textContent;
  var number = Number(text);
  if (number > 1) {
    counterCart.innerHTML = number - 1;
  } else {
    counterCart.innerHTML = 1;
  }
}

function showReviews(id) {
$.ajax({
  url:"php/review.php",
  method:"GET",
  data:{meal_id:id,getMealReviews:true},
  dataType:"json",
  success:function(data){
  if (data==false) {
  $(".fh1").html("<h3>No Reviews</h3>");
  } else {
  $(".fh1").html('<div class="testimonial-left"><div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"><div class="carousel-indicators whitebutoon"></div><div class="carousel-inner"></div><button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button><button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></button></div></div>');
  data.forEach(function(Value,key){
  var rating = parseInt(Value.rating/20);
  var ratingStar = '';
  for (var j = 0; j < rating; j++) {
  ratingStar += '&#11088;';
  }
  if (key==0) {
  $(".carousel-indicators").append('<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="'+key+'" class="active" aria-current="true" aria-label="Slide '+key+'"></button>');
  $(".carousel-inner").append('<div class="carousel-item active "><div class="row align-items-center"><div class="col-lg-6 final"><div class="pic"><img class="img-fluid" src="reviewImages/'+Value.image+'"></div></div><div class="col-lg-6"><div class="p2"><h4 class="final1">'+Value.reviewer_name+'</h4><h5 class="final1">'+Value.city+' - '+Value.date+' '+ratingStar+'</h5><p>'+Value.review+' </p></div></div></div></div>');
  } else {
  $(".carousel-indicators").append('<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="'+key+'"  aria-current="true" aria-label="Slide '+key+'"></button>');
  $(".carousel-inner").append('<div class="carousel-item "><div class="row align-items-center"><div class="col-lg-6 final"><div class="pic"><img class="img-fluid" src="reviewImages/'+Value.image+'"></div></div><div class="col-lg-6"><div class="p2"><h4 class="final1">'+Value.reviewer_name+'</h4><h5 class="final1">'+Value.city+' - '+Value.date+' '+ratingStar+'</h5><p>'+Value.review+' </p></div></div></div></div>');
  }

  });



  }

  }
})
}


$(document).on("submit","#reviewForm",function(e){
e.preventDefault();
var id = $("#id").val();
$.ajax({
url:"php/review.php",
method:"POST",
data:new FormData(this),
contentType: false,
cache: false,
processData: false,
success:function(data){
showReviews(id);

}
});
});
