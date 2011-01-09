<?php //pr($employees)?>
<?php echo $this->Wizard->progressMenu(array('locomotive', 'cargo', 'driver', 'route', 'review'));?>
<?php echo $form->create('Train',array('id'=>'TrainCreateForm','url'=>$this->here));?>
    <h2>Přídání vlakové soupravy</h2>
<?php
        echo $this->SimplaBoxes->clear();
        echo $this->SimplaBoxes->start_content_box(__('Krok '.$wizard->stepNumber().': Výběr strojvůdců', true));
            echo $this->SimplaBoxes->start_content_tab(true);

            echo $this->SimplaTableWp->start_table('Employee');
                echo $this->SimplaTableWp->table_head(
                        array(
                            __('Jméno', true),
                            __('Příjmení', true),
                            __('Akce', true)
                        ));
                echo $this->SimplaTableWp->table_body(
                        $employees,
                        array(
                            'Employee.name',
                            'Employee.surname',
                            'actions' => array(
                                'Locomotive.view' => __('Detail', true),
                                'Locomotive.edit' => __('Upravit', true),
                                'Locomotive.delete' => __('Smazat', true),
                                )
                            ));
                echo $this->SimplaTableWp->table_foot(
                        array(
                            'addAction' =>  array('text' => __('Přidat nový hnací vůz', true), 'url' => array('admin' => true, 'controller' => 'locomotives', 'action' => 'add')),
                            'pagination' => true
                        ));
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
