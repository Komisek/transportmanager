<div class="routes form">
<?php echo $this->Form->create('Route');?>
	<fieldset>
 		<legend><?php __('Přidat trasu'); ?></legend>
	<?php
		echo $this->Form->input('start_station_id', array('label' => 'Počáteční stanice'));
		echo $this->Form->input('end_station_id', array('label' => 'Cílová stanice'));
		echo $this->Form->input('datum_cas', array('label' => 'Datum a čas'));
		echo $this->Form->input('periodicity_id', array('label' => 'Periodicita'));
		echo $this->Form->input('train_id', array('label' => 'Číslo vlakové soupravy'));
		echo $this->Form->input('path_id', array('label' => 'Cesta'));
		echo $this->Form->input('stav_schvaleni', array('label' => 'Stav schválení'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('OK', true));?>
</div>
<div class="actions">
	<h3><?php __('Další úpravy'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Zobraz trasy', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobraz periodicity', true), array('controller' => 'periodicities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobraz vlakové soupravy', true), array('controller' => 'trains', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobraz cesty', true), array('controller' => 'paths', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobraz stanice', true), array('controller' => 'stations', 'action' => 'index')); ?> </li>
	</ul>
</div>