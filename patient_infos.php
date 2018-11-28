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
            <th><?=$patient['name']?></th>
        <tr>
        <tr>
            <th>Birthday</th>
            <th><?=$patient['birthday']?></th>
        <tr>
            <th>CC</th>
            <th><?=$patient['cc']?></th>
        <tr>
        <tr>
            <th>Weight</th>
            <th><?=$patient['weight']?></th>
        <tr>
        <tr>
            <th>Height</th>
            <th><?=$patient['height']?></th>
        <tr>
        <tr>
            <th>Email</th>
            <th><?=$patient['email']?></th>
        <tr>
        <th>Notes</th>
        <th>
        <div class="wrap-collabsible">
            <input id="collapsible" class="toggle" type="checkbox">
            <label for="collapsible" class="lbl-toggle">See Notes</label>
            <div class="collapsible-content">
                <div class="content-inner">
                <?=$patient['notes']?> 
                </div>
            </div>
        </div>
        </th>
        </tr>
    </table>    
  </body>
</html>