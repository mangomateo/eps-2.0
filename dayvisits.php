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
          <h1 class="text-center em-text">Daytime Visits</h1>
        </div>
      </div> <!-- /Header: Services & Rates -->

      <div class="row">
        <div class="col-md-1"></div> <!-- dummy width column -->

        <div class="col"> <!-- MAIN CONTENT DIV -->
          <p>Being away for long periods of time is sometimes unavoidable, but it can be hard on our pets. Even if they don’t need a full day of daycare or midday walk, a midday visit can mean the world to some pets. We can help keep your pets happy and healthy with just a short visit, to brighten up their day until you’re home!</p>

          <h4 class="text-center my-4">Extra pets within the home are at no additional cost for daytime visits!</h4>

          <div class="row">
            <div class="col-sm">
              <p>All day time visits include:</p>

              <ul>
                <li>Potty Break</li>
                <li>Play Time</li>
                <li>Water Refresh</li>
              </ul>
            </div>
            <div class="col-sm">
              <ul>
                <li>Meal Distribution (If Applicable)</li>
                <li>Medicine Administration (If Applicable)</li>
                <li>Litter refresh (If Applicable)</li>
                <li>Love and Affection</li>
              </ul>
            </div>
          </div>

          <div class="row">
            <div class="col-md bg-info my-2 mx-2 rounded">
              <h3 class="em-text text-center pt-2">Puppy Visits</h3>
              <h5 class="text-center pb-2">Up to 6 Months Old</h5>

              <p>It is crucial for your puppy's training and development that your puppy is not alone for more than 3 hours at a time. That's a huge commitment! When you're not available throughout the day, we can help!</p>

              <p>Puppy visits include 30 minutes of play time and a potty break (or two). Don't take this at face value though! Every chance your puppy has to play is a chance to learn! </p>

              <ul>
                <li>30 Minute Puppy Visit - $18</li>
              </ul>

              <p>Going to be gone all day?</p>

              <ul>
                <li>Each additional visit in a day - $10</li>
              </ul>

              <hr>

              <h3>Package Discount</h3>

              <ul>
                <li>30 Minute Visit x 20 - $15 / Visit</li>
              </ul>
            </div>
            <div class="col-md bg-info mx-2 my-2 rounded">
              <h3 class="text-center em-text p-2">Dog & Cat Visits</h3>

              <p>Give your fido or feline a break from the hum drum of counting down to your return. This is also a great package for those pets that need medicine administration throughout the day.</p>

              <ul>
                <li>30 Minute Visit - $20</li>
              </ul>

              <p>Looking for multiple visits in a day?</p>

              <ul>
                <li>Each additional visit in a day - $12</li>
              </ul>

              <hr>

              <h3>Package Discount</h3>

              <ul>
                <li>30 Minute Visit X 20 - $17 / Visit</li>
              </ul>

            </div>
          </div>

          <div class="row"> <!-- CALL TO ACTION BOX: CONTACT US -->
            <div class="col p-5 rounded" id="contactDiv">
              <h2 class="text-center em-text">Contact us <a href="contact.php" class="blueLink">here</a> to inquire further about day time visits!</h2>
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
