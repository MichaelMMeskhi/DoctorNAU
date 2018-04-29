<!DOCTYPE html>
<html lang="en">

<?php include_once('includes/header_inc.php') ?>

<body>

<!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">

    <?php 
      if (!isset($_SESSION['u_id'])){
        include include ('includes/menubarOut_inc.php');
      }
      else {
        include include ('includes/menubarIn_inc.php');
      }
    ?>

    <!-- Body
      –––––––––––––––––––––––––––––––––––––––––––––––––– -->
      <div class="row">
        <div class="one-half column logo" style="margin-top: 20%">
          <img src="images/logo.png" width="30%">
          <h1>DoctorNAU</h1>
          <hr>
          <p>College is a stressful period of life for many students. Stress means sickness and sickness means trouble! Sometimes students are shy about their conditions or just simply scared of doctors. But it is necessary to get the proper diagnosis. Something dangerous might be in the hiding! Just use our simple and quick symptom checker to relieve yourself.</p>
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