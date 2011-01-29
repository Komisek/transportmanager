<div class="trains index">
        <?php  // pr($trains)?>
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
    foreach ($trains as $train) {
       // pr($train);

    switch ($train['Train']['stav_rezervace']) {
    case 'Schváleno':
            ?><tbody>
            <tr class="alt-row">
            <td><?php echo $train['Train']['id'] ?></td>
            <td><?php echo $train['Train']['route_id']?></td>
            <td><?php echo $train['Train']['stav_rezervace']?></td>
            <td><?php echo $train['Route']['datum_cas_odjezdu']?></td>
            <td><?php echo $train['Route']['datum_cas_prijezdu']?></td>
            <td>
                <ul>
                    <li><?php echo $this->Html->link(__('Rezervovat', true), array('controller' => 'orders', 'action' => 'rezervace', $train['Train']['id'])); ?> </li>
        	</ul>
            </td>
            </tr><?php


    break;
    case 'Neschváleno':
            ?><tbody>
            <tr class="alt-row">
            <td><?php echo $train['Train']['id'] ?></td>
            <td><?php echo $train['Train']['route_id']?></td>
            <td><?php echo $train['Train']['stav_rezervace']?></td>
            <td><?php echo $train['Route']['datum_cas_odjezdu']?></td>
            <td><?php echo $train['Route']['datum_cas_prijezdu']?></td>
            <td>
                <ul>
                    <li><?php echo $this->Html->link(__('Detail', true), array('controller' => 'trains', 'action' => 'view', $train['Train']['id'])); ?> </li>
                    <li><?php echo $this->Html->link(__('Upravit', true), array('controller' => 'trains', 'action' => 'editmi', $train['Train']['id'])); ?> </li>
        	</ul>
            </td>
            </tr><?php
    break;
    case 'Rezervováno':
            ?><tbody>
            <tr class="alt-row">
            <td><?php echo $train['Train']['id'] ?></td>
            <td><?php echo $train['Train']['route_id']?></td>
            <td><?php echo $train['Train']['stav_rezervace']?></td>
            <td><?php echo $train['Route']['datum_cas_odjezdu']?></td>
            <td><?php echo $train['Route']['datum_cas_prijezdu']?></td>
            <td>
                <ul>
                     <li><?php echo $this->Html->link(__('Generování informací pro OŘ', true), array('controller' => 'orders', 'action' => 'xmlor', $train['Train']['id'])); ?> </li>
                </ul>
            </td>
            </tr><?php
    break;
    case 'Čeká se na odpověď od MI':
            ?><tbody>
            <tr class="alt-row">
            <td><?php echo $train['Train']['id'] ?></td>
            <td><?php echo $train['Train']['route_id']?></td>
            <td><?php echo $train['Train']['stav_rezervace']?></td>
            <td><?php echo $train['Route']['datum_cas_odjezdu']?></td>
            <td><?php echo $train['Route']['datum_cas_prijezdu']?></td>
            <td>
                <ul>
                    <li><?php echo $this->Html->link(__('Zobrazit datovou větu', true), array('controller' => 'orders', 'action' => 'xmlmi', $train['Train']['id'])); ?> </li>
                    <li><?php echo $this->Html->link(__('Schválit', true), array('controller' => 'orders', 'action' => 'schvaleni', $train['Train']['id'])); ?> </li>
                    <li><?php echo $this->Html->link(__('Neschválit', true), array('controller' => 'orders', 'action' => 'neschvaleni', $train['Train']['id'])); ?> </li>
        	</ul>
            </td>
            </tr><?php
    break;
    case 'Čeká se na odeslání k MI':
            ?><tbody>
            <tr class="alt-row">
            <td><?php echo $train['Train']['id'] ?></td>
            <td><?php echo $train['Train']['route_id']?></td>
            <td><?php echo $train['Train']['stav_rezervace']?></td>
            <td><?php echo $train['Route']['datum_cas_odjezdu']?></td>
            <td><?php echo $train['Route']['datum_cas_prijezdu']?></td>
            <td>
                <ul>
                    <li><?php echo $this->Html->link(__('Odeslat k MI', true), array('controller' => 'orders', 'action' => 'odeslani', $train['Train']['id'])); ?> </li>
                    <li><?php echo $this->Html->link(__('Upravit', true), array('controller' => 'trains', 'action' => 'edit', $train['Train']['id'])); ?> </li>
        	</ul>
            </td>
            </tr><?php
    break;
    default:
        break;
}
}

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


