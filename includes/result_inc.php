<?php 
  session_start();
  include ('classes/Database.php');

  if (isset($_POST['restart'])) {
    header("Location: ../index.php?page=symptoms");
    exit();
  }
  elseif (isset($_POST['download'])){
    /*foreach ($_SESSION['report'] as $key => $value) {
      echo $key . ' ' . $value;
    }*/

    if (isset($_SESSION['u_disease'])) {
      $disease = $_SESSION['u_disease'];
    }
    else {
      $disease = 'Undetermined';
    }

    $file = fopen('report.txt', 'w+'); //Open your .txt file
    ftruncate($file, 0); //Clear the file to 0bit
    $content = 'Full Name:'.$_SESSION['report']['fname']. PHP_EOL .'Reason:'.$_SESSION['report']['reason']. PHP_EOL .'Age:'.$_SESSION['report']['age']. PHP_EOL .'Gender:'.$_SESSION['report']['gender']. PHP_EOL .'Student ID:'.$_SESSION['report']['stdid']. PHP_EOL .'Residency:'.$_SESSION['report']['residency']. PHP_EOL .'Phone:'.$_SESSION['report']['phone']. PHP_EOL .'Monitor:'.$_SESSION['report']['monitor']. PHP_EOL .'Disease:'.$disease. PHP_EOL .'Symptom 1:'.$_SESSION['report']['symptoms-menu'][0]. PHP_EOL .'Symptom 2:'.$_SESSION['report']['symptoms-menu'][1]. PHP_EOL .'Symptom 3:'.$_SESSION['report']['symptoms-menu'][2];
    fwrite($file , $content); //Now lets write it in there
    fclose($file ); //Finally close our .txt
    die(header("Location: ".$_SERVER["HTTP_REFERER"]));
  }
?>