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
          <h1 class="text-center">Services & Rates</h1>
          <h4 class="text-center mt-5 mb-2">Grooming Sevices</h4>
        </div>
      </div> <!-- /Header: Services & Rates -->

      <div class="row">
        <div class="col-md-1 col-lg-2"></div> <!-- dummy width column -->


        <div class="col"> <!-- accordionDiv -->

          <!--Accordion wrapper-->
          <div class="accordion mb-5" id="accordionEx" role="tablist" aria-multiselectable="true">


            <!-- Accordion card 1: On Site Grooming -->
            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingOne">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <h3 class="mb-0 text-center category">
                            On Site Grooming <i class="fa fa-angle-down rotate-icon"></i>
                        </h3>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionEx">
                    <div class="card-body">
                      <p>Rates of grooming fluctuate and are determined based on breed, size, coat condition and temperament. </p>

                      <p>All grooming packages include:</p>

                      <ul>
                        <li>Nail Trim</li>
                        <li>Ear Clean</li>
                        <li>Anal Gland Expression (If Requested)</li>
                        <li>Bath & Dry</li>
                        <li>Brush Out</li>
                        <li>Haircut/Trimming as Requested</li>
                      </ul>

                      <p>*Add the <strong>de-shed</strong> option onto any groom for an extra $10</p>

                      <p><strong><em>Live in Rockwood? Enjoy our complimentary pick-up/drop-off service for your convenience!</em></strong></p>

                      <p>No need to leave the comfort of your home. We will come pick fido up and drop him off looking fresh!</p>

                    </div>
                </div> <!-- /Card body -->
            </div>  <!-- Accordion card -->


            <!-- Accordion card 2: In Home Grooming -->
            <div class="card">

              <!-- Card header -->
              <div class="card-header" role="tab" id="headingTwo">
                  <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                      <h3 class="mb-0 text-center">
                          In Home Grooming <i class="fa fa-angle-down rotate-icon"></i>
                      </h3>
                  </a>
              </div>

              <!-- Card body -->
              <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordionEx">
                  <div class="card-body">
                    <p>If you you’re looking for a tidy up or between-groom service, let us come to you! We offer a select number of services in your home for the utmost convenience!</p>

                    <div class="row">
                      <div class="col">
                        <strong>Refresh Package - $25+</strong>
                        <ul>
                          <li>Nail Trim</li>
                          <li>Ear Clean</li>
                          <li>Sanitary Trim</li>
                          <li>Shave Pads</li>
                          <li>Brush Out</li>
                        </ul>
                      </div>
                      <div class="col">
                        <strong>Touch-Up Package - $35+</strong>
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
                    </div>

                  </div> <!-- /Card body -->
              </div>  <!-- Accordion card -->
            </div>


          </div> <!--/.Accordion wrapper-->

        </div> <!-- /accordionDiv -->


        <div class="col-md-1 col-lg-2"></div> <!-- dummy width column -->
      </div>



      <div class="row mt-5"> <!-- HST -->
        <div class="col text-center">
          <h5>*All Prices are Subject to HST.</h5>
          <p>Contact us <a href="contact.php" class="blueLink">here</a> to inquire further about grooming services!</p>
        </div>
      </div> <!-- /HST -->
      <?php include ("inc/footer.php"); ?>
    </div> <!-- /mainContainer -->

    <?php include ("inc/scripts.php"); ?>
  </body>
</html>
