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
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="foundation-icons/foundation-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.5.0/octicons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
  <link href="css/style.css" rel="stylesheet">
</head>
<body class="page-service">
  <?php include_once 'header.php'; ?>
  <div style="height:90px"></div>
  <div class="container">
    <div class="row">
      <div class="service-title">Trallor Wash</div>
    </div>
    <div class="row row-time">
      <div class="col-sm-6 col-md-3">
        <div class="day-time">
          <h3 class="tg-inline-blk">Day</h3>
          <input class="form-control date" type="date" >
          <h3 class="tg-inline-blk">Time</h3>
          <br>
          <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><span class="display">12</span>
            <span class="caret"></span></button>
            <ul class="dropdown-menu hours">
              <li>01</li>
              <li>02</li>
              <li>03</li>
              <li>04</li>
              <li>05</li>
              <li>06</li>
              <li>07</li>
              <li>08</li>
              <li>09</li>
              <li>10</li>
              <li>11</li>
              <li>12</li>
            </ul>
          </div>
          <span class="time-separator">:</span>
          <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><span class="display">00</span>
            <span class="caret"></span></button>
            <ul class="dropdown-menu minutes">
              <li>00</li>
              <li>05</li>
              <li>10</li>
              <li>15</li>
              <li>20</li>
              <li>25</li>
              <li>30</li>
              <li>35</li>
              <li>40</li>
              <li>45</li>
              <li>50</li>
              <li>55</li>
            </ul>
          </div>
          <button class="btn btn-default meridiems">AM</button>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
          <form>
            <div class="form-group">
              <label for="sel1"><h3>Type</h3></label>
              <select class="form-control type">
                <option value="0">Select Type</option>
                <option value="class-1">Class 1</option>
                <option value="class-2">Class 2</option>
                <option value="class-3">Class 3</option>
                <option value="class-4">Class 4</option>
                <option value="class-5">Class 5</option>
              </select>
            </div>
          </form>
      </div>
      <div class="col-sm-6 col-md-3">
        <h3 id="move-down">Additional Options</h3>
        <div class="pretty p-default">
            <input type="checkbox" />
            <div class="state p-warning">
                <label>Windows</label>
            </div>
        </div>
        <div class="pretty p-default">
            <input type="checkbox" />
            <div class="state p-warning">
                <label>Tyres</label>
            </div>
        </div>
        <div class="pretty p-default">
            <input type="checkbox" />
            <div class="state p-warning">
                <label>Vacuuming</label>
            </div>
        </div>
        <div class="pretty p-default">
            <input type="checkbox" />
            <div class="state p-warning">
                <label>Drying</label>
            </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="form-group">
          <label for="comment"><h3>Comment:</h3></label>
          <textarea class="form-control" rows="5" id="comment"></textarea>
        </div> 
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-3 col-md-offset-9">
        <div class="tg-center">
          <br>
            <h4 class="price-tag"><span>Total: </span><span class="price-amount">5.50</span>$</h4>
            <button type="button" class="btn btn-success btn-lg">Proceed</button>
      </div>
      </div>
    </div>
  </div>
  <?php include_once 'footer.php'; ?>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script> sessionStorage.setItem("page", "service"); </script>
  <script src="js/turbota_city.js"></script>
  <script src="/js/services.js"></script>
</body>
</html>