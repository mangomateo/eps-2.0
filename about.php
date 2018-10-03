<!DOCTYPE html>

<html>

  <head>
    <?php
      include ("inc/gAnalytics.php");
      $pageTitle = "About Me - Essential Pet Services";
      include ("inc/header.php");
    ?>
  </head>

  <body>
    <?php
      include ("inc/banner.php");
      include ("inc/navbar.php");
    ?> <!-- /navbar -->
    <div class="container my-5"> <!-- mainContent -->
      <div class="row">
        <div class="col"></div> <!-- dummy width column -->
        <div class="col-lg-10"> <!-- content col -->

          <p class="em-text text-center mb-5">Who are you trusting to care for your beloved pet in your absence?</p>

          <div class="row">
            <div class="col-md">
              <img src="img/headshot.jpg" class="rounded img-fluid">
            </div>

            <div class="col-md">
              <p>Sara is a professionally trained dog groomer who decided to take her love and passion for dogs to the park!</p>

              <p>Being a dog groomer she has interacted and worked with thousands of dogs, gaining extensive experience in handling dogs of all breeds, sizes, ages and temperaments. Through this work she has also been trained to monitor and assess dogs with basic ailments and indicators of stress, both moderate and severe.</p>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <p>Sara always makes the most sincere effort to learn every pet's quirks, likes and dislikes to ensure that every visit is not just enjoyable, but something to be anticipated. Her favourite pastime includes creating improvised songs about her pets and performing them…for her pets.</p>

              <p class="mb-5">Please feel free to contact us with any questions or concerns. We’d love to hear from you!</p>
            </div>
          </div>

          <p class="text-center em-text">But first, visit my <a href="faqs.php" class="blueLink">FAQ page</a></p>

        </div> <!-- /content col -->
        <div class="col"></div> <!-- dummy width column -->
      </div>
    </div> <!-- /mainContent -->
    <?php
      include ("inc/footer.php");
      include ("inc/scripts.php");
    ?>
  </body>
</html>
