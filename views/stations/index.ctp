<div class="stations index">
    <?php
        echo $this->SimplaBoxes->clear();
        echo $this->SimplaBoxes->start_content_box(__('Výpis Stanic', true));
            echo $this->SimplaBoxes->start_content_tab(true);

            echo $this->SimplaTable->start_table('Station');
                echo $this->SimplaTable->table_head(
                        array(
                            __('Název', true),
                            __('Okres', true),
                            __('Kraj', true),
                            __('Číslo', true),
                            __('Akce', true)
                        ));
                echo $this->SimplaTable->table_body(
                        $stations,
                        array(
                            'Station.name',
                            'Station.okres',
                            'Station.kraj',
                            'Station.cislo',
                            'actions' => array(
                                'station.view' => __('Detail', true),
                                'station.edit' => __('Upravit', true),
                                'station.delete' => __('Smazat', true),
                            )
                        ));
                echo $this->SimplaTable->table_foot(
                        array(
                            'addAction' =>  array('text' => __('Přidat novou stanici', true), 'url' => array('admin' => true, 'controller' => 'stations', 'action' => 'add')),
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
		<li><?php echo $this->Html->link(__('Zobrazit cesty', true), array('controller' => 'paths', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit okolní stanice', true), array('controller' => 'near_stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobraz Trasy', true), array('controller' => 'routes', 'action' => 'index')); ?> </li>
	</ul>
</div>



