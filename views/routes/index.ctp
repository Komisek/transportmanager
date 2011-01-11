<div class="routes index">
    <?php
    //pr($routes);
        echo $this->SimplaBoxes->clear();
        echo $this->SimplaBoxes->start_content_box(__('Výpis definovaných tras', true));
            echo $this->SimplaBoxes->start_content_tab(true);
                echo $this->SimplaTable->start_table('Route');
                    echo $this->SimplaTable->table_head(
                            array(
                                __('Počáteční stanice', true),
                                __('Cílová stanice', true),
                                __('Datum a čas odjezdu', true),
                                __('Datum a čas příjezdu', true)
                            ));
                    echo $this->SimplaTable->table_body(
                            $routes,
                            array(
                                'StartStation.name',
                                'EndStation.name',
                                'Route.datum_cas_odjezdu',
                                'Route.datum_cas_prijezdu',
                                'actions' => array(
                                    'route.view' => __('Detail', true),
                                    
                                    'route.delete' => __('Smazat', true),
                                    )
                                )
                            );
                    echo $this->SimplaTable->table_foot(
                        array(
                            'addAction' =>  array('text' => __('Přidat novou trasu', true), 'url' => array('controller' => 'routes', 'action' => 'add')),
                            'pagination' => true
                        ));


                echo $this->SimplaTable->end_table();
            echo $this->SimplaBoxes->end_content_tab();
        echo $this->SimplaBoxes->end_content_box();
    ?>
<div class="actions">
	<h3><?php __('Kam dál?'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Přidat trasu', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Zobraz periodicity', true), array('controller' => 'periodicities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobraz vlakové soupravy', true), array('controller' => 'trains', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobraz cesty', true), array('controller' => 'paths', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobraz stanice', true), array('controller' => 'stations', 'action' => 'index')); ?> </li>
	</ul>
</div>