<div class="cargoWagons index">
    <?php
        echo $this->SimplaBoxes->clear();
        echo $this->SimplaBoxes->start_content_box(__('Výpis nákladních vozů', true));
            echo $this->SimplaBoxes->start_content_tab(true);

            echo $this->SimplaTable->start_table('CargoWagon');
                echo $this->SimplaTable->table_head(
                        array(
                            __('Číslo HIM', true),
                            __('Číslo vozu', true),
                            __('Vozová řada', true),
                            __('Akce', true)
                        ));
                echo $this->SimplaTable->table_body(
                        $cargoWagons,
                        array(
                            'CargoWagon.him',
                            'CargoWagon.cislo_vozu',
                            'CargoWagon.wagon_series_id',
                            'actions' => array(
                                'cargo_wagon.view' => __('Detail', true),
                                'cargo_wagon.edit' => __('Upravit', true),
                                'cargo_wagon.delete' => __('Smazat', true),
                            )
                        ));
                echo $this->SimplaTable->table_foot(
                        array(
                            'addAction' =>  array('text' => __('Přidat nový nákladní vůz', true), 'url' => array('admin' => true, 'controller' => 'cargo_wagons', 'action' => 'add')),
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
		<li><?php echo $this->Html->link(__('Zobrazit vozové řady', true), array('controller' => 'wagon_series', 'action' => 'index')); ?> </li>
	</ul>
</div>

