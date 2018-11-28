<?php
  // Change the following values: DATABASE, USERNAME and PASSWORD
  $dbh = new PDO('pgsql:host=dbm.fe.up.pt;port=5432;dbname=esin1802', 'esin1802', 'pedrinhuhanokas');
  $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);  
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if (isset($_SESSION['error_message'])) {
    $_ERROR_MESSAGE = $_SESSION['error_message']; 
    unset($_SESSION['error_message']);
  }

  if (isset($_SESSION['success_message'])) {
    $_SUCCESS_MESSAGE = $_SESSION['success_message']; 
    unset($_SESSION['success_message']);
  }

  if (isset($_SESSION['form_values'])) {
    $_FORM_VALUES = $_SESSION['form_values']; 
    unset($_SESSION['form_values']);
  }
?>