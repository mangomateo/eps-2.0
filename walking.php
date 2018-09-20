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
          <h1 class="text-center em-text">Walking Services</h1>
        </div>
      </div> <!-- /Header: Services & Rates -->

      <div class="row">
        <div class="col-md-1"></div> <!-- dummy width column -->

        <div class="col"> <!-- MAIN CONTENT DIV -->
          <p>If you want to know that your loved one is getting undivided attention, or if your pup can be nervous or unpredictable around other dogs, then this is the service for you!</p>

          <div class="row"> <!-- Nested: Solo Walks -->

            <div class="col-md-6 bg-info my-2 rounded-left">

              <h3 class="text-center em-text p-2">Solo Walks</h3>

              <div class="text-center">
                <i class="fas fa-paw fa-7x pb-2"></i>
              </div>

              <ul>
                <li>15 Minutes - $13</li>
                <li>30 Minutes - $20</li>
                <li>45 Minutes - $25</li>
              </ul>

              <p>Have more than one dog in the family?</p>

              <ul>
                <li>Each additional dog - $10</li>
              </ul>
            </div>
            <div class="col-md-6 bg-info my-2 p-4 rounded-right">
              <h3 class="text-center">Package Discount</h3>

              <p>Have your pet walked 5 days a week for a month, or schedule walks ahead of time for when you need them most!</p>

              <ul>
                <li>15 Minute Solo Walk x 20 - $10 / Walk</li>
                <li>30 Minute Solo Walk x 20 - $16 / Walk</li>
                <li>45 Minute Solo Walk x 20 - $20 / Walk</li>
              </ul>

              <p>Have more than one dog in the family?</p>

              <ul>
                <li>Each additional dog - $8</li>
              </ul>
            </div>
          </div> <!-- /Nested: Solo Walks -->

          <!-- WALKING FOOTER -->
          <div class="row">
            <div class="col rounded bg-info pull-up">
              <h4 class="text-center">Packages not for you? Pay by the walk or by the week!</h4>
            </div>
          </div> <!-- /WALKING FOOTER -->

          <p class="m-4">If your dog loves to socialize and spends all day dreaming about making new friends, then you may want to consider group walks to socialize your pup and make his dreams come true!</p>

          <div class="row"> <!-- Nested: Group Walks -->
            <div class="col-md-6 bg-info my-2 rounded-left">
              <h3 class="em-text text-center p-2">Group Walks</h3>

              <div class="text-center">
                <i class="fas fa-paw fa-7x pb-2"></i>
              </div>

              <ul>
                <li>45 Minute Group Walk - $20</li>
              </ul>

              <p>Have more than one dog in the family?</p>

              <ul>
                <li>Each additional dog - $8</li>
              </ul>
            </div>
            <div class="col-md-6 bg-info my-2 p-4 rounded-right">
              <h3 class="text-center">Package Discount</h3>

              <p>Make sure your social pet is getting all of the socialization it needs! Have your pet walked 5 days a week for a month!</p>

              <ul>
                <li>45 Minute Group Walk x 20 - $16 / Walk</li>
              </ul>

              <p>Have more than one dog in the family?</p>

              <ul>
                <li>Each additional dog - $8</li>
              </ul>
            </div>
          </div> <!-- /Nested: Group Walks -->

          <!-- WALKING FOOTER -->
          <div class="row">
            <div class="col rounded bg-info pull-up">
              <h4 class="text-center">Packages not for you? Pay by the walk or by the week!</h4>
            </div>
          </div> <!-- /WALKING FOOTER -->

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
