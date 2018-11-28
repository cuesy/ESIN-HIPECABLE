<?php
    session_start();
    require_once("config/init.php");
    require_once("database/patient.php");


    $patient_id=$_GET['patient_id'];   
    $patient=getPatient($patient_id);
     
    $path_to_style="patient_info/style.css";
    $path_to_layout="patient_info/layout.css";
    include("templates/header_logged_in.php");
    
    
?>
    <?php /* name birthday cc weight height email medic_id notes */?>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Birthday</th>
            <th>CC</th>
            <th>Weight</th>
            <th>Height</th>
            <th>Email</th>
            <th>Notes</th>
        </tr>
        <tr>              
        <th><?=$patient['name']?></th>
        <th><?=$patient['birthday']?></th>
        <th><?=$patient['cc']?></th>
        <th><?=$patient['weight']?></th>
        <th><?=$patient['height']?></th>
        <th><?=$patient['email']?></th>
        <th><?=$patient['notes']?></th>        
        </tr>
        
    </table>    
  </body>
</html>