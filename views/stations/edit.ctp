<div class="stations form">
<?php echo $this->Form->create('Station');?>
	<fieldset>
 		<legend><?php __('Edit Station'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('okres');
		echo $this->Form->input('kraj');
		echo $this->Form->input('cislo');
		echo $this->Form->input('gps');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Station.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Station.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Stations', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Paths', true), array('controller' => 'paths', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Path', true), array('controller' => 'paths', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Near Stations', true), array('controller' => 'near_stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station Id', true), array('controller' => 'near_stations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Routes', true), array('controller' => 'routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Start Station', true), array('controller' => 'routes', 'action' => 'add')); ?> </li>
	</ul>
</div>