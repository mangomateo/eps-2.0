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
        <div class="col"></div>
        <div class="col-lg-10">
          <p>Who are you trusting to care for your beloved pet in your absence?</p>

          <p><img src="img/headshot.jpg" class="rounded d-block mx-auto my-5 img-fluid" width=450 height=300></p>

          <p class="mb-5">Hi! My name is Sara and I am a former-professional dog groomer who decided that I wanted to take my love and passion for dogs to the park!</p>

          <p class="mb-5">Being a dog groomer I have interacted and worked with thousands of dogs, therefore gaining extensive experience in handling dogs of all breeds, sizes, ages and temperaments. Through this work I have also been trained to monitor and assess dogs with basic ailments and indicators of stress, both moderate and severe.</p>

          <p class="mb-5">I love interacting with your furry friends and always make the most sincere effort to learn their quirks, likes and dislikes to ensure that every visit is not just enjoyable, but something to be anticipated.</p>

          <p class="mb-5">Please feel free to contact me with any questions or concerns and I will be happy to try and satisfy any or all of them!</p>

          <p class="mb-5 text-center">But first, visit my <a href="faqs.php" class="blueLink">FAQ page</a></p>
        </div>
        <div class="col"></div>
      </div>
    </div> <!-- /mainContent -->
    <?php
      include ("inc/footer.php");
      include ("inc/scripts.php");
    ?>
  </body>
</html>
