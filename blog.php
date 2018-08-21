<!DOCTYPE html>

<html>

  <head>
    <?php
      include ("inc/gAnalytics.php");
      $pageTitle = "Blog - Essential Pet Services";
      include ("inc/header.php");
    ?>
  </head>

  <body>

    <?php
      include ("inc/banner.php");
      include ("inc/navbar.php");
    ?> <!-- /navbar -->

    <div class="container my-5"> <!-- .container -->

      <!-- Blog Header -->
      <div class="row">
        <div class="col">
          <h1 class="text-center em-text">Blog</h1>
        </div>
      </div> <!-- /Blog Header -->


      <div class="row"> <!-- .row -->

        <div class="col"> <!-- .col -->
          <div class="card my-5 mx-auto" style="width: 18rem;">
            <a href="blog/001.php">
            <img class="card-img-top" src="img/blog1.jpg" alt="Card image cap">
            </a>
            <div class="card-body">
              <h5 class="card-title">
                <a href="blog/001.php" class="card-link em-text">Why Your Dog Needs to be Walked, Daily.</a>
              </h5>
              <p class="card-text">Every breed of dog requires daily exercise. Whether your beloved pet is a live-wired ball of energy like a border collie, or a couch cuddle loving shih tzu...</p>
            </div>
            <div class="card-body">
              <a href="blog/001.php" class="card-link blueLink">Read More</a>
            </div>
          </div>
        </div> <!-- /.col -->


        <div class="col"> <!-- .col -->
          <div class="card my-5 mx-auto" style="width: 18rem;">
            <a href="blog/002.php">
            <img class="card-img-top" src="img/blog4.jpg" alt="Card image cap">
            </a>
            <div class="card-body">
              <h5 class="card-title">
                <a href="blog/002.php" class="card-link em-text"><em>Go Pro:</em> The Top 5 Reasons to Hire a Pet Professional</a>
              </h5>
              <p class="card-text">Dogs and other pets are magnificent companions and irreplaceable family members. But life is busy, unpredictable and limitless...</p>
            </div>
            <div class="card-body">
              <a href="blog/002.php" class="card-link blueLink">Read More</a>
            </div>
          </div>
        </div> <!-- /.col -->


        <div class="col"> <!-- .col -->
          <div class="card my-5 mx-auto" style="width: 18rem;">
            <a href="blog/003.php">
            <img class="card-img-top" src="img/blog5.jpg" alt="Card image cap">
            </a>
            <div class="card-body">
              <h5 class="card-title">
                <a href="blog/003.php" class="card-link em-text">Why Your Dog Barks and How To Control It</a>
              </h5>
              <p class="card-text">There’s nothing pleasant about a dog barking uncontrollably. The truth is that you will likely never be able to completely “un-train” your dog...</p>
            </div>
            <div class="card-body">
              <a href="blog/003.php" class="card-link blueLink">Read More</a>
            </div>
          </div>
        </div> <!-- /.col -->

      </div> <!-- /.row -->

    </div> <!-- /.container -->
    <?php
    include ("inc/footer.php");
    include ("inc/scripts.php");
    ?>
  </body>
</html>
