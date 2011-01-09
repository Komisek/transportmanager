<div class="trains index">
        <?php //pr($trains)?>
    <?php
        echo $this->SimplaBoxes->clear();
        echo $this->SimplaBoxes->start_content_box(__('Výpis vlakových souprav', true));
            echo $this->SimplaBoxes->start_content_tab(true);

            echo $this->SimplaTable->start_table('Train');
                echo $this->SimplaTable->table_head(
                        array(
                            __('Číslo vlakové soupravy', true),
                            __('Stav rezervace', true),
                            __('Čas odjezdu', true),
                            __('Čas příjezdu', true),
                            __('Akce', true)
                        ));
                echo $this->SimplaTable->table_body(
                        $trains,
                        array(
                            'Train.id',
                            'Train.stav_rezervace',
                            'Route.datum_cas_odjezdu',
                            'Route.datum_cas_prijezdu',
                            'actions' => array(
                                'train.view' => __('Detail', true),
                                'train.edit' => __('Upravit', true),
                                'train.delete' => __('Smazat', true),
                            )
                        ));
                echo $this->SimplaTable->table_foot(
                        array(
                            'addAction' =>  array('text' => __('Přidat novou vlakovou soupravu', true), 'url' => array('admin' => true, 'controller' => 'trains', 'action' => 'add')),
                            'pagination' => true
                        ));
            echo $this->SimplaTable->end_table();

            //debug($employees);

            echo $this->SimplaBoxes->end_content_tab();
        echo $this->SimplaBoxes->end_content_box();
    ?>
</div>
<div class="actions">
	<h3><?php __('Kam dál?'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Zobrazit nákladní vozy', true), array('controller' => 'cargo_wagons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit strojvůdce', true), array('controller' => 'employees', 'action' => 'engine_driver_index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit hnací vozy', true), array('controller' => 'locomotives', 'action' => 'index')); ?> </li>
	</ul>
</div>


