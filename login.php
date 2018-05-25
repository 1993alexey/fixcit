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
      <div class="container-login100">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-10 p-b-50">
            <img src="img/login/logo.png" class="logo-register">
          <form class="login100-form validate-form">
            <span class="login100-form-title p-b-33">
            Account Login
            </span>
            <div class="wrap-input100">
              <input class="input100" type="email" name="email" placeholder="Email" required>
            </div>
            <div class="wrap-input100">
              <input class="input100" type="password" name="pass" placeholder="Password" required>
            </div>
            <div class="container-login100-form-btn m-t-20">
              <button class="login100-form-btn">
              Sign in
              </button>
            </div>
            <div class="text-center p-t-45 p-b-4">
              <span class="txt1">
              Forgot
              </span>
              <a href="#" class="txt2 hov1">
              Username / Password?
              </a>
            </div>
            <div class="text-center">
              <span class="txt1">
              Create an account?
              </span>
              <a href="/sign_up.php" class="txt2 hov1">
              Sign up
              </a>
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