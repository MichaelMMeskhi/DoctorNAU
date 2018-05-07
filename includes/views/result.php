<!DOCTYPE html>
<html lang="en">

<?php include_once('includes/header_inc.php') ?>

<body>

<!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">

    <?php 
      if (!isset($_SESSION['u_id'])){
        include ('includes/menubarOut_inc.php');

        // prevent exploit by typing the address manually
        header("Location: ../../index.php");
        exit();
      }
      else {
        include ('includes/menubarIn_inc.php');
      }
    ?>

    <!-- Body
      –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="container" style="margin-top: 10%">
        <div class="row">
            <?php 
              if (isset($_SESSION['u_disease'])) {
                echo '<h1>'.$_SESSION['u_disease'].'</h1>';
              }
              else {
                echo '<h1>Disease cannot be identified. Call doctor immediately!</h1>';
              }
            ?>
        </div>
    </div>

  </div>
  
  <footer class="footer">
    <p>&copy; Michael M.Meskhi + Inamullah Rasuna, 2018</p>
  </footer>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>