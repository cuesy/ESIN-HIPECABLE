<?php
  require_once('config/init.php');
  require_once('database/medic.php');

  $name = $_POST['name'];
  $password = $_POST['password'];
  $email = $_POST['email'];  


  try {    
    insertMedic($name, $password, $email);   
    $medic_id=getMedicIdByEmail($email);
    header("Location: medic_home.php?id=".$medic_id);
  } catch(PDOException $e) {   
    print_r($e); 
    die($medic_id);
    header('Location: register.php');    
  }
?>