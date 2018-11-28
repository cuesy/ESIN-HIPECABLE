<ul>
    <li> <a href="add_patient.php">Add patient</a></li> 
        <li> Pacientes:
            <ol>
            <?php
            $patients=getPatientsByMedicId($_SESSION['id']);      
            if (count($patients) === 0){
                echo("No patients registered yet;)");
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