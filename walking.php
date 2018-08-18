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
          <h4 class="text-center">Walking Sevices</h4>
        </div>
      </div> <!-- /Header: Services & Rates -->

      <div class="row">
        <div class="col-md-1 col-lg-2"></div> <!-- dummy width column -->


        <div class="col"> <!-- accordionDiv -->

          <!--Accordion wrapper-->
          <div class="accordion mb-5" id="accordionEx" role="tablist" aria-multiselectable="true">


            <!-- Accordion card 1: Solo Walks -->
            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingOne">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <h3 class="mb-0 text-center category">
                            Solo Walks <i class="fa fa-angle-down rotate-icon"></i>
                        </h3>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionEx">
                    <div class="card-body">
                      <p>If you want to know that your loved one is getting undivided attention, or if your pup can be nervous or unpredictable around other dogs, then this is the service for you!</p>

                      <div class="row"> <!-- .row ul -->
                        <div class="col-sm">
                          <ul>
                            <li>15 Minute Solo Walk - $13</li>
                          </ul>
                        </div>
                        <div class="col-sm">
                          <ul>
                            <li>30 Minute Solo Walk - $20</li>
                          </ul>
                        </div>
                        <div class="col-sm">
                          <ul>
                            <li>45 Minute Solo Walk - $25</li>
                          </ul>
                        </div>
                      </div> <!-- /.row ul -->

                      <p>Have more than one dog in the family?</p>
                      <ul>
                        <li>Each additional dog - $10</li>
                      </ul>

                      <h4 class="mt-4">Package Discount</h4>
                      <p>Have your pet walked 5 days a week for a month, or schedule walks ahead of time for when you need them most!</p>
                      <div class="row">
                        <div class="col-md">
                          <ul>
                            <li>15 Minute Solo Walk x 20 - $10 / Walk</li>
                          </ul>
                        </div>
                        <div class="col-md">
                          <ul>
                            <li>30 Minute Solo Walk x 20 - $16 / Walk</li>
                          </ul>
                        </div>
                        <div class="col-md">
                        <ul>
                          <li>45 Minute Solo Walk x 20 - $20 / Walk</li>
                        </ul>
                        </div>
                      </div>
                      <p>Have more than one dog in the family?</p>
                      <ul>
                        <li>Each additional dog - $8</li>
                      </ul> <!-- /soloWalks -->
                    </div>
                </div> <!-- /Card body -->
            </div>  <!-- Accordion card -->


            <!-- Accordion card 2: Group Walks -->
            <div class="card">

              <!-- Card header -->
              <div class="card-header" role="tab" id="headingTwo">
                  <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                      <h3 class="mb-0 text-center">
                          Group Walks <i class="fa fa-angle-down rotate-icon"></i>
                      </h3>
                  </a>
              </div>

              <!-- Card body -->
              <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordionEx">
                  <div class="card-body">
                    <div class="row"> <!-- Desc: group walks -->
                      <div class="col" id="desc2">
                        <p>If your dog <em>loves</em> to socialize and spends it's days dreaming about making new friends,  then you may want to consider group walks to socialize your pup and make his dreams come true!</p>

                        <ul>
                          <li>45 Minute Group Walk - $20</li>
                        </ul>
                        <p>Have more than one dog in the family?</p>
                        <ul>
                          <li>Each additional dog - $10</li>
                        </ul>

                        <h4>Package Discount</h4>
                        <p>Make sure your social pet is getting all of the socialization it needs! Have your pet walked 5 days a week for a month!</p>

                        <ul>
                          <li>45 Minute Group Walk x 20 - $16 / Walk</li>
                        </ul>

                        <p>Have more than one dog in the family?</p>

                        <ul>
                          <li>Each additional dog - $8</li>
                        </ul>

                      </div>
                    </div> <!-- /Desc: group walks -->
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
          <p>Contact us <a href="contact.php" class="blueLink">here</a> to inquire further about walking services!</p>
        </div>
      </div> <!-- /HST -->
      <?php include ("inc/footer.php"); ?>
    </div> <!-- /mainContainer -->

    <?php include ("inc/scripts.php"); ?>
  </body>
</html>
