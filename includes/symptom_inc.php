<?php 
  session_start();
  include ('classes/Database.php');

  if (isset($_POST['submit'])) {
    $symptoms = $_POST['symptoms-menu']; sort($symptoms);

    $query = DB::query('SELECT * FROM symptoms WHERE symptom1=:symptom1 AND symptom2=:symptom2 AND symptom3=:symptom3', 
      array(':symptom1'=>$symptoms[0],':symptom2'=>$symptoms[1],':symptom3'=>$symptoms[2]));

    if (isset($query)) {
      $_SESSION['u_disease'] = $query[0]['disease'];
      $_SESSION['u_description'] = $query[0]['description'];
      $_SESSION['u_source'] = $query[0]['source'];
    }

    header("Location: ../index.php?page=result");
    exit();
  }
  else {
    header("Location: ../index.php?login=error");
    exit();
  }
?>