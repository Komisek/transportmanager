<?php //pr($routes)?>
<?php echo $this->Wizard->progressMenu(array('locomotive', 'cargo', 'driver', 'route', 'review', 'kontrola'));?>
<?php echo $form->create('Train',array('id'=>'TrainCreateForm','url'=>$this->here));?>
    <h2>Přídání vlakové soupravy</h2>
<?php
        echo $this->SimplaBoxes->clear();
        echo $this->SimplaBoxes->start_content_box(__('Krok '.$wizard->stepNumber().': Výběr trasy', true));
            echo $this->SimplaBoxes->start_content_tab(true);

            echo $this->SimplaTableWp->start_table('Route');
                echo $this->SimplaTableWp->table_head(
                        array(
                            __('Výchozi stanice', true),
                            __('Cílová stanice', true),
                            __('Čas odjezdu', true),
                            __('Čas příjezdu', true),
                            __('Periodicita', true),
                        ));
                echo $this->SimplaTableWp->table_body(
                        $routes,
                        array(
                            'StartStation.name',
                            'EndStation.name',
                            'Route.datum_cas_odjezdu',
                            'Route.datum_cas_prijezdu',
                            'Periodicity.name',
                            ));
                echo $this->Html->link('Přidat novou trasu', '/routes/add', array('target' => '_blank'));
            echo $this->SimplaTableWp->end_table();?>

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
