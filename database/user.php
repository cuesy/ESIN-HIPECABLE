<?php
  function insertUser($name, $password, $email,$state) {
    global $dbh;
    $stmt = $dbh->prepare('INSERT INTO usersGen (name, password, email,validated) VALUES(?, ?, ?,?)');
    $stmt->execute(array($name, sha1($password), $email,$state));
  }


  function getUserIdByEmail($email) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT id 
                           FROM usersGen 
                           WHERE email = ?');
    $stmt->execute(array($email));
    return $stmt->fetch()['id'];  
  }

  function setMedic($id) {
    global $dbh;
    $stmt = $dbh->prepare('INSERT INTO medics (id) VALUES(?)');
    $stmt->execute(array($id));
  }

  function setTechnician ($id) {
    global $dbh;
    $stmt = $dbh ->prepare('INSERT INTO technicians(id) VALUES (?)');
    $stmt -> execute(array($id)) ;
  }

?>

