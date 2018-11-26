<?php

// Change the following values: DATABASE, USERNAME and PASSWORD
  $dbh = new PDO('pgsql:host=dbm.fe.up.pt;port=5432;dbname=esin1802', 'esin1802', 'pedrinhuhanokas');
  $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
