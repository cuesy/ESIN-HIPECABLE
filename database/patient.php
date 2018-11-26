<?php 
  function insertPatient($name, $birthdate, $cc, $weight, $height, $email, $medic_id) {
    global $dbh;
    $stmt = $dbh->prepare('INSERT INTO patients (name, birthday, cc, weight, height, email, medic_id) 
                                              VALUES(?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute(array($name, $birthdate, $cc, $weight, $height, $email, $medic_id));
  }

  
  function getPatientsByMedicId($id) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT * 
                           FROM patients 
                           WHERE medic_id = ?');
    $stmt->execute(array($id));
    return $stmt->fetch();  
  }
  

?>

