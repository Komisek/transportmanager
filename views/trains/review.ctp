<?php 
    //pr($wizardData);
    //echo $wizardData['Train'][1];
foreach ($wizardData['cargo']['Train'] as $cargo) {
       if($cargo != 0){
           echo $cargo;?><br/><?php
       }
    }

?>
<?php echo $this->Wizard->progressMenu(array('locomotive', 'cargo', 'driver', 'review', 'kontrola'));?>
<?php echo $form->create('Train',array('id'=>'TrainCreateForm','url'=>$this->here));?>
    <h2>Přídání vlakové soupravy</h2>
<?php
        echo $this->SimplaBoxes->clear();
        echo $this->SimplaBoxes->start_content_box(__('Krok '.$wizard->stepNumber().': Dokončení', true));
            echo $this->SimplaBoxes->start_content_tab(true);
            $options = array('Čeká se na odpověď' =>  'Čeká se na odpověď','Rezervováno' => 'Rezervováno','Nerezervováno' =>  'Nerezervováno');
            echo $form->select('stav_rezervace', $options);?>

        <div class="submit">
        <?php
         echo $form->submit('Continue', array('div'=>false));
         echo $form->submit('Cancel', array('name'=>'Cancel','div'=>false));
         ?>
    </div>

    <?php  echo $this->SimplaBoxes->end_content_tab();
        echo $this->SimplaBoxes->end_content_box();?>

    <?php
    //echo $form->input('Locomotive',  array('label' => 'Hnací vozy'));
    ?>

<?php echo $form->end();?>
