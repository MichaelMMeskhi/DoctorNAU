<?php 
  session_start();
  include ('classes/Database.php');

  if (isset($_POST['submit'])) {
    $username = $_POST['uname'];
    $password = $_POST['psw'];

    $query = DB::query('SELECT * FROM users WHERE username=:username', array(':username'=>$username));

    if (!isset($query)) {
      header("Location: ../index.php?login=error");
      exit();
    }
    else {
      $pwdCheck = password_verify($password, $query[0]['password']);

      if ($pwdCheck == false) {
        header("Location: ../index.php?login=error");
        exit();
      }
      elseif ($pwdCheck == true) {
        $_SESSION['u_id'] = $query[0]['id'];
        $_SESSION['u_username'] = $query[0]['username'];
        $_SESSION['u_email'] = $query[0]['email'];
        $_SESSION['u_fname'] = $query[0]['full_name'];
        $_SESSION['u_phone'] = $query[0]['phone'];

        header("Location: ../index.php?page=symptoms&login=success");
        exit();
      }
    }
  }
  else {
    header("Location: ../index.php?login=error");
    exit();
  }
?>