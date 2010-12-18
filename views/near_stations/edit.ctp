<div class="nearStations form">
<?php echo $this->Form->create('NearStation');?>
	<fieldset>
 		<legend><?php __('Edit Near Station'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('NearStation.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('NearStation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Near Stations', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Stations', true), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station', true), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>