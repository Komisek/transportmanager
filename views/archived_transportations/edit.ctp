<div class="archivedTransportations form">
<?php echo $this->Form->create('ArchivedTransportation');?>
	<fieldset>
 		<legend><?php __('Edit Archived Transportation'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('path_id');
		echo $this->Form->input('start_station_id');
		echo $this->Form->input('end_station_id');
		echo $this->Form->input('datum_cas');
		echo $this->Form->input('CargoWagon');
		echo $this->Form->input('Employe');
		echo $this->Form->input('Locomotive');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('ArchivedTransportation.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('ArchivedTransportation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Archived Transportations', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cargo Wagons', true), array('controller' => 'cargo_wagons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cargo Wagon', true), array('controller' => 'cargo_wagons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees', true), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employe', true), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locomotives', true), array('controller' => 'locomotives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locomotive', true), array('controller' => 'locomotives', 'action' => 'add')); ?> </li>
	</ul>
</div>