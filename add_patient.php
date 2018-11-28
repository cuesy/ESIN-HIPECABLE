<?php
    $path_to_style="add_patient/style.css";
    $path_to_layout="add_patient/layout.css";
    session_start();
    require_once("config/init.php");
    require_once("database/patient.php");
    $medic_id=$_SESSION['id'];

    $path_to_style="main/style.css";
    $path_to_layout="main/layout.css";
    include("templates/header.php");
    include("templates/display_patients.php");
    include("templates/add_patient.php");
    ?>