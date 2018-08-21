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
          <img src="https://via.placeholder.com/1000x800" class="img-fluid">
        </div>
        <div class="col-md-6 col-lg-4 my-3">
          <img src="https://via.placeholder.com/1000x800" class="img-fluid">
        </div>
        <div class="col-md-6 col-lg-4 my-3">
          <img src="https://via.placeholder.com/1000x800" class="img-fluid">
        </div>
        <div class="col-md-6 col-lg-4 my-3">
          <img src="https://via.placeholder.com/1000x800" class="img-fluid">
        </div>
        <div class="col-md-6 col-lg-4 my-3">
          <img src="https://via.placeholder.com/1000x800" class="img-fluid">
        </div>
        <div class="col-md-6 col-lg-4 my-3">
          <img src="https://via.placeholder.com/1000x800" class="img-fluid">
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
