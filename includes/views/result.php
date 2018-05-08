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
            <div class="twelve columns">
                <div class="symptom">
                    <img src="images/symptom.jpg" width="40%" height="40%">
                </div>
            </div> 
        <div class="row">
            <div class="twelve columns">
                </div>
                    <?php 
                      if (isset($_SESSION['u_disease'])) {
                        echo '<h3 align="center"><strong>'.$_SESSION['u_disease'].'</strong></h3>';
                        echo '<hr>';
                        echo '<p>'.$_SESSION['u_description'].'</p>';
                        echo '<ul class="source">
                                <li><a href="'.$_SESSION['u_source'].'">Information about your disease.</a></li>
                              </ul>';
                      }
                      else {
                        echo '<h4 align="center">Disease cannot be identified. Call doctor immediately!</h4>';
                        echo '<hr>';
                      }
                    ?>
                    
                    <form action="includes/result_inc.php" method="post">
                      <p>You can recheck you symptoms or download your personal medical report that you can take with you to the doctor.</p>
                      <div class="clearfix">
                          <!--<a class="six columns button" href="index.php?page=symptoms">Restart</a>-->
                          <button class="six columns button" type="submit" name="restart">Restart</button>
                          <button class="six columns button" type="submit" name="download">Report</button>
                      </div>
                    </form>
                </div>
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