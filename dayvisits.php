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
    <?php include ("inc/navbar.php"); ?> <!-- navbar -->
    <div class="container mb-5"> <!-- mainContainer -->
      <div class="row my-5"> <!-- Header: Services & Rates -->
        <div class="col">
          <h1 class="text-center">Services & Rates</h1>
          <h4 class="text-center mt-5 mb-2">Day Time Visits</h4>
        </div>
      </div> <!-- /Header: Services & Rates -->

      <div class="row">
        <div class="col-md-1 col-lg-2"></div> <!-- dummy width column -->


        <div class="col"> <!-- accordionDiv -->

          <p class="mb-5">Being away for long periods of time is sometimes unavoidable, but it can be hard on our pets. Even if they don’t need a full day of daycare or midday walk, a midday visit can mean the world to some pets. We can help keep your pets happy and healthy with just a short visit, to brighten up their day until you’re home!</p>

          <!--Accordion wrapper-->
          <div class="accordion mb-5" id="accordionEx" role="tablist" aria-multiselectable="true">


            <!-- Accordion card 1: Puppy Visits -->
            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingOne">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <h3 class="mb-0 text-center category">
                            Puppy Visits <i class="fa fa-angle-down rotate-icon"></i>
                        </h3>
                        <h6 class="text-center">(Up to 6 months)</h6>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionEx">
                    <div class="card-body">
                      <p>It is crucial for your puppy's training and development that your puppy is not alone for more than 3 hours at a time. That's a huge commitment! When you're not available throughout the day, we can help!</p>

                      <p>Puppy visits include 30 minutes of play time and a potty break (or two). Don't take this at face value though! Every chance your puppy has to play is a chance to learn! </p>

                      <ul>
                        <li>30 Minute Puppy Visit - $18</li>
                      </ul>

                      <p>Going to be gone all day?</p>

                      <ul>
                        <li>Each additional visit in a day - $10</li>
                      </ul>

                      <h4 class="mt-4">Package Discount</h4>

                      <ul>
                        <li>30 Minute Visit x 20 - $15</li>
                      </ul>

                    </div>
                </div> <!-- /Card body -->
            </div>  <!-- Accordion card -->


            <!-- Accordion card 2: Dog & Cat Visits -->
            <div class="card">

              <!-- Card header -->
              <div class="card-header" role="tab" id="headingTwo">
                  <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                      <h3 class="mb-0 text-center">
                          Dog & Cat Visits <i class="fa fa-angle-down rotate-icon"></i>
                      </h3>
                  </a>
              </div>

              <!-- Card body -->
              <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordionEx">
                  <div class="card-body">
                    <p>Give your fido or feline a break from the hum drum of counting down to your return. This is also a great package for those pets that need medicine administration throughout the day.</p>

                    <ul>
                      <li>30 Minute Visit - $20</li>
                    </ul>

                    <p>Looking for multiple visits in a day?</p>

                    <ul>
                      <li>Each additional visit in a day - $12</li>
                    </ul>

                    <h4 class="mt-4">Package Discount</h4>

                    <ul>
                      <li>30 Minute Visit X 20 - $17 / Visit</li>
                    </ul>

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
          <p>Contact us <a href="contact.php" class="blueLink">here</a> to inquire further about day time visits!</p>
        </div>
      </div> <!-- /HST -->
      <?php include ("inc/footer.php"); ?>
    </div> <!-- /mainContainer -->

    <?php include ("inc/scripts.php"); ?>
  </body>
</html>
