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
          <h1 class="text-center em-text">Other Services</h1>
        </div>
      </div> <!-- /Header: Services & Rates -->

      <div class="row">
        <div class="col-md-1"></div> <!-- dummy width column -->

        <div class="col"> <!-- MAIN CONTENT DIV -->
          <p>Don't see the services or package you're looking for?</p>
          <p>Do you have another domestic pet that you need care for?</p>
          <p>Feel free to <a href="contact.php" class="blueLink">contact us</a> with what you need and we will be happy to try and accommodate personalized packages!</p>
          <p>For more information, visit the <a href="faqs.php" class="blueLink">FAQ page</a>.</p>

          <div class="row"> <!-- CALL TO ACTION BOX: CONTACT US -->
            <div class="col p-5 mt-2 rounded" id="contactDiv">
              <h2 class="text-center em-text">Contact us <a href="contact.php" class="blueLink">here</a> to inquire further about walking services!</h2>
            </div>
          </div> <!-- /CALL TO ACTION BOX: CONTACT US -->

        </div> <!-- /MAIN CONTENT DIV -->


        <div class="col-md-1"></div> <!-- dummy width column -->
      </div>



      <div class="row mt-5"> <!-- HST -->
        <div class="col text-center">
          <h5>*All Prices are Subject to HST.</h5>
        </div>
      </div> <!-- /HST -->
      <?php  ?>
    </div> <!-- /mainContainer -->

    <?php
      include ("inc/footer.php");
      include ("inc/scripts.php");
    ?>
  </body>
</html>
