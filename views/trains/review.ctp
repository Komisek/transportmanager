<?php pr($wizardData)?>
<?php echo $this->Wizard->progressMenu(array('locomotive', 'cargo', 'driver', 'route', 'review'));?>
<?php echo $form->create('Train',array('id'=>'TrainCreateForm','url'=>$this->here));?>
    <h2>Přídání vlakové soupravy</h2>
<?php
        echo $this->SimplaBoxes->clear();
        echo $this->SimplaBoxes->start_content_box(__('Krok '.$wizard->stepNumber().': Dokončení', true));
            echo $this->SimplaBoxes->start_content_tab(true);

            echo $form->input('stav_schvaleni');?>

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
