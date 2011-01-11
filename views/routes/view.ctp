<div class="routes view">
    <?php
    //pr($this->Route->__paths($route['Path']));
    pr($route);
    pr($paths);
        echo $this->SimplaBoxes->clear();
        echo $this->SimplaBoxes->start_content_box(__('Detail trasy', true));
            echo $this->SimplaBoxes->start_content_tab(true);
            echo '<h3>Počáteční stanice: </h3>'.$route['StartStation']['name'].' - Čas odjezdu: '.$route['Route']['datum_cas_odjezdu'].'<br/><br/>';
            echo '<h3>Průjezdní stanice: </h3>  ';
            echo '<h3>Cílová stanice: </h3>'.$route['EndStation']['name'].' - Čas příjezdu: '.$route['Route']['datum_cas_prijezdu'].'<br/><br/>';
            echo '<h3>Stav rezervace: </h3>'.$route['Train']['stav_rezervace'].'<br/><br/>';
            echo $this->Html->link(__('Přiřazený vlak', true), array('controller' => 'trains', 'action' => 'view', $route['Train']['id']));
            echo $this->SimplaBoxes->end_content_tab();
        echo $this->SimplaBoxes->end_content_box();?>
</div>
<div class="actions">
	<h3><?php __('Úpravy'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Upravit', true), array('action' => 'edit', $route['Route']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Smazat', true), array('action' => 'delete', $route['Route']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $route['Route']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Zobraz trasy', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobraz periodicity', true), array('controller' => 'periodicities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobraz vlakové soupravy', true), array('controller' => 'trains', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobraz cesty', true), array('controller' => 'paths', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobraz stanice', true), array('controller' => 'stations', 'action' => 'index')); ?> </li>
	</ul>
</div>
