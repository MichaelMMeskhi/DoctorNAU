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

        // prevent exploit by typing the address manually
        header("Location: ../../index.php");
        exit();
      }
      else {
        include include ('includes/menubarIn_inc.php');
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

      <form>
        <div class="row">
          <div class="three columns">
            <label for="name">First name</label>
            <input class="u-full-width" type="text" placeholder="Mike" id="name"  maxlength="35"/>
          </div>
          <div class="three columns">
            <label for="name">Last name</label>
            <input class="u-full-width" type="text" placeholder="Rasuna" id="name"  maxlength="35"/>
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
            <input class="u-full-width" type="number" placeholder="111222333" id="" max="999999999">  
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
            <input class="u-full-width" type="number" placeholder="832-123-4567" id="" max="9999999999"> 
          </div>  
        </div>

        <div class="row">
          <div class="six columns">
            <form action="" method="post">
              <label>Symptoms</label>
              <select data-placeholder="Select up to four symptoms" multiple class="chosen-select" name="symptoms-menu">
                <option value=""></option>
                <option>Fever</option>
                <option>Headache</option>
                <option>Rash</option>
                <option>Chest Pain</option>
                <option>Non-stopping Cough</option>
                <option>Stuffed Nose</option>
                <option>Blurry Vision</option>
                <option>Fatigue</option>
              </select>

            <!--- Script for dropdown menu
              –––––––––––––––––––––––––––––––––––––––––––––––––– -->
              <script>
                $(".chosen-select").chosen({
                  no_results_text: "Oops, nothing found!",
                  width:"100%",
                  max_selected_options: 4
                })
              </script>
            </form>
          </div>  

          <div class="six columns">
            <label>Notify NAU about your situation?</label>
            <select class="u-full-width" id="">
              <option value="Option 1">Yes, monitor my situation.</option>
              <option value="Option 2">No, this is not urgent.</option>
            </select>
          </div>
        </div>

        <input class="twelve columns button-primary" type="submit" value="Submit">
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