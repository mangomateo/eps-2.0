<!DOCTYPE html>

<html>

  <head>
    <?php
      include ("inc/gAnalytics.php");
      $pageTitle = "Essential Pet Services";
      include ("inc/header.php");
    ?>
  </head>

  <body>


    <!-- Header & Navbar -->
    <?php
      include ("inc/banner.php");
      include ("inc/navbar.php");
    ?> <!-- /Header & Navbar -->

    <div class="container"> <!-- mainContent -->
      <div class="row mt-5">
        <div class="col"></div> <!-- dummy width column -->
        <div class="col-lg-10"> <!-- content col -->


          <div class="row">
            <div class="col-md">
              <img src="img/dog001.jpg" class="img-fluid">
            </div>
            <div class="col-md">
              <p class="mb-5 main">Our pets deserve the best, we <em>know</em> that. But it’s so hard to dedicate the amount of time our four-legged family members need on a regular basis. Let’s face it, they can’t come everywhere with us and between work, cooking, cleaning, running the kids around and everything else that comes with having a family- Coco’s walk has been missed... again. When the kids are finally in bed and you’re exhausted at the end of the day, Coco’s eyes are on you, tail wagging, full of pent up energy, asking, “Is it my turn, now?”.</p>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <p class="mb-5 main">Imagine knowing that while you’re stuck in traffic on your long commute, running the kids around town, getting groceries, cooking dinner, cleaning the house and attending to all of your other commitments, Coco has been walked, fed, given his medicine and had that nail trim you’ve been meaning to take him for.</p>

              <p class="mb-5 main">Now when you’re exhausted at the end of the day, Coco is ready to curl up on your lap and enjoy the peace and quiet with you. Imagine...</p>

              <h1 class="text-center my-5 em-text">I CAN HELP!</h1>
            </div>
          </div>

          <div class="row">
            <div class="col-md">
              <p class="main">It is so important for Coco and Bella to get their daily exercise, both for their health and so that they don’t chew up another pair of shoes, or dig through the dirty hamper to sniff out your socks and underwear out of pure boredom. We do everything we can to keep our kids happy and healthy and the same should go for our furry family.</p>

              <p class="mb-5 main">You signed your kids up for soccer and ballet to keep them active, social and entertained and you can sign Bella up for regular walks to do the same for her!</p>
            </div>
            <div class="col-md">
              <img src="img/dog002.jpg" class="img-fluid mb-2">
            </div>
          </div>

          <p class="mb-5 main">That’s where I come in...</p>

          <h3 class="text-center mb-4">
            <a href="about.php" class="em-text blueLink">ABOUT ME</a>
          </h3>

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
