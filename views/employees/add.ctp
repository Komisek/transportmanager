<div class="employees form">
<?php echo $this->Form->create('Employee');?>
	<fieldset>
 		<legend><?php __('Přidání zaměstnance'); ?></legend>
	<?php
		echo $this->Form->input('name', array('label' => 'Jméno'));
		echo $this->Form->input('surname', array('label' => 'Příjmení'));
		echo $this->Form->input('email');
		echo $this->Form->input('passwd', array('label' => 'Heslo'));
		echo $this->Form->input('role_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('OK', true));?>
</div>
<div class="actions">
	<h3><?php __('Další úpravy'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Zobrazit zaměstnance', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Zobrazit role', true), array('controller' => 'roles', 'action' => 'index')); ?> </li>
	</ul>
</div>