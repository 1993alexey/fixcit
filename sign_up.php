<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Fixcit Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/login/icons/favicon.ico"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/login/util.css">
    <link rel="stylesheet" type="text/css" href="css/login/main.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>
  <body>
  <?php include_once 'header.php'; ?>
    <div class="limiter">
      <div class="container-login100 ">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-10 p-b-50 col-sm-2">
            <img src="img/login/logo.png" class="logo-register">
          <form class="login100-form validate-form">
            <span class="login100-form-title p-b-33">
            Sign Up
            </span>
              <div class="tab">
                <div class="form-group">
                  <label for="name-first"><p>First Name:</p></label>
                  <input type="text" class="form-control" id="name-first" placeholder="Enter first name">
                </div>
                <div class="form-group">
                  <label for="name-last"><p>Last Name:</p></label>
                  <input type="text" class="form-control" id="name-last" placeholder="Enter last name">
                </div>
              </div>
              <div class="tab">
                <div class="form-group">
                  <label for="email"><p>Email:</p></label>
                  <input type="text" class="form-control" id="email" placeholder="example@gmail.com">
                </div>
                <div class="form-group">
                  <label for="name-last"><p>Phone Number:</p></label>
                  <input type="text" class="form-control" id="name-last" placeholder="208-970-9369">
                </div>
              </div>
              <div class="tab">
                <div class="form-group">
                  <label for="name-last"><p>Address:</p></label>
                  <input type="text" class="form-control" id="name-last" placeholder="Address">
                </div>
                <div class="form-group residence country">
                  <label for="name-last"><p>Country:</p></label>
                  <input type="text" class="form-control" id="name-last" value="USA" disabled>
                </div>
                <div class="form-group residence">
                  <label for="email"><p>State:</p></label>
                  <select class="form-control">
                    <option value="AL">AL</option>
                    <option value="AK">AK</option>
                    <option value="AR">AR</option>
                    <option value="AZ">AZ</option>
                    <option value="CA">CA</option>
                    <option value="CO">CO</option>
                    <option value="CT">CT</option>
                    <option value="DC">DC</option>
                    <option value="DE">DE</option>
                    <option value="FL">FL</option>
                    <option value="GA">GA</option>
                    <option value="HI">HI</option>
                    <option value="IA">IA</option>
                    <option value="ID">ID</option>
                    <option value="IL">IL</option>
                    <option value="IN">IN</option>
                    <option value="KS">KS</option>
                    <option value="KY">KY</option>
                    <option value="LA">LA</option>
                    <option value="MA">MA</option>
                    <option value="MD">MD</option>
                    <option value="ME">ME</option>
                    <option value="MI">MI</option>
                    <option value="MN">MN</option>
                    <option value="MO">MO</option>
                    <option value="MS">MS</option>
                    <option value="MT">MT</option>
                    <option value="NC">NC</option>
                    <option value="NE">NE</option>
                    <option value="NH">NH</option>
                    <option value="NJ">NJ</option>
                    <option value="NM">NM</option>
                    <option value="NV">NV</option>
                    <option value="NY">NY</option>
                    <option value="ND">ND</option>
                    <option value="OH">OH</option>
                    <option value="OK">OK</option>
                    <option value="OR">OR</option>
                    <option value="PA">PA</option>
                    <option value="RI">RI</option>
                    <option value="SC">SC</option>
                    <option value="SD">SD</option>
                    <option value="TN">TN</option>
                    <option value="TX">TX</option>
                    <option value="UT">UT</option>
                    <option value="VT">VT</option>
                    <option value="VA">VA</option>
                    <option value="WA">WA</option>
                    <option value="WI">WI</option>
                    <option value="WV">WV</option>
                    <option value="WY">WY</option>
                  </select>
                </div>
                <div class="form-group residence zip">
                  <label for="email"><p>Zip Code:</p></label>
                  <input type="text" class="form-control" id="email" placeholder="Zip">
                </div>
                <div class="form-group residence street">
                  <label for="email"><p>Street:</p></label>
                  <input type="text" class="form-control" id="email" placeholder="Enter street">
                </div>
              </div>
              <div class="tab tg-center">
                <p>Provide:</p>
                <button type="button" class="btn btn-default">▼ Proof of identity <span class="glyphicon glyphicon-camera"></span></button>
                <button type="button" class="btn btn-default">▼ Proof of address <span class="glyphicon glyphicon-camera"></span></button>
              </div>
              <br />
              <div class="tg-center">
                <button type="button" class="btn btn-success btn-sign-up">Create your Fixcit account</button>
              </div>
          </form>
        </div>
      </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script> sessionStorage.setItem("page", "login"); </script>
    <script src="js/turbota_city.js"></script>
  </body>
</html>