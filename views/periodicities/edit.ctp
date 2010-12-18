<div class="periodicities form">
<?php echo $this->Form->create('Periodicity');?>
	<fieldset>
 		<legend><?php __('Edit Periodicity'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Periodicity.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Periodicity.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Periodicities', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Routes', true), array('controller' => 'routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Route', true), array('controller' => 'routes', 'action' => 'add')); ?> </li>
	</ul>
</div>