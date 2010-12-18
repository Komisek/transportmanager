<div class="routes form">
<?php echo $this->Form->create('Route');?>
	<fieldset>
 		<legend><?php __('Add Route'); ?></legend>
	<?php
		echo $this->Form->input('start_station_id');
		echo $this->Form->input('end_station_id');
		echo $this->Form->input('datum_cas');
		echo $this->Form->input('periodicity_id');
		echo $this->Form->input('train_id');
		echo $this->Form->input('path_id');
		echo $this->Form->input('stav_schvaleni');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Routes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Periodicities', true), array('controller' => 'periodicities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Periodicity', true), array('controller' => 'periodicities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trains', true), array('controller' => 'trains', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Train', true), array('controller' => 'trains', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Paths', true), array('controller' => 'paths', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Path', true), array('controller' => 'paths', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations', true), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Start Station', true), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>