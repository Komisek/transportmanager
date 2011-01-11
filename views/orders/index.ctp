<div class="trains index">
        <?php   //pr($trains)?>
    <?php
        echo $this->SimplaBoxes->clear();
        echo $this->SimplaBoxes->start_content_box(__('Výpis souprav a tras', true));
            echo $this->SimplaBoxes->start_content_tab(true);

            echo $this->SimplaTable->start_table('Train');
                echo $this->SimplaTable->table_head(
                        array(
                            __('Číslo vlakové soupravy', true),
                            __('Číslo trasy', true),
                            __('Stav rezervace', true),
                            __('Čas odjezdu', true),
                            __('Čas příjezdu', true),
                            __('Akce', true)
                        ));
                echo $this->SimplaTable->table_body(
                        $trains,
                        array(
                            'Train.id',
                            'Route.id',
                            'Train.stav_rezervace',
                            'Route.datum_cas_odjezdu',
                            'Route.datum_cas_prijezdu',
                            'actions' => array(
                                'orders.schvaleni' => __('Odeslat na schválení', true),
                                'orders.archiv' => __('Přesunout do archivu', true)
                            )
                        ));
                echo $this->SimplaTable->table_foot(
                        array(
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


