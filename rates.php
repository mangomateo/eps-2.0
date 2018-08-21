<!DOCTYPE html>

<html>

  <head>
    <?php
      include ("inc/gAnalytics.php");
      $pageTitle = "Services & Rates - Essential Pet Services";
      include ("inc/header.php");
    ?>
  </head>

  <body>
    <?php
      include ("inc/banner.php");
      include ("inc/navbar.php");
    ?> <!-- /navbar -->
    <div class="container mb-5"> <!-- mainContainer -->
      <div class="row my-5"> <!-- Header: Services & Rates -->
        <div class="col">
          <h1 class="text-center em-text">Services & Rates</h1>
        </div>
      </div> <!-- /Header: Services & Rates -->

      <div class="row"> <!-- content DIV -->
        <div class="col-md-6 col-lg-4 my-3">
          <img src="img/dog009.jpg" class="img-fluid service-img">
          <h3 class="em-text service-text text-center p-1">WALKING SERVICES</h3>
        </div>
        <div class="col-md-6 col-lg-4 my-3">
          <img src="img/dog005.jpg" class="img-fluid service-img">
          <h3 class="em-text service-text text-center p-1">
            <a href="sitting.php">IN-HOME PET SITTING</a>
          </h3>
        </div>
        <div class="col-md-6 col-lg-4 my-3">
          <img src="img/dog004.jpg" class="img-fluid service-img">
          <h3 class="em-text service-text text-center p-1">DAYTIME VISITS</h3>
        </div>
        <div class="col-md-6 col-lg-4 my-3">
          <img src="img/dog003.jpg" class="img-fluid service-img">
          <h3 class="em-text service-text text-center p-1">GROOMING</h3>
        </div>
        <div class="col-md-6 col-lg-4 my-3">
          <img src="img/dog008.jpg" class="img-fluid service-img">
          <h3 class="em-text service-text text-center p-1">OTHER SERVICES</h3>
        </div>
      </div> <!-- /content DIV -->



      <div class="row mt-5"> <!-- HST -->
        <div class="col text-center">
          <h5>*All Prices are Subject to HST.</h5>
        </div>
      </div> <!-- /HST -->
    </div> <!-- /mainContainer -->

    <?php
      include ("inc/footer.php");
      include ("inc/scripts.php");
    ?>
  </body>
</html>
