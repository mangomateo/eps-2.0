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
    <?php include ("inc/navbar.php"); ?> <!-- navbar -->
    <div class="container my-5"> <!-- .container -->

      <h5 class="text-center my-5 display-4">Frequently Asked Questions</h5>

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
                        <h3 class="mb-0 text-center">
                            What areas do you offer your services? <i class="fa fa-angle-down rotate-icon"></i>
                        </h3>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionEx">
                    <div class="card-body">
                      <p>Based out of Rockwood, Ontario, I service Rockwood, Guelph, Acton, Georgetown and surrounding areas. For grooming services I will often groom out of my own home. However, I am happy to groom in your home to ease the stress of your pet, providing you are able to offer a space to bathe your dog.</p>
                    </div>
                </div>
            </div> <!-- /Accordion card -->


            <!-- Accordion card 2 -->
            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingTwo">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <h3 class="mb-0 text-center">
                            Why does my dog need to be walked everyday? <i class="fa fa-angle-down rotate-icon"></i>
                        </h3>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordionEx">
                    <div class="card-body">
                      <p>Dogs are highly intelligent and active animals. Without daily exercise and the opportunity to explore and socialize, they are not able to live full and satisfied lives. They will become restless, disobedient, lazy and destructive.</p>
                      <p>Learn more about the benefits of daily walks <a href="blog/001.php" class="blueLink">here</a>.</p>
                    </div>
                </div>
            </div> <!-- /Accordion card -->


            <!-- Accordion card 3 -->
            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingThree">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        <h3 class="mb-0 text-center">
                            Why should I hire a professional dog walker? <i class="fa fa-angle-down rotate-icon"></i>
                        </h3>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordionEx">
                    <div class="card-body">
                      <p>Aside from the pure benefit of convenience and being a stress-less pet owner, a good professional dog walker also assists in leash training and basic obedience. A professional dog walker, given the opportunity, will help ensure that the time you spend with your pet is a joyful, relaxing experience.</p>
                      <p>Read more about the advantages of a hiring a professional dog walker <a href="blog/002.php" class="blueLink">here</a>.</p>
                    </div>
                </div>
            </div> <!-- /Accordion card -->


            <!-- Accordion card 4 -->
            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingFour">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                        <h3 class="mb-0 text-center">
                            I'm interested! What's next? <i class="fa fa-angle-down rotate-icon"></i>
                        </h3>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordionEx">
                    <div class="card-body">
                      <p>Great! I'm so excited to meet with you and your pets!</p>
                      <p>Send me an <a href="contact.php" class="blueLink">e-mail</a> to schedule a complimentary meet and greet!</p>
                    </div>
                </div>
            </div> <!-- /Accordion card -->


            <!-- Accordion card 5 -->
            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingFive">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                        <h3 class="mb-0 text-center">
                            Why do I need a meet and greet? <i class="fa fa-angle-down rotate-icon"></i>
                        </h3>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordionEx">
                    <div class="card-body">
                      <p>You wouldn't send your kids to daycare without meeting the daycare provider, so of course you want to screen your potential dog walker for the same reasons! We will have an opportunity to meet and an opportunity for me to start understanding your dog's temperament, for a personalized approach! This meet and greet also gives me an opportunity to meet  and interact with your dog in an environment that he or she feels comfortable in! This is crucial to establishing good trust and a good working bond.</p>
                    </div>
                </div>
            </div> <!-- /Accordion card -->


            <!-- Accordion card 6 -->
            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingSix">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                        <h3 class="mb-0 text-center">
                            What is included in a 30 minute walk? <i class="fa fa-angle-down rotate-icon"></i>
                        </h3>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#accordionEx">
                    <div class="card-body">
                      <p>A 30 minute walk gives your pet an opportunity to spend some energy while enjoying the neighbourhood, safely socialize with the other people and animals that we come across and to use the facilities. During the walk your dog and I will work on safe handling behaviours and other enriching activities.</p>
                    </div>
                </div>
            </div> <!-- /Accordion card -->


            <!-- Accordion card 7 -->
            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingSeven">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                        <h3 class="mb-0 text-center">
                            What is included in a 45 minute walk? <i class="fa fa-angle-down rotate-icon"></i>
                        </h3>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven" data-parent="#accordionEx">
                    <div class="card-body">
                      <p>A 45 minute walk gives your pet the opportunity to indulge in an immersive experience of play while exploring the neighbourhood and surrounding parks. Your pet will have time to play, safely socialize, learn, grow and of course, use the facilities. </p>
                    </div>
                </div>
            </div> <!-- /Accordion card -->


            <!-- Accordion card 8 -->
            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingEight">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                        <h3 class="mb-0 text-center">
                            What days and times do you offer your services? <i class="fa fa-angle-down rotate-icon"></i>
                        </h3>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapseEight" class="collapse" role="tabpanel" aria-labelledby="headingEight" data-parent="#accordionEx">
                    <div class="card-body">
                      <p>Primarily, I work when you work! Most clients are booked from Monday - Friday between 9 and 5. However, I am available select evenings and weekends at a small after hours premium.  </p>
                    </div>
                </div>
            </div> <!-- /Accordion card -->

          </div><!--/Accordion wrapper-->
        </div> <!-- /.col -->

        <div class="col-md-1 col-lg-2"></div> <!-- dummy width column -->
      </div>

      <?php include ("inc/footer.php"); ?>
    </div> <!-- /.container -->
    <?php include ("inc/scripts.php"); ?>
  </body>
</html>
