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
</head>
<body>
  <?php include_once 'header.php'; ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 main-page tg-center">
        <div class="text-big">HAVE THINGS DONE CHEAP AND QUICKLY</div>
        <div class="text-small">Employ Young Enthusiasts to Do Your Chores</div>
        <a href="service.php"><button class="btn btn-default btn-main btn-employ">Employ</button></a>
        <button class="btn btn-default btn-main btn-work">Work</button>
        <div class="spacer"></div>
      </div>
    </div>
  </div>
  <?php include_once 'footer.php'; ?>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script> sessionStorage.setItem("page", "index"); </script>
  <script src="js/turbota_city.js"></script>
</body>
</html>