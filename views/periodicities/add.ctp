<div class="periodicities form">
<?php echo $this->Form->create('Periodicity');?>
	<fieldset>
 		<legend><?php __('Přidání periodicity'); ?></legend>
	<?php
		echo $this->Form->input('name', array('label' => 'Název'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('OK', true));?>
</div>
<div class="actions">
	<h3><?php __('Další úpravy'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Zobraz periodicity', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Zobraz trasy', true), array('controller' => 'routes', 'action' => 'index')); ?> </li>
	</ul>
</div>