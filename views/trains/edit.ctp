<div class="trains form">
<?php echo $this->Form->create('Train');?>
	<fieldset>
 		<legend><?php __('Edit Train'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('route_id');
		echo $this->Form->input('locomotive_id');
		echo $this->Form->input('engine_driver_id');
		echo $this->Form->input('stav_rezervace');
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Train.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Train.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Trains', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cargo Wagons', true), array('controller' => 'cargo_wagons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cargo Wagon', true), array('controller' => 'cargo_wagons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employes', true), array('controller' => 'employes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employe', true), array('controller' => 'employes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locomotives', true), array('controller' => 'locomotives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locomotive', true), array('controller' => 'locomotives', 'action' => 'add')); ?> </li>
	</ul>
</div>