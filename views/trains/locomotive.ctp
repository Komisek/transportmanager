<?php //pr($locomotives)?>
<?php echo $this->Wizard->progressMenu(array('route' => 'Výběr trasy', 'locomotive' => ' * Výběr hnacího vozu', 'cargo' => ' * Výběr nákladního vozu', 'driver' => ' * Výběr strojvedoucího', 'review' => ' * Dokončení vlakové soupravy'), array('wrap' => 'wrap'));?><br/>
<?php echo $form->create('Train',array('id'=>'TrainCreateForm','url'=>$this->here));?>
<br/><br/>
<?php
        echo $this->SimplaBoxes->clear();
        echo $this->SimplaBoxes->start_content_box(__('Krok '.$wizard->stepNumber().': Výběr hnacího vozu', true));
                ?><div class="cargoScroll"><?php
        echo $this->SimplaBoxes->start_content_tab(true);

            echo $this->SimplaTableWp->start_table('Locomotive');
                echo $this->SimplaTableWp->table_head(
                        array(
                            __('Číslo HV', true),
                            __('Řada', true),
                            __('Maximální rychlost', true),
                            __('Akce', true)
                        ));
                echo $this->SimplaTableWp->table_body(
                        $locomotives,
                        array(
                            'Locomotive.cislo_hv',
                            'Locomotive.rada',
                            'Locomotive.maximalni_rychlost',
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

    <?php  echo $this->SimplaBoxes->end_content_tab();
        echo $this->SimplaBoxes->end_content_box();?>

    <?php
    //echo $form->input('Locomotive',  array('label' => 'Hnací vozy'));
    ?>

<?php echo $form->end();?>
