<?php
    require_once("config/init.php");
    require_once("database/patient.php");


    $medic_id=$_GET['id'];    
    
    $a=getPatientsByMedicId($medic_id);
    print_r($a);

    include("templates/header.php");
    include("templates/add_patient.php");

?>