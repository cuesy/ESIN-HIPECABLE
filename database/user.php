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

  function getUserEmailById ($id) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT email 
                           FROM usersGen 
                           WHERE id = ?');
    $stmt->execute(array($id));
    return $stmt->fetch()['email'];  
  }

  function getPasswordByEmail($email) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT password 
                           FROM usersGen 
                           WHERE email = ?');
    $stmt->execute(array($email));
    return $stmt->fetch()['password'];  
  }

  function checkLogin($email,$password) {
    if (sha1($password)==getPasswordByEmail($email)) {
      return TRUE;
    }
    else {
      return FALSE;
    }
  }

  function getMedicIdFromUser($id) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT id 
                           FROM medics 
                           WHERE id = ?');
    $stmt->execute(array($id));
    return $stmt->fetch()['id'];  
  }

  function getTechnicianIdFromUser($id) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT id 
                           FROM technicians 
                           WHERE id = ?');
    $stmt->execute(array($id));
    return $stmt->fetch()['id'];  
  }

  function checkUserType($email) {
    $id=getUserIdByEmail($email);
    $id_medic=getMedicIdFromUser($id);
    $id_technician=getTechnicianIdFromUser($id);
    if ($id_medic==[] and $id_technician!=[]) {
      return 'technician';
    }
    else if ($id_medic!=[] and $id_technician==[]) {
      return 'medic';
    }
    else{ 
      return 'admin';
    }
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

