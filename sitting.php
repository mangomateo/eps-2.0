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
          <h4 class="text-center mt-5 mb-2">In Home Pet Sitting</h4>
        </div>
      </div> <!-- /Header: Services & Rates -->

      <div class="row">
        <div class="col-md-1 col-lg-2"></div> <!-- dummy width column -->


        <div class="col"> <!-- accordionDiv -->

          <p class="mb-5">In home pet sitting offers your pet the opportunity to stay at home while you’re away. Forget the stress and anxiety of leaving your pet in an unknown facility with other unknown animals. The comfort of home is the comfort your pets desire! We are happy to try and accommodate all pets and work to develop a plan specific to each pet’s needs that keeps your mind at ease during your absence. For this reason, pricing is based on the needs of your pet and will be negotiated for each individual family. </p>

          <!--Accordion wrapper-->
          <div class="accordion mb-5" id="accordionEx" role="tablist" aria-multiselectable="true">


            <!-- Accordion card 1: Part-Time Care -->
            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingOne">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <h3 class="mb-0 text-center category">
                            Part-Time Care <i class="fa fa-angle-down rotate-icon"></i>
                        </h3>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionEx">
                    <div class="card-body">
                      <p>Part-Time Care may be just what your pet needs!</p>

                      <p>Our most popular Part-Time package includes:</p>

                      <ul>
                        <li>3 - hour long visits (Morning, Afternoon, Evening)</li>
                        <li>2 - 1/2 hour walks (Morning and Evening)</li>
                        <li>Meal distribution</li>
                        <li>Fresh water at every visit</li>
                        <li>Medication administration</li>
                        <li>Play time</li>
                        <li>Potty breaks</li>
                        <li>Unlimited love and affection</li>
                      </ul>
                    </div>
                </div> <!-- /Card body -->
            </div>  <!-- Accordion card -->


            <!-- Accordion card 2: Full-Time Care -->
            <div class="card">

              <!-- Card header -->
              <div class="card-header" role="tab" id="headingTwo">
                  <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                      <h3 class="mb-0 text-center">
                          Full-Time Care <i class="fa fa-angle-down rotate-icon"></i>
                      </h3>
                  </a>
              </div>

              <!-- Card body -->
              <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordionEx">
                  <div class="card-body">
                    <p>For pets that need someone close through the night, we are happy to offer full-time care options.</p>

                    <p>Our most popular full-time package includes:</p>

                    <ul>
                      <li>Guaranteed company from 7:00 PM - 7:00 AM (overnight stay)</li>
                      <li>1 - 1 hour mid-day visit</li>
                      <li>2 - 1/2 hour walks (Morning and Evening)</li>
                      <li>Meal distribution</li>
                      <li>Fresh water at every visit</li>
                      <li>Medication administration</li>
                      <li>Play time</li>
                      <li>Potty breaks</li>
                      <li>Unlimited love and affection</li>
                    </ul>

                  </div> <!-- /Card body -->
              </div>  <!-- Accordion card -->
            </div>


            <!-- Accordion card 3: Extras -->
            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingThree">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                      <h3 class="mb-0 text-center">
                          Add Some Extra Love <i class="fa fa-angle-down rotate-icon"></i>
                      </h3>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordionEx">
                  <div class="card-body">
                    <p>Want to come home to a fresh pet?  Tired of dragging your reluctant dog into the salon to hear there's a 30 minute wait for a simple nail trim? I hear ya! Conveniently, I can help you get all of your basic necessities done in your home! Add some extra love to your package and remove some stress from your life!</p>

                    <p>Add any <em>three</em> items to package for $25!</p>

                    <ul>
                      <li>Nail Trim - $10</li>
                      <li>Face Trim - $10</li>
                      <li>Paw Trim - $10</li>
                      <li>Brush Out (Coat Condition Dependent) - $12+</li>
                      <li>Sanitary Trim - $7</li>
                      <li>Ana Gland Expression - $7</li>
                    </ul>

                    <p><strong>OR</strong> take care of the whole shebang and add a full groom into your package! (Rates Vary)</p>

                  </div>
                </div> <!-- /Card body -->
            </div>  <!-- Accordion card -->

          </div> <!--/.Accordion wrapper-->

        </div> <!-- /accordionDiv -->


        <div class="col-md-1 col-lg-2"></div> <!-- dummy width column -->
      </div>



      <div class="row mt-5"> <!-- HST -->
        <div class="col text-center">
          <h5>*All Prices are Subject to HST.</h5>
        </div>
      </div> <!-- /HST -->
      <?php include ("inc/footer.php"); ?>
    </div> <!-- /mainContainer -->

    <?php include ("inc/scripts.php"); ?>
  </body>
</html>
