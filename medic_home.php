<?php
    session_start();
    require_once("config/init.php");
    require_once("database/user.php");
    require_once("database/patient.php");


    $path_to_style="main/style.css";
    $path_to_layout="main/layout.css";
    include("templates/header_logged_in.php");
    include("templates/display_patients.php");
    ?>  
  </body>
</html>