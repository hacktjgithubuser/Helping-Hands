<?php
  require "header.php";
?>

    <main>
      <div>
        <section>
          <?php
            if (isset($_SESSION['userId'])) {
              echo '<p class="login-status">You are logged in!</p><a class="link" href="helpinghands.html">Go to Homepage</a>';
            }
            else {
              echo '<p class="login-status">You are logged out!</p>';
            }/*this changes content if youre logged in*/
          ?>

        </section>
      </div>
    </main>

<?php
  require "footer.php";
 ?>
