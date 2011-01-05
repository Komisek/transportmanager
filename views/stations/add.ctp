<div class="stations form">
<?php echo $this->Form->create('Station');?>
	<fieldset>
 		<legend><?php __('Add Station'); ?></legend>
	<?php
		echo $this->Form->input('name', array('label' => 'Název'));
		echo $this->Form->input('okres');
		echo $this->Form->input('kraj');
		echo $this->Form->input('cislo', array('label' => 'Číslo'));
		echo $this->Form->input('gps');
	?>
	</fieldset>
<?php echo $this->Form->end(__('OK', true));?>
</div>
<div class="actions">
	<h3><?php __('Další úpravy'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Zobrazit stanice', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Zobrazit cesty', true), array('controller' => 'paths', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit okolní stanice', true), array('controller' => 'near_stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit trasy', true), array('controller' => 'routes', 'action' => 'index')); ?> </li>
	</ul>
</div>