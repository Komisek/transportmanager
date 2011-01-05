<div class="roles form">
<?php echo $this->Form->create('Role');?>
	<fieldset>
 		<legend><?php __('Přidat roli'); ?></legend>
	<?php
		echo $this->Form->input('name', array('label' => 'Název'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('OK', true));?>
</div>
<div class="actions">
	<h3><?php __('Další úpravy'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Zobrazit role', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Zobrazit zaměstnance', true), array('controller' => 'employees', 'action' => 'index')); ?> </li>
	</ul>
</div>