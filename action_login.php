<?php
  require_once('config/init.php');
  require_once('database/user.php');

  $password = $_POST['password'];
  $email = $_POST['email'];  

  $user_id=getUserIdByEmail($email);

  $login=checkLogin($email,$password);
  $user_type=checkUserType($email);

  if ($login==FALSE)
  {
      header('Location:login_failed.php');
  }
  else {
      if ($user_type=='medic') {
          try{
            session_start();
            $_SESSION['id']=$user_id;
            $_SESSION['email']=$email;
            header("Location: medic_home.php?id=".$_SESSION['id']);
          } catch(PDOException $e) {
            print_r($e); 
            die($user_id);
            header('Location: login.php');    
          }

      }
      else if($user_type=='technician') {
        try{
           session_start();
           $_SESSION['id']=$user_id;
           $_SESSION['email']=$email;
           header("Location: technician_home.php?id=".$_SESSION['id']);
          } catch(PDOException $e) {
            print_r($e); 
            die($user_id);
            header('Location: login.php');    
          }

      }
      else if($user_type=='admin') {
        try{
           session_start();
           $_SESSION['id']=$user_id;
           $_SESSION['email']=$email;
            header("Location: admin_home.php?id=".$_SESSION['id']);
          } catch(PDOException $e) {
            print_r($e); 
            die($user_id);
            header('Location: login.php');    
          }

      }

  }
?>