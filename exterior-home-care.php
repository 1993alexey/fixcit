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
  <link href="css/style.css" rel="stylesheet">
</head>
<body class="page-service">
  <?php include_once 'header.php'; ?>
  <div style="height:90px"></div>
  <div class="container">
    <div class="service-title">Exterior Home Care</div>
    <div class="row">
      <div class="col-md-8 col-md-push-2">
        <div class="service-content-wrapper">
          <div class="service-inner-wrapper">
            <div class="step-number">
              <div class="number"></div>
            </div>
            <div class="inner-content-container">
                <form>
                    <div class="form-group">
                        <div class="vertical-positioning">
                            <label for="care-type"><h3 class="tg-inline-blk content-title">Care Type</h3></label>
                            <select class="form-control">
                                <option value="0">Select care</option>
                                <option value="window-wash">Window Was</option>
                                <option value="rain-gutters">Rain Gutters</option>
                                <option value="power-wash">Power Wash</option>
                                <option value="lan-moving">Lan Mowing</option>
                                <option value="planting">Planting</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
          </div>
            <div class="service-inner-wrapper">
                <div class="step-number">
                    <div class="number"></div>
                </div>
                <div class="inner-content-container">
                    <form>
                        <div class="form-group">
                            <div class="vertical-positioning">
                                <label for="size"><h3 class="tg-inline-blk content-title">Size</h3></label>
                                <select class="form-control vehicle-type" id="size">
                                    <option value="0">Select Level</option>
                                    <option value="big">Big</option>
                                    <option value="medium">Medium</option>
                                    <option value="small">Small</option>
                                </select>
                            </div>
                            <div class="vertical-positioning length" style="display:none">
                                <label for="length"><h3 class="tg-inline-blk content-title">Length</h3></label>
                                <select class="form-control vehicle-type" id="length">
                                    <option value="0">Select Length</option>
                                    <option value="30-min">30 Minutes</option>
                                    <option value="1-hour">1.0 Hour</option>
                                    <option value="1.5-hours">1.5 Hours</option>
                                    <option value="2-hours">2.0 Hours</option>
                                    <option value="3-hours">3.0 Hours</option>
                                    <option value="4-hours">4.0 Hours</option>
                                    <option value="5-hours">5.0 Hours</option>
                                    <option value="6-hours">6.0 Hours</option>
                                    <option value="7-hours">7.0 Hours</option>
                                    <option value="8-hours">8.0 Hours</option>
                                </select>
                            </div>
                            <div class="vertical-positioning">
                                <label for="breed"><h3 class="tg-inline-blk content-title">Breed</h3></label>
                                <input type="text" class="form-control" id="breed" placeholder="Ex. Casey Hurley" maxlength="50">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
          <div class="service-inner-wrapper">
            <div class="step-number">
              <div class="number"></div>
            </div>
            <div class="inner-content-container">
              <div class="day-time">
                <div class="day vertical-positioning">
                  <h3 class="content-title">Day</h3>
                  <input class="form-control date" type="date">
                </div>
                <div class="time vertical-positioning">
                  <h3 class="content-title">Time</h3>
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
            </div>
          </div>
          <div class="service-inner-wrapper">
            <div class="step-number">
              <div class="number"></div>
            </div>
            <div class="inner-content-container">
              <label for="comment">
                <h3 class="content-title">Comment</h3>
              </label>
              <textarea class="form-control" rows="5" id="comment" maxlength="1000" placeholder="Type in your comment"></textarea>
              <div class="tg-center">
                <br>
                <h4 class="price-tag"><span>Total: </span><span class="price-amount">5.50</span>$</h4>
                <button type="button" class="btn btn-success btn-lg">Proceed</button>
              </div>
            </div>
          </div>
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