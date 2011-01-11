<?php
    echo $this->Wizard->progressMenu(array('locomotive', 'cargo', 'driver','review', 'kontrola'));
    pr($wizardData);
    echo $wizardData['review']['Train']['stav_schvaleni'];

    //echo $wizardData['review'][Train]
    /*echo 'Nákladní vozy';?><br/><?php
    foreach ($wizardData['cargo']['Train'] as $cargo) {
       if($cargo != 0){
           echo $cargo;?><br/><?php
       }
    }
    echo 'Lokomotivy';?><br/><?php
    foreach ($wizardData['locomotive']['Train'] as $locomotive) {
       if($locomotive != 0){
           echo $locomotive;?><br/><?php
       }
    }
        echo 'Strojvůdci';?><br/><?php
    foreach ($wizardData['driver']['Train'] as $driver) {
       if($driver != 0){
           echo $driver;?><br/><?php
       }
    }
        echo 'Trasa';?><br/><?php
    foreach ($wizardData['route']['Train'] as $route) {
       if($route != 0){
           echo $route;?><br/><?php
       }
    }
        echo 'Stav schválení';?><br/><?php
        echo $wizardData['review']['Train']['stav_schvaleni'];*/
?>
