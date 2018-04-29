<?php
  session_start();

  if (isset($_GET['page'])) {
    if ($_GET['page'] == 'symptoms' && isset($_SESSION['u_id'])) { // to make sure only logged in users can access this page
      include('includes/views/symptoms.php');
    }
    elseif ($_GET['page'] == 'home') {
      include('includes/views/home.php');
    }
    else {
      include('includes/views/home.php');
    }
  }
  else {
    include('includes/views/home.php');
  }
?>