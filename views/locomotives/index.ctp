<div class="locomotives index">
    <?php
        echo $this->SimplaBoxes->clear();
        echo $this->SimplaBoxes->start_content_box(__('Výpis hnacích vozů', true));
            echo $this->SimplaBoxes->start_content_tab(true);

            echo $this->SimplaTable->start_table('Locomotive');
                echo $this->SimplaTable->table_head(
                        array(
                            __('Číslo HV', true),
                            __('Řada', true),
                            __('Maximální rychlost', true),
                            __('Akce', true)
                        ));
                echo $this->SimplaTable->table_body(
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
                echo $this->SimplaTable->table_foot(
                        array(
                            'addAction' =>  array('text' => __('Přidat nový hnací vůz', true), 'url' => array('admin' => true, 'controller' => 'locomotives', 'action' => 'add')),
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
		<li><?php echo $this->Html->link(__('Zobrazit historii přepravy', true), array('controller' => 'archived_transportations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit vlakové soupravy', true), array('controller' => 'trains', 'action' => 'index')); ?> </li>
	</ul>
</div>



