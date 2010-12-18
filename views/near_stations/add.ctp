<div class="nearStations form">
<?php echo $this->Form->create('NearStation');?>
	<fieldset>
 		<legend><?php __('Add Near Station'); ?></legend>
	<?php
		echo $this->Form->input('station_id');
		echo $this->Form->input('next_station_id');
		echo $this->Form->input('vzdalenost');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Near Stations', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Stations', true), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station', true), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>