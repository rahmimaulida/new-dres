<!DOCTYPE html>
<html lang="en" >
  <head>
    <title>Welcome to DRES</title>
    <link rel="stylesheet" href="assets/style/style.css">
  </head>
  <body>
  <div class="container">
            <div class="backbox">
              <div class="loginMsg">
                <div class="textcontent">
                  <p class="title">Don't have an account?</p>
                  <p>Log In as Guest.</p>
                  <br>
                  <a id="switch1" href="guest">Guest Login</a>
                </div>
              </div>
              <div class="signupMsg visibility">
                <div class="textcontent">
                  <p class="title">Have an account?</p>
                  <p>Log in to see all your collection.</p>
                  <button id="switch2">LOG IN</button>
                </div>
              </div>
            </div>
            <!-- backbox -->
        
            <div class="frontbox">
              <div class="login">
                <h2>LOG IN</h2>
                <form action="process-login.php" method="post">
                <div class="inputbox">
                  <input type="text" name="username" placeholder="Username" autofocus required autocomplete="off">
                  <input type="password" name="password" placeholder="Password" autocomplete="off" required>
                </div>
                <p>FORGET PASSWORD?</p>
                <button type="submit">LOG IN</button>
                </form>
            </div>
        
            </div>
            <!-- frontbox -->
          </div>
  </body>
  <script src='assets/js/jquery.min.js'></script>
  <script  src="assets/js/index.js"></script>
</html>
