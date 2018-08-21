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

                      <h4 class="mt-4">Package Rate</h4>
                      <p>Have your pet walked 5 days a week for a month, or schedule walks ahead of time for when you need them most!</p>
                      <div class="row">
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
                        <li>Each additional dog - $10</li>
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

                        <h4>Package Rate</h4>
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


            <!-- Accordion card 3: Puppy Visits -->
            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingThree">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        <h3 class="mb-0 text-center">
                            Puppy Visits <i class="fa fa-angle-down rotate-icon"></i>
                        </h3>
                        <h6 class="text-center">(Up to 6 months)</h6>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordionEx">
                  <div class="card-body">
                    <p>It is crucial for your puppy's training and development that your puppy is not alone for more than 3 hours at a time. That's a huge commitment! When you're not available throughout the day, I am!</p>
                    <p>Puppy visits include 30 minutes of play time and a potty break (or two). Don't take this at face value though! Every chance your puppy has to play is a chance to learn! Every puppy visit with me includes valuable training opportunities that I will use to help your puppy develop into the family member you desire!</p>
                    <ul>
                      <li>30 Minute Puppy Visit - $20</li>
                    </ul>
                    <p>Going to be gone all day?</p>
                    <ul>
                      <li>Each additional visit in a day - $8</li>
                    </ul>
                  </div>
                </div> <!-- /Card body -->
            </div>  <!-- Accordion card -->



            <!-- Accordion Card 4: Cat visits -->
            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingFour">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                        <h3 class="mb-0 text-center">
                            Cat Visits <i class="fa fa-angle-down rotate-icon"></i>
                        </h3>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordionEx">
                    <div class="card-body">
                      <p>Cats are typically self sufficient, but if you're leaving for an extended period of time or your cat  needs mid-day visits for personal or medical reasons, I'm here for you!</p>
                      <ul>
                        <li>30 Minute Cat Visit - $15</li>
                      </ul>
                      <p>Looking for multiple visits in a day?</p>
                      <ul>
                        <li>Each additional visit in a day - $7</li>
                      </ul><!-- /soloWalks -->
                    </div>
                </div> <!-- /Card body -->
            </div>  <!-- Accordion card -->



            <!-- Accordion card 5: Pet Sitting -->
            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingFive">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                        <h3 class="mb-0 text-center">
                            Pet Sitting <i class="fa fa-angle-down rotate-icon"></i>
                        </h3>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordionEx">
                    <div class="card-body">
                      <p>I am happy to try and accommodate all pets and work to develop a plan specific to each pet’s needs that keeps your mind at ease during your absence. For this reason, pricing is based on the needs of your pet and will be negotiated for each individual family.</p>
                      <p>Contact me <a href="contact.php" class="blueLink">here</a> to inquire further about pet sitting services!</p>
                    </div>
                </div> <!-- /Card body -->
            </div>  <!-- Accordion card -->



            <!-- Accordion card 6: Extras -->
            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingSix">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                        <h3 class="mb-0 text-center">
                            Add Some Extra Love! <i class="fa fa-angle-down rotate-icon"></i>
                        </h3>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#accordionEx">
                    <div class="card-body">
                      <p>Tired of dragging your reluctant dog into the salon to hear there's a 30 minute wait for a simple nail trim? I hear ya! Conveniently, I can help you get all of your basic necessities done in your home! With a minimum of 24 hours notice, add any amount of extra love you want!</p>
                      <p>Add any <em>three</em> items to your service for $25!</p>
                      <div class="row">
                        <div class="col">
                          <ul>
                            <li>Nail Trim - $10</li>
                            <li>Face Trim - $10</li>
                            <li>Paw Trim - $10</li>
                            <li>Brush Out (Coat Condition Dependent) - $12+</li>
                          </ul>
                        </div>
                        <div class="col-sm">
                          <ul>
                            <li>Sanitary Trim - $7</li>
                            <li>Anal Gland Expression - $7</li>
                            <li>Medicine Administration - $5</li>
                          </ul>
                        </div>
                      </div> <!-- /row -->
                    </div>
                </div> <!-- /Card body -->
            </div>  <!-- Accordion card -->



            <!-- Accordion card 7: Grooming -->
            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingSeven">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                        <h3 class="mb-0 text-center">
                            Grooming <i class="fa fa-angle-down rotate-icon"></i>
                        </h3>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven" data-parent="#accordionEx">
                    <div class="card-body">
                      <p>Rates of grooming fluctuate and are determined based on breed, coat and temperament. If you’re interested in a grooming service, please contact me <a href="contact.php" class="blueLink">here</a>.</p>
                    </div>
                </div> <!-- /Card body -->
            </div>  <!-- Accordion card -->


            <!-- Accordion card 8: Other Services  -->
            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingEight">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                        <h3 class="mb-0 text-center">
                            Other Services <i class="fa fa-angle-down rotate-icon"></i>
                        </h3>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapseEight" class="collapse" role="tabpanel" aria-labelledby="headingEight" data-parent="#accordionEx">
                    <div class="card-body">
                      <p>Don't see the services or package you're looking for?</p>
                      <p>Do you have another domestic pet that you need care for?</p>
                      <p>Feel free to <a href="contact.php">contact me</a> with what you need and I will be happy to try and accommodate  personalized packages!</p>
                      <p>For more information, visit the <a href="faqs.php" class="blueLink">FAQ page</a>.</p>
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
