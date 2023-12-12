<div class="row">
    <div id="Contact-Us" class="col-md-12 col-lg-6 fluid">
      <ul class="contact-list">
        <li>
          <p>phone:<strong>+966-13-860-0000</strong></p>
        </li>
        <img class="contact-img" src="projectImages\clock.svg">
        <li>
          <p>sun-thr 11:00 - 23:00</p>
        </li>
        <li>
          <p>fri-sat 12:00 - 23:00</p>
        </li>
      </ul>
      <ul class="contact-list">
        <img class="contact-img" src="projectImages\placeholder.svg">
        <li>
          <p>123 KFUPM Student Mall</p>
        </li>
        <li>
          <p>Dhahran 34464</p>
        </li>
      </ul>

      <a class="contact-links" href="#">facebook</a>
      <a class="contact-links" href="#">Twitter</a>
      <a class="contact-links" href="#">Instgram</a>
    </div>

    <img class="img-map col-md-12 col-lg-6" src="projectImages\map.png">

  </div>
    </div>


    <div id="footer" class="row">
      <div class="first-div col-sm-12 col-md-6 col-lg-4">
        <img class="footer-logo" src="projectImages\logo-red.svg">
        <p class="footer-p">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ullam deserunt laborum, laboriosam veritatis quibusdam blanditiis dolor exercitationem velit commodi quae assumenda incidunt voluptas. Corporis ex nulla
          repellendus ullam nihi!</p>
      </div>



      <div class="second-div col-sm-12 col-md-6 col-lg-4">
        <h3>USEFUL LINKS</h3>

        <nav class="footer-nav">
          <ul class="footer-ul">
            <li><a href="#Home">About</a></li>
            <li><a href="#Menu">Menu</a></li>
            <li><a href="#Testimonials">Testimonials</a></li>
            <li><a href="#Contact-Us">Contact Us</a></li>
          </ul>
        </nav>
      </div>


      <div class="third-div col-sm-12 col-md-6 col-lg-4">
        <h3>INTEGRAM FEEDS</h3>
        <a href="">
          <img class="FEEDS-img" src="projectImages/meal1.png" alt="">
        </a><a href="">
          <img class="FEEDS-img" src="projectImages/meal2.png" alt="">
        </a><a href="">
          <img class="FEEDS-img" src="projectImages/meal3.png" alt="">
        </a><a href="">
          <img class="FEEDS-img" src="projectImages/meal4.png" alt="">
        </a><a href="">
          <img class="FEEDS-img" src="projectImages/meal5.png" alt="">
        </a><a href="">
          <img class="FEEDS-img" src="projectImages/meal6.png" alt="">
        </a>
      </div>
    </div>

    <script src="app.js" charset="utf-8"></script>
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
  </body>

  <script>
 var count = (function () {
    var counter = 0;
    return function () { return counter += 1; }
  })();
  function card(id) {
    window.location.href = 'php/cart.php?id='+id+'&back='+location.href;
    document.getElementById("cco").innerHTML = count();
  }

</script>

</html>
