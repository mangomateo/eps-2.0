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
          <h1 class="text-center em-text">Grooming Sevices</h1>
        </div>
      </div> <!-- /Header: Services & Rates -->

      <div class="row">
        <div class="col-md-1 col-lg-2"></div> <!-- dummy width column -->

        <div class="col"> <!-- MAIN CONTENT DIV -->

          <div class="row"> <!-- Nested: On Site Grooming -->
              <div class="col bg-info mx-2 my-2 rounded">
                <h3 class="em-text text-center p-2">On-Site Grooming</h3>

                <p>Rates of grooming fluctuate and are determined based on breed, size, coat condition and temperament.</p>

                <p>All grooming packages include:</p>

                <ul>
                  <li>Nail Trim</li>
                  <li>Ear Clean</li>
                  <li>Anal Gland Expression (If Requested)</li>
                  <li>Bath & Dry</li>
                  <li>Brush Out</li>
                  <li>Haircut/Trimming as Requested</li>
                </ul>

                <p class="text-center font-weight-bold font-italic">
                  Add the de-shed option onto any groom for an extra $10
                </p>

                <hr>

                <p class="em-text">Live in Rockwood? Enjoy our complimentary pick-up/drop-off service for your convenience! No need to leave the comfort of your home. We will come pick fido up and drop him off looking fresh!</p>

              </div>
          </div> <!-- /Nested: On Site Grooming -->

          <div class="row"> <!-- Nested: In Home Grooming -->
              <div class="col bg-info mx-2 my-2 rounded"> <!-- .groomingCol -->
                <h3 class="text-center em-text p-2">In-Home Grooming</h3>

                <p>If you you’re looking for a tidy up or between-groom service, let us come to you! We offer a select number of services in your home for the utmost convenience!</p>

                <div class="row"> <!-- Nested-Nested: In Home Packages -->
                    <div class="col bg-light mx-2 my-2 rounded">
                      <h3 class="text-center font-weight-bold p-2">Refresh Package - $25</h3>
                      <ul>
                        <li>Nail Trim</li>
                        <li>Ear Clean</li>
                        <li>Sanitary Trim</li>
                        <li>Shave Pads</li>
                        <li>Brush Out</li>
                      </ul>
                    </div>
                    <div class="col bg-light mx-2 my-2 rounded">
                      <h3 class="text-center font-weight-bold p-2">Touch-Up Package - $35</h3>
                      <ul>
                        <li>Face Trim</li>
                        <li>Tail Trim</li>
                        <li>Paw Trim</li>
                        <li>Nail Trim</li>
                        <li>Ear Clean</li>
                        <li>Sanitary Trim</li>
                        <li>Shave Pads</li>
                        <li>Brush Out</li>
                      </ul>
                    </div>
                </div> <!-- /Nested-Nested: In Home Packages -->
              </div> <!-- /.groomingCol -->

          </div> <!-- /Nested: In Home Grooming -->

          <div class="row"> <!-- CALL TO ACTION BOX: CONTACT US -->
            <div class="col p-5 rounded" id="contactDiv">
              <h2 class="text-center em-text">Contact us <a href="contact.php" class="blueLink">here</a> to inquire further about grooming services!</h2>
            </div>
          </div> <!-- /CALL TO ACTION BOX: CONTACT US -->

        </div> <!-- /MAIN CONTENT DIV -->

        <div class="col-md-1 col-lg-2"></div> <!-- dummy width column -->
      </div>



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
