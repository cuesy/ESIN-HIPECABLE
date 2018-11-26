<?php
  function insertMedic($name, $password, $email) {
    global $dbh;
    $stmt = $dbh->prepare('INSERT INTO medics (name, password, email) VALUES(?, ?, ?)');
    $stmt->execute(array($name, sha1($password), $email));
  }


  function getMedicIdByEmail($email) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT id 
                           FROM medics 
                           WHERE email = ?');
    $stmt->execute(array($email));
    return $stmt->fetch()['id'];  
  }

?>

