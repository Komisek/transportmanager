<div class="nearStations form">
<?php echo $this->Form->create('NearStation');?>
	<fieldset>
 		<legend><?php __('Přidání okolní stanice'); ?></legend>
	<?php
		echo $this->Form->input('station_id', array('label' => 'Výchozí stanice'));
		echo $this->Form->input('next_station_id', array('label' => 'Následující stanice'));
		echo $this->Form->input('vzdalenost', array('label' => 'Vzdálenost'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('OK', true));?>
</div>
<div class="actions">
	<h3><?php __('Další úpravy'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Zobrazit okolní stanice', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Zobrazit stanice', true), array('controller' => 'stations', 'action' => 'index')); ?> </li>
	</ul>
</div>