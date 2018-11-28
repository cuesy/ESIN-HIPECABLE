<?php
  require_once('config/init.php');
  require_once('database/user.php');

  $name = $_POST['name'];
  $password = $_POST['password'];
  $email = $_POST['email'];  
  $user_type= $_POST['user_type'];


  try {    
    insertUser($name, $password, $email,"FALSE");  
    $user_id=getUserIdByEmail($email);
    if ($user_type=='Medic') {
      setMedic($user_id);
      header("Location: medic_home.php?id=".$user_id);}
    else if($user_type=='Technician') {
      setTechnician($user_id);
      header("Location: technician_home.php?id=".$user_id);}
  } catch(PDOException $e) {   
    print_r($e); 
    die($user_id);
    header('Location: register.php');    
  }
?>