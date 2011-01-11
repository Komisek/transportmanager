<?php //pr($cargoWagons)?>
<?php echo $this->Wizard->progressMenu(array('locomotive', 'cargo', 'driver', 'route', 'review'));?>
<?php echo $form->create('Train',array('id'=>'TrainCreateForm','url'=>$this->here));?>
    <h2>Přídání vlakové soupravy</h2>
<?php
        echo $this->SimplaBoxes->clear();
        echo $this->SimplaBoxes->start_content_box(__('Krok '.$wizard->stepNumber().': Výběr nákladních vozů', true));
        ?><div class="cargoScroll"><?php
        echo $this->SimplaBoxes->start_content_tab(true);

            echo $this->SimplaTableWp->start_table('CargoWagon');
                echo $this->SimplaTableWp->table_head(
                        array(
                            __('Číslo NV', true),
                            __('Číslo HIM', true),
                            __('Vozová řada', true),
                            __('Akce', true)
                        ));
                echo $this->SimplaTableWp->table_body(
                        $cargoWagons,
                        array(
                            'CargoWagon.cislo_vozu',
                            'CargoWagon.him',
                            'WagonSeries.oznaceni',
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
        </div>
    <?php  echo $this->SimplaBoxes->end_content_tab();
            echo $this->SimplaBoxes->end_content_box();?>
    <div class="submit">
        <?php
         echo $form->submit('Continue', array('div'=>false));
         echo $form->submit('Cancel', array('name'=>'Cancel','div'=>false));
         ?>
    </div>




    <?php
    //echo $form->input('Locomotive',  array('label' => 'Hnací vozy'));
    ?>

<?php echo $form->end();?>
