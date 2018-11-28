<?php
    session_start();
    require_once("config/init.php");
    require_once("database/patient.php");
    require_onde("database/user.php");
     
    $path_to_style="bio/style.css";
    $path_to_layout="bio/layout.css";
    include("templates/header_logged_in.php");
    
    
?>