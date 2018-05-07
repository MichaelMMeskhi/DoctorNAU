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
          <h4>Welcome to the symptom checker</h4>
          <hr>
          <p>To get an accurate result please fill out the form below as accurately as possible:</p>
          <ul>
            <li>Enter your personal information.</li>
            <li>Select the symptoms you are experiencing and submit.</li>
          </ul>  
          <p>If you have selected the option for monitoring, you will be contacted by a NAU administration employee regarding your health issue.</p>
        </div>
      </div>

      <form action="includes/symptom_inc.php" method="post">
        <div class="row">
          <div class="six columns">
            <label for="">Full Name</label>
            <?php echo '<input class="u-full-width" type="text" value="' . $_SESSION['u_fname'] . '" id="name" maxlength="128">' ?>
          </div>
          <div class="six columns">
            <label for="">Reason for checking your symptoms</label>
            <input class="u-full-width" type="text" placeholder="Because..." id="">  
          </div>
        </div>

        <div class="row">
          <div class="two columns">
            <label for="">Age</label>
            <select class="u-full-width" id="">
              <option value="Option 1">16-18</option>
              <option value="Option 2">18-21</option>
              <option value="Option 3">> 21</option>
            </select> 
          </div>
          <div class="two columns">
            <label for="">Gender</label>
            <select class="u-full-width" id="">
              <option value="Option 1">Male</option>
              <option value="Option 2">Female</option>
              <option value="Option 3">Other</option>
            </select>
          </div>  
          <div class="two columns">
            <label for="">Student ID</label>
            <?php echo '<input class="u-full-width" type="number" value="' . $_SESSION['u_id'] . '" id="" max="999999999">' ?>  
          </div>
          <div class="three columns">
            <label for="">Residency</label>
            <select class="u-full-width" id="">
              <option value="Option 1">On-Campus</option>
              <option value="Option 2">Off-Campus</option>
            </select>
          </div>
          <div class="three columns">
            <label for="">Phone</label>
            <?php echo '<input class="u-full-width" type="number" value="' . $_SESSION['u_phone'] . '" id="" max="9999999999">' ?>
          </div>  
        </div>

        <div class="row">
          <div class="six columns">
            <label>Symptoms</label>
            <select data-placeholder="Select up to three symptoms" multiple class="chosen-select" name="symptoms-menu[]">
              <option value=""></option>
              <option value="Fever">Fever</option>
              <option value="Headache">Headache</option>
              <option value="Rash">Rash</option>
              <option value="Chest Pain">Chest Pain</option>
              <option value="Non-stopping Cough">Non-stopping Cough</option>
              <option value="Stuffed Nose">Stuffed Nose</option>
              <option value="Blurry Vision">Blurry Vision</option>
              <option value="Fatigue">Fatigue</option>
              <option value="Problem Sleeping">Problem Sleeping</option>
              <option value="Skin Iritation">Skin Iritation</option>
            </select>

          <!--- Script for dropdown menu
            –––––––––––––––––––––––––––––––––––––––––––––––––– -->
            <script>
              $(".chosen-select").chosen({
                no_results_text: "Oops, nothing found!",
                width:"100%",
                max_selected_options: 3
              })
            </script>
          </div>  

          <div class="six columns">
            <label>Notify NAU about your situation?</label>
            <select class="u-full-width" id="">
              <option value="Option 1">Yes, monitor my situation.</option>
              <option value="Option 2">No, this is not urgent.</option>
            </select>
          </div>
        </div>
        <button class="twelve columns button-primary" type="submit" name="submit">Submit</button>
      </form>
    </div>

  </div>
  
  <footer class="footer">
    <p>&copy; Michael M.Meskhi + Inamullah Rasuna, 2018</p>
  </footer>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>