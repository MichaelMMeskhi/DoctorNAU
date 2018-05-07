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
      }
      else {
        include ('includes/menubarIn_inc.php');
      }
    ?>

    <!-- Body
      –––––––––––––––––––––––––––––––––––––––––––––––––– -->
      <div class="row">
      <div class="one-half column logo" style="margin-top: 20%">
        <img src="images/logo.png" width="30.5%">
        <h1><strong>Doctor</strong>NAU</h1>
        <hr>
        <p><strong>College</strong> is a stressful period of life for many students. Stress means sickness and sickness means trouble! Sometimes students are shy about their conditions or just simply scared of doctors. But it is necessary to get the proper diagnosis. Something dangerous might be in the hiding! Just use our simple and quick symptom checker to relieve yourself.</p>
      </div>
        
    <div class="one-half column logo" style="margin-top: 20%">
        <h4>Important Links &amp; Resources</h4>
        <hr>
        <p><strong>Notice:</strong> Symptom Checker is not a replacement for a real doctor. Please refer to a trained physician for factual analysis. Below you will find contacts and information of people and locations that will assist you in getting proper help.</p>
        <hr>
        <ul>
            <li><a href="http://www.na.edu/campus-life/health-services/">ISO Office</a></li>
            <li><a href="http://www.atriummedicalcenter.com/">Atrium Hosptical Stafford</a></li>
            <li><a href="">Dr. Rasuna, Inamullah M.D.</a></li>
        </ul>
        <p><strong>Call 911 in case of emergency!</strong> Do not hesitate to tell a friend or anyone next to you that you are feeling ill.</p>
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