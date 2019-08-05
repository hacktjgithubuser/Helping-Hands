<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This is meta desc exam. will show in search results.">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Helping Hands</title>
    <link rel="stylesheet" href="pagestyle.css">
  </head>
<body>

  <header>
    <nav>
      <div>
        <?php
          if (isset($_SESSION['userId'])) {
            echo '<form action="includes/logout.inc.php" method="post">
              <button class="logoutbutton" type="submit" name="logout-submit">Logout</button>
            </form>';
          }
          else {
            echo '<form class="loginbox" action="includes/login.inc.php" method="post">
              <div class="titlelogin">Login Here</div>
              <input type="text" name="mailuid" placeholder="Username">
              <input type="password" name="pwd" placeholder="Password">
              <button type="submit" name="login-submit">Login</button>
            </form>

            <a href="signup.php">Signup!<a>';
          }/*this changes content if youre logged in*/
        ?>


      </div>
    </nav>
  </header>
  <script src="java.js"></script>
</body>

</html>
