<?php
    require_once("config/init.php");
    require_once("database/patient.php");


    $medic_id=$_GET['id'];   

    $path_to_style="main/style.css";
    $path_to_layout="main/layout.css";
    include("templates/header.php");
    include("templates/add_patient.php");
    ?>

    <ul>
        <li> Pacientes:
            <ol>
            <?php
            $patients=getPatientsByMedicId(1);      
            if (count($patients) === 0){
                echo("NÃO TENS PACIENTES, É MELHOR COMEÇAR A TRABALHAR ;)");
            }
            else{                
                foreach ( $patients as $patient => $patient_info){?>
                    <li>
                    <a href=<?="patient_infos.php?patient_id=".$patient_info['id']?>><?=$patient_info['name']?></a>                        
                    </li>               
                <?php 
                }  
            }
            ?>
            </ol>    
        </li>
    </ul>    
  </body>
</html>