
<?php include 'partials/header.php'; ?>

<!-- navbar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"><img src="assets/dist/images/logo-small.png" alt=""></a>
<div class="text-left ml-auto">
    <?php include 'partials/form.php'; ?>
    </form>
  </div>
    
</nav>
<!-- end of navbar -->



<pre class="text-white">
  <?php //print_r($forecast); ?>
</pre>

<main class="container py-5 text-center">


 <div class="d-md-flex align-items-center justify-content-between">

   <div>
    <p class="lead text-bold m-0"><?php echo $place; ?></p>
    <h2 class="display-1 mb-0">
      <?php echo round($forecast['currently']['temperature']); ?>&deg;
    </h2>
    <p class="lead">
      <?php echo $forecast['currently']['summary']; ?>
    </p>
    <p class="lead">
      Wind Speed: <?php echo round($forecast['currently']['windSpeed']); ?> MPH
    </p>
  </div>
  
  <div class="icons">
    <img src="assets/dist/images/icons/summer/<?php echo $forecast['currently']['icon']; ?>.svg" alt="" width="420px" height="420px">
  </div>

  <div>
    <?php foreach($forecast['daily']['data'] as $day): ?>

        <div class="d-flex align-items-center justify-content-between">
          <p class="lead m-0">
            <?php echo gmdate("D", $day['time']); ?>
          </p>
          <h2 class="m-0 mx-5">
            <?php echo round($day['temperatureHigh']); ?>&deg;
          </h2>
          <div class="icons">
            <img src="assets/dist/images/icons/<?php echo $season; ?>/<?php echo $day['icon']; ?>.svg" alt="" width="48px" height="48px">
          </div>
        </div>

    <?php endforeach; ?>
  </div>
  
</div>




  
</main>

<div class="container-fluid bg-warning">
  <!-- Card Grid 1-->
        <div class="row">

        <!-- Card -->
          <div class="col-12 col-md-2">
            <div class="card mb-5">
              <img src="assets/dist/images/shoes/summer/shoe1/shoe1.jpeg" href="" alt="" class="card-img-top img-fluid">
              <div class="card-body">
                <a class="btn-primary m-5" href="">
                  $120.00 <span class="sr-only">About Card Titles</span>
                </a>
              </div>
            </div>
          </div>
        <!-- END Card -->

        <!-- Card -->
          <div class="col-12 col-md-2">
            <div class="card mb-5">
              <img src="assets/dist/images/shoes/summer/shoe2/shoe2.jpeg" alt="" class="card-img-top img-fluid">
              <div class="card-body">
                <a class="btn" href="#">
                  $120.00 <span class="sr-only">About Card Titles</span>
                </a>
              </div>
            </div>
          </div>
        <!-- END Card -->

        <!-- Card -->
          <div class="col-12 col-md-2">
            <div class="card mb-5">
              <img src="assets/dist/images/shoes/summer/shoe3/shoe3.jpg" alt="" class="card-img-top img-fluid">
              <div class="card-body">
                <a class="btn" href="#">
                  $120.00 <span class="sr-only">About Card Titles</span>
                </a>
              </div>
            </div>
          </div>
        <!-- END Card -->

        <!-- Card -->
          <div class="col-12 col-md-2">
            <div class="card mb-5">
              <img src="assets/dist/images/shoes/summer/shoe4/shoe4.jpeg" alt="" class="card-img-top img-fluid">
              <div class="card-body">
                <a class="btn" href="#">
                  $120.00 <span class="sr-only">About Card Titles</span>
                </a>
              </div>
            </div>
          </div>
        <!-- END Card -->
        
        <!-- Card -->
          <div class="col-12 col-md-2">
            <div class="card mb-5">
              <img src="assets/dist/images/shoes/summer/shoe5/shoe5.jpeg" alt="" class="card-img-top img-fluid">
              <div class="card-body">
                <a class="btn" href="#">
                  $120.00 <span class="sr-only">About Card Titles</span>
                </a>
              </div>
            </div>
          </div>
        <!-- END Card -->

        <!-- Card -->
          <div class="col-12 col-md-2">
            <div class="card mb-5">
              <img src="assets/dist/images/shoes/summer/shoe6/shoe6.jpeg" alt="" class="card-img-top img-fluid">
              <div class="card-body">
                <a class="btn" href="#">
                  $120.00 <span class="sr-only">About Card Titles</span>
                </a>
              </div>
            </div>
          </div>
        <!-- END Card -->

        </div>
      <!-- END Card Grid 1 -->


       <!-- Card Grid 2-->
        <div class="row">

        <!-- Card -->
          <div class="col-12 col-md-2">
            <div class="card mb-5">
              <img src="assets/dist/images/shoes/summer/shoe7/shoe7.jpg" alt="" class="card-img-top img-fluid">
              <div class="card-body">
                <a class="btn" href="#">
                  $120.00 <span class="sr-only">About Card Titles</span>
                </a>
              </div>
            </div>
          </div>
        <!-- END Card -->

        <!-- Card -->
          <div class="col-12 col-md-2">
            <div class="card mb-5">
              <img src="assets/dist/images/shoes/summer/shoe8/shoe8.jpg" alt="" class="card-img-top img-fluid">
              <div class="card-body">
                <a class="btn" href="#">
                  $120.00 <span class="sr-only">About Card Titles</span>
                </a>
              </div>
            </div>
          </div>
        <!-- END Card -->

        <!-- Card -->
          <div class="col-12 col-md-2">
            <div class="card mb-5">
              <img src="assets/dist/images/shoes/summer/shoe9/shoe9.jpg" alt="" class="card-img-top img-fluid">
              <div class="card-body">
                <a class="btn" href="#">
                  $120.00 <span class="sr-only">About Card Titles</span>
                </a>
              </div>
            </div>
          </div>
        <!-- END Card -->

        <!-- Card -->
          <div class="col-12 col-md-2">
            <div class="card mb-5">
              <img src="assets/dist/images/shoes/summer/shoe10/shoe10.jpg" alt="" class="card-img-top img-fluid">
              <div class="card-body">
                <a class="btn" href="#">
                  $120.00 <span class="sr-only">About Card Titles</span>
                </a>
              </div>
            </div>
          </div>
        <!-- END Card -->
        
        <!-- Card -->
          <div class="col-12 col-md-2">
            <div class="card mb-5">
              <img src="assets/dist/images/shoes/summer/shoe11/shoe11.jpg" alt="" class="card-img-top img-fluid">
              <div class="card-body">
                <a class="btn" href="#">
                  $120.00 <span class="sr-only">About Card Titles</span>
                </a>
              </div>
            </div>
          </div>
        <!-- END Card -->

        <!-- Card -->
          <div class="col-12 col-md-2">
            <div class="card mb-5">
              <img src="assets/dist/images/shoes/summer/shoe12/shoe12.jpg" alt="" class="card-img-top img-fluid">
              <div class="card-body">
                <a class="btn" href="#">
                  $120.00 <span class="sr-only">About Card Titles</span>
                </a>
              </div>
            </div>
          </div>
        <!-- END Card -->

        </div>
      <!-- END Card Grid 2-->
      </div>


<?php include 'partials/footer.php'; ?>