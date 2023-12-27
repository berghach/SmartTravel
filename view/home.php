<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-woox-travel.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 580 Woox Travel

https://templatemo.com/tm-580-woox-travel

-->
  <style>
    .search-form #search-form input{
      width: 100%;
      height: 46px;
      background-color: transparent;
      border-radius: 23px;
      border: 1px solid #e0e0e0;
      padding: 0px 20px;
      cursor: pointer;
      margin-bottom: 30px;
    }
  </style>


  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="#" class="logo">
                        <img src="assets/images/logo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="#" class="active">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Reservation</a></li>
                        <li><a href="#">Book Yours</a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4>Discover Our Weekly Offers</h4>
          <h2>Amazing Prices &amp; More</h2>
          <div class="border-button"><a href="about.html">Discover More</a></div>
        </div>
      </div>
    </div>
  </div>

  <div class="search-form">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <form id="search-form" name="gs" method="get" role="search" action="/searchForm.php">
            <div class="d-flex flex-wrap justify-content-center gap-4">
              <div class="col-lg-5">
                  <fieldset>
                    <label for="start_city" class="form-label">Start city</label>
                    <select name="start_city" class="form-select" aria-label="Default select example" id="chooseLocation" onChange="this.form.click()">
                      <option selected>start city</option>
                      <?php
                      foreach ($C as $row) {
                        $value = urlencode($row->getCity_name());
                          echo "<option value=$value>".$row->getCity_name()."</option>";
                      }
                      ?>
                    </select>
                  </fieldset>
              </div>
              <div class="col-lg-5">
                  <fieldset>
                    <label for="destination" class="form-label">Destination</label>
                    <select name="destination" class="form-select" aria-label="Default select example" id="chooseLocation" onChange="this.form.click()">
                      <option selected>destination</option>
                      <?php
                      foreach ($C as $row) {
                        $value = urlencode($row->getCity_name());
                          echo "<option value=$value>".$row->getCity_name()."</option>";
                      }
                      ?>
                    </select>
                  </fieldset>
              </div>
              <div class="col-lg-5">
                <fieldset class="d-flex flex-column">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" name="date" class="date" required>
                </fieldset>
              </div>
              <div class="col-lg-5 d-flex flex-column">
                <!-- <fieldset class="d-flex flex-column"> -->
                    <label for="passenger" class="form-label">Number Of passengers</label>
                    <input type="number" name="passenger" class="col-lg-3" value="1">
                <!-- </fieldset> -->
              </div>
              <div class="col-lg-2 align-self-end">                        
                <fieldset>
                    <button type="submit" class="border-button">Search Results</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="visit-country">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading">
            <h2>Visit One Of Our Countries Now</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="items">
            <div class="row">
              <?php ?>
                <div class="col-lg-12">
                  <div class="item">
                    <div class="row">
                      <div class="col-lg-4 col-sm-5">
                        <div class="image">
                          <img src="assets/images/country-01.jpg" alt="">
                        </div>
                      </div>
                      <div class="col-lg-8 col-sm-7">
                        <div class="right-content">
                          <h4>SWITZERLAND</h4>
                          <span>Europe</span>
                          <div class="main-button">
                            <a href="about.html">Explore More</a>
                          </div>
                          <p>Woox Travel is a professional Bootstrap 5 theme HTML CSS layout for your website. You can use this layout for your commercial work.</p>
                          <ul class="info">
                            <li><i class="fa fa-user"></i> 8.66 Mil People</li>
                            <li><i class="fa fa-globe"></i> 41.290 km2</li>
                            <li><i class="fa fa-dollar-sign"></i> $1.100.200</li>
                          </ul>
                          <div class="text-button">
                            <a href="about.html">Need Directions ? <i class="fa fa-arrow-right"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php ?>
              <div class="col-lg-12">
                <ul class="page-numbers">
                  <li><a href="#"><i class="fa fa-arrow-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h2>Are You Looking To Travel ?</h2>
          <h4>Make A Reservation By Clicking The Button</h4>
        </div>
        <div class="col-lg-4">
          <div class="border-button">
            <a href="reservation.html">Book Yours Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2036 <a href="#">WoOx Travel</a> Company. All rights reserved. 
          <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a> Distribution: <a href="https://themewagon.com target="_blank" >ThemeWagon</a></p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
    $(".option").click(function(){
      $(".option").removeClass("active");
      $(this).addClass("active"); 
    });
  </script>

  </body>

</html>
