<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>turbotaCity</title>
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/fontawesome-all.min.css" rel="stylesheet">
  <link href="foundation-icons/foundation-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.5.0/octicons.min.css">
</head>
<body class="page-service">
  <?php include_once 'header.php'; ?>
  <div style="height:90px"></div>
  <div class="container">
    <div class="row">
      <a href="tutoring.php">
        <div class="col-md-4 col-sm-6">
          <div class="serviceBox">
            <div class="service-icon"><i class="fa fa-comments"></i></div>
            <h3 class="title">Tutoring</h3>
          </div>
        </div>
      </a>
      <a href="wash.php">
        <div class="col-md-4 col-sm-6">
          <div class="serviceBox">
            <div class="service-icon"><i class="fa fa-shower"></i></div>
            <h3 class="title">Vehicle Wash</h3>
          </div>
        </div>
      </a>
      <!--<div class="col-md-3 col-sm-6">
        <div class="serviceBox">
          <div class="service-icon"><i class="fa mega-octicon octicon-package" style="position:absolute; left:20px; top: 20px;"></i></div>
          <h3 class="title">Pick Up</h3>
          <div class="services">
            <a href="#">Pharmacy</a>
            <a href="#">Mail Box</a>
            <a href="#">Airport</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="serviceBox">
          <div class="service-icon"><i class="fa fa-shopping-cart"></i></div>
          <h3 class="title">Food Delivery</h3>
          <div class="services">
            <a href="#">Dexie Nutritions</a>
            <a href="#">Wall Mart</a>
            <a href="#">Harmons</a>
          </div>
        </div>
      </div>-->
      <a href="/dog.php" class="service-box-link">
        <div class="col-md-4 col-sm-6">
          <div class="serviceBox">
              <div class="service-icon"><i class="fa fi-guide-dog"></i></div>
              <h3 class="title">Dog Care</h3>
          </div>
        </div>
      </a>
    </div>
    <div class="row" style="margin-top:30px;">
      <!--<div class="col-md-3 col-sm-6">
        <div class="serviceBox">
          <div class="service-icon"><i class="fa fa-taxi"></i></div>
          <h3 class="title">Taxi</h3>
          <div class="services">
            <a href="#">Taxi</a>
          </div>
        </div>
      </div>-->
      <a href="exterior-home-care.php">
        <div class="col-md-4 col-sm-6">
          <div class="serviceBox">
            <div class="service-icon"><i class="fa fa-home"></i></div>
            <h3 class="title">Exterior Home Care</h3>
          </div>
        </div>
      </a>
      <a href="/practice.php">
        <div class="col-md-4 col-sm-6">
          <div class="serviceBox">
            <div class="service-icon"><i class="fas fa-table-tennis"></i></div>
            <h3 class="title">Practice</h3>
          </div>
        </div>
      </a>
      <a href="landscaping.php">
        <div class="col-md-4 col-sm-6">
          <div class="serviceBox">
            <div class="service-icon"><i class="fa fa-leaf"></i></div>
            <h3 class="title">Landscaping</h3>
          </div>
        </div>
      </a>
      <!--<div class="col-md-3 col-sm-6">
        <div class="serviceBox">
          <div class="service-icon"><i class="fa fa-comments"></i></div>
          <h3 class="title">Quality Time</h3>
          <div class="services">
            <a href="#">Boy-sitter</a>
            <a href="#">Girl-sitter</a>
            <a href="#">Bike ride</a>
          </div>
        </div>
      </div>-->

    </div>
    <div class="before-footer"></div>
  </div>
  <?php include_once 'footer.php'; ?>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script> sessionStorage.setItem("page", "service"); </script>
  <script src="js/turbota_city.js"></script>
</body>
</html>