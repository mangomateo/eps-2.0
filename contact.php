<!DOCTYPE html>

<html>

  <head>
    <?php
      include ("inc/gAnalytics.php");
      $pageTitle = "Contact Us! - Essential Pet Services";
      include ("inc/header.php");
    ?>
  </head>

  <body>
    <?php
      include ("inc/banner.php");
      include ("inc/navbar.php");
    ?> <!-- /navbar -->
    <div class="container"> <!-- mainContent -->

      <!-- Contact Header -->
      <div class="row">
        <div class="col">
          <h2 class="text-center my-4">We can't wait to hear from you!</h2>
        </div>
      </div> <!-- /Contact Header-->


      <!-- Contact Form -->
      <div class="row text-center my-4">
        <div class="col-md-8 offset-md-2 col-xl-6 offset-xl-3">
          <form method="POST" action="https://formspree.io/essentialpetservices@gmail.com">
            <div class="form-group">
              <input class="form-control" type="text" name="name" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="city" placeholder="City/Town">
            </div>
            <div class="form-group">
              <input class="form-control" type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="breed" placeholder="Pet Type/Dog Breed">
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" placeholder="Message" rows="6"></textarea>
            </div>
            <div class="form-group">
              <button class="btn btn-primary" type="submit" name="submit">Submit</button>
            </div>
          </form>
        </div>
      </div> <!-- /Contact Form -->

      <?php include ("inc/footer.php"); ?>
    </div> <!-- /mainContent -->

    <?php include ("inc/scripts.php"); ?>
  </body>
</html>
