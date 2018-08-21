<!DOCTYPE html>

<html>

  <head>
    <?php
      include ("inc/gAnalytics.php");
      $pageTitle = "FAQs - Essential Pet Services";
      include ("inc/header.php");
    ?>
  </head>

  <body>
    <?php
      include ("inc/banner.php");
      include ("inc/navbar.php");
    ?> <!-- /navbar -->
    <div class="container my-5"> <!-- .container -->

      <h5 class="text-center my-5 display-4 em-text">Frequently Asked Questions</h5>

      <div class="row">
        <div class="col-md-1 col-lg-2"></div> <!-- dummy width column -->
        <div class="col">

          <!--Accordion wrapper-->
          <div class="accordion mb-5" id="accordionEx" role="tablist" aria-multiselectable="true">


            <!-- Accordion card 1 -->
            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingOne">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <h3 class="mb-0 text-center em-text">
                            What areas do you offer your services? <i class="fa fa-angle-down rotate-icon"></i>
                        </h3>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionEx">
                    <div class="card-body">
                      <p>Based out of Rockwood, Ontario, we service Rockwood, Guelph, Acton and surrounding areas.</p>
                    </div>
                </div>
            </div> <!-- /Accordion card -->


            <!-- Accordion card 2 -->
            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingTwo">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <h3 class="mb-0 text-center em-text">
                            I'm interested! What's next? <i class="fa fa-angle-down rotate-icon"></i>
                        </h3>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordionEx">
                    <div class="card-body">
                      <p>Great! We're so excited to meet with you and your pets! Send us an <a href="contact.php" class="blueLink"></a>e-mail to schedule a complimentary meet and greet!</p>
                    </div>
                </div>
            </div> <!-- /Accordion card -->


            <!-- Accordion card 3 -->
            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingThree">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        <h3 class="mb-0 text-center em-text">
                            Why do I need a meet and greet? <i class="fa fa-angle-down rotate-icon"></i>
                        </h3>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordionEx">
                    <div class="card-body">
                      <p>Our complimentary meet and greet will give us an opportunity to answer all of your questions, begin establishing a bond with your pets and start a client file, should you choose to book with us. Further, having an opportunity to interact with your pets in an environment that they feel comfortable in is important for establishing trust and allows us to begin creating a personalized approach for each, individual pet. </p>
                    </div>
                </div>
            </div> <!-- /Accordion card -->


            <!-- Accordion card 4 -->
            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingFour">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                        <h3 class="mb-0 text-center em-text">
                            Why does my dog need to be walked every day? <i class="fa fa-angle-down rotate-icon"></i>
                        </h3>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordionEx">
                    <div class="card-body">
                      <p>Dogs are highly intelligent and active animals. Without daily exercise and the opportunity to explore and socialize, they are not able to live full and satisfied lives. They will become restless, disobedient, lazy and destructive.  Learn more about the benefits of daily walks <a href="blog/001.php" class="blueLink">here</a>.</p>
                    </div>
                </div>
            </div> <!-- /Accordion card -->


            <!-- Accordion card 5 -->
            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingFive">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                        <h3 class="mb-0 text-center em-text">
                            Why should I hire a professional dog walker? <i class="fa fa-angle-down rotate-icon"></i>
                        </h3>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordionEx">
                    <div class="card-body">
                      <p>Aside from the pure benefit of convenience and being a stress-less pet owner, a good professional dog walker also assists in leash training and basic obedience. A professional dog walker, given the opportunity, will help ensure that the time you spend with your pet is a joyful, relaxing experience. <strong>Read more about the advantages of a hiring a professional dog walker <a href="blog/002.php" class="blueLink">here</a>.</strong></p>
                    </div>
                </div>
            </div> <!-- /Accordion card -->


            <!-- Accordion card 6 -->
            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingSix">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                        <h3 class="mb-0 text-center em-text">
                            What days and times do you offer your services? <i class="fa fa-angle-down rotate-icon"></i>
                        </h3>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#accordionEx">
                    <div class="card-body">
                      <p>Primarily, we work when you work! Most clients are booked from Monday - Friday between 9 and 5. Pet sitting packages are scheduled on a case by case basis outside of these hours.</p>
                    </div>
                </div>
            </div> <!-- /Accordion card -->


            <!-- Accordion card 7 -->
            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingSeven">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                        <h3 class="mb-0 text-center em-text">
                            What types of payment do you take? <i class="fa fa-angle-down rotate-icon"></i>
                        </h3>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven" data-parent="#accordionEx">
                    <div class="card-body">
                      <p>At this time we happily take cash or e-transfer to <a href="mailto:essentialpetservices@gmail.com">essentialpetservices@gmail.com</a> for all services.</p>
                    </div>
                </div>
            </div> <!-- /Accordion card -->


            <!-- Accordion card 8 -->
            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingEight">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                        <h3 class="mb-0 text-center em-text">
                            When is payment due? <i class="fa fa-angle-down rotate-icon"></i>
                        </h3>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapseEight" class="collapse" role="tabpanel" aria-labelledby="headingEight" data-parent="#accordionEx">
                    <div class="card-body">
                      <p>For single day services such as grooming or a midday visit, payment is due at the time of service. To take advantage of package rates, full payment is due a minimum of 48 hours before the package start date.</p>
                      <p>For pet sitting packages, a 25% non-refundable deposit is due at the time of booking to reserve your dates. The remainder of payment is due a minimum of 24 hours before service start date. </p>
                    </div>
                </div>
            </div> <!-- /Accordion card -->


            <!-- Accordion card 9 -->
            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingNine">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                        <h3 class="mb-0 text-center em-text">
                            What is your cancellation policy? <i class="fa fa-angle-down rotate-icon"></i>
                        </h3>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapseNine" class="collapse" role="tabpanel" aria-labelledby="headingNine" data-parent="#accordionEx">
                    <div class="card-body">
                      <p>For grooming and single day services we request 24 hours notice for cancellations.</p>
                      <p>With 24 hours notice of cancellation within a pre-purchased package (Walking and day visits), the service will be rescheduled at no charge. Less than 24 hours notice will result in the forfeit of the service.</p>
                      <p>Pet-sitting cancellations will result in the loss of the 25% non-refundable deposit.</p>
                    </div>
                </div>
            </div> <!-- /Accordion card -->

          </div><!--/Accordion wrapper-->
        </div> <!-- /.col -->

        <div class="col-md-1 col-lg-2"></div> <!-- dummy width column -->
      </div>

    </div> <!-- /.container -->
    <?php
      include ("inc/footer.php");
      include ("inc/scripts.php");
    ?>
  </body>
</html>
