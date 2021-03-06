<?php
  require_once('config/init.php');
  require_once('database/patient.php');

  $name = $_POST['name'];
  $birthdate = $_POST['birthdate']; 
  $cc = $_POST['cc']; 
  $weight = $_POST['weight'];
  $height = $_POST['height'];
  $email = $_POST['email'];   
  $medic_id = $_GET['id'];

  $email_len=strlen ($email);
  if($email_len === 0)
    $email=NULL;

  try {    
    insertPatient($name, $birthdate, $cc, $weight, $height, $email, $medic_id);   
    header("Location: medic_home.php?id=".$medic_id);
  } catch(PDOException $e) {   
    print_r($e); 
    die($medic_id);
    header('Location: register.php');    
  }
?>