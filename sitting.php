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
          <h1 class="text-center em-text">Pet Sitting</h1>
        </div>
      </div> <!-- /Header: Services & Rates -->

      <div class="row">
        <div class="col-md-1"></div> <!-- dummy width column -->

        <!-- CONTENT START -->
        <div class="col">
          <p>In home pet sitting offers your pet the opportunity to stay at home while you’re away. Forget the stress and anxiety of leaving your pet in an unknown facility with other unknown animals. The comfort of home is the comfort your pets desire! We are happy to try and accommodate all pets and work to develop a plan specific to each pet’s needs that keeps your mind at ease during your absence. For this reason, pricing is based on the needs of your pet and will be negotiated for each individual family.</p>

          <div class="row"> <!-- NESTED: PT/FT Prices -->
            <div class="col-lg bg-info mx-2 my-2 rounded">
              <h3 class="text-center em-text pt-4">
                Part-Time Care
              </h3>
              <div class="text-center">
                <i class="far fa-clock fa-7x pb-2"></i>
              </div>

              <p>Part-Time Care may be just what your pet needs!</p>

              <p>Our most popular Part-Time package includes:</p>

              <ul>
                <li>3 - hour long visits (Morning, Afternoon, Evening)</li>
                <li>2 - 1/2 hour walks (Morning and Evening)</li>
                <li>Meal distribution</li>
                <li>Fresh water at every visit</li>
                <li>Medication administration </li>
                <li>Play time</li>
                <li>Potty breaks</li>
                <li>Unlimited love and affection</li>
              </ul>
            </div>
            <div class="col-lg bg-info mx-2 my-2 rounded">
              <h3 class="text-center em-text pt-4">
                Full-Time Care
              </h3>
              <div class="text-center">
                <i class="fab fa-creative-commons-sa fa-7x pb-2"></i>
              </div>


              <p>For pets that need someone close through the night, we are happy to offer full-time care options.</p>

              <p>Our most popular full-time package includes:</p>

              <ul>
                <li>Guaranteed company from 7:00 PM - 7:00 AM (overnight stay)</li>
                <li>1 - 1 hour mid-day visit</li>
                <li>2 - 1/2 hour walks (Morning and Evening)</li>
                <li>Meal distribution</li>
                <li>Fresh water throughout the day</li>
                <li>Medication administration </li>
                <li>Play time</li>
                <li>Potty breaks</li>
                <li>Unlimited love and affection</li>
              </ul>
            </div>
          </div> <!-- /NESTED: PT/FT Prices -->

          <div class="row">
            <div class="col bg-info mx-2 my-2 rounded">
              <h3 class="text-center em-text pt-4">Add some extra love!</h3>
              <div class="text-center">
                <i class="far fa-heart fa-7x pb-2"></i>
              </div>
              <p>Want to come home to a fresh pet?  Tired of dragging your reluctant dog into the salon to hear there's a 30 minute wait for a simple nail trim? I hear ya! Conveniently, I can help you get all of your basic necessities done in your home! Add some extra love to your package and remove some stress from your life!</p>

              <p>Add any three items to package for $25!</p>

              <ul>
                <li>Nail Trim - $10</li>
                <li>Face Trim - $10</li>
                <li>Paw Trim - $10</li>
                <li>Brush Out (Coat Condition Dependent) - $12+</li>
                <li>Sanitary Trim - $7</li>
                <li>Anal Gland Expression - $7</li>
              </ul>

            </div>
          </div>

          <div class="row"> <!-- CALL TO ACTION BOX: CONTACT US -->
            <div class="col m-2 p-5 rounded" id="contactDiv">
              <h2 class="text-center em-text">Contact us <a href="contact.php" class="blueLink">here</a> to inquire further about pet sitting services!</h2>
            </div>
          </div> <!-- /CALL TO ACTION BOX: CONTACT US -->

        </div> <!-- CONTENT END -->

        <div class="col-md-1"></div> <!-- dummy width column -->
      </div> <!-- /.row -->


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
