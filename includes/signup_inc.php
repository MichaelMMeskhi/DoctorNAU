<?php 
  session_start();
  include ('classes/Database.php');

  if (isset($_POST['submit'])) {
    $id = $_POST['stdid'];
    $username = $_POST['uname'];
    $full_name = $_POST['fname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['psw'];
    $password_rep = $_POST['psw-repeat'];

    if (!$_POST['tos']){
      // CHECK AGREE TO TOS
      header("Location: ../index.php?signup=tos");
      exit();
    }
    else {
      if (!empty(DB::query('SELECT * FROM users WHERE id=:id', array(':id'=>$id)))) {
        // USER WITH THE SAME ID ALREADY EXISTS
        header("Location: ../index.php?signup=duplicateid");
        exit();
      }
      else {
        if (!empty(DB::query('SELECT * FROM users WHERE username=:username', array(':username'=>$username)))) {
          // USERNAME ALREADY TAKEN
          header("Location: ../index.php?signup=duplicateusername");
          exit();
        }
        else {
          if (!preg_match("/^[a-zA-Z]*$/", $first_name) || !preg_match("/^[a-zA-Z]*$/", $last_name)) {
            // INVALID NAME
            header("Location: ../index.php?signup=invalidname");
            exit();
          }
          else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              // INVALID EMAIL
              header("Location: ../index.php?signup=invalidemail");
              exit();
            }
            else {
              if ($password != $password_rep) {
                // PASSWORD DOES NOT MATCH
                header("Location: ../index.php?signup=pswerror");
                exit();
              }
              else {
                $hashedPsw = password_hash($password, PASSWORD_DEFAULT);

                DB::query('INSERT INTO users (id, username, email, full_name, password, phone) VALUES (:id, :username, :email, :full_name, :password, :phone)',
                  array(':id'=>$id,':username'=>$username,':email'=>$email,':full_name'=>$full_name,':password'=>$hashedPsw,':phone'=>$phone));

                $_SESSION['u_id'] = $id;
                $_SESSION['u_username'] = $username;
                $_SESSION['u_email'] = $email;
                $_SESSION['u_fname'] = $full_name;
                $_SESSION['u_phone'] = $phone;

                header("Location: ../index.php?page=symptoms&signup=success");
                exit();
              }
            }
          }
        }
      }
    }
  }
  else {
    header("Location: ../index.php?signup=error");
    exit();
  }
?>