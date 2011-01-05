<div class="trains form">
<?php echo $this->Form->create('Train');?>
	<fieldset>
 		<legend><?php __('Add Train'); ?></legend>
	<?php
		echo $this->Form->input('route_id', array('label' => 'Číslo trasy'));
		echo $this->Form->input('stav_rezervace');
		echo $this->Form->input('CargoWagon',  array('label' => 'Nákladní vozy'));
		echo $this->Form->input('Employee',  array('label' => 'Strojvůdci'));
		echo $this->Form->input('Locomotive',  array('label' => 'Hnací vozy'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('OK', true));?>
</div>
<div class="actions">
	<h3><?php __('Další úpravy'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Zobrazit vlakové soupravy', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Zobrazit trasy', true), array('controller' => 'routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Přidat trasu', true), array('controller' => 'routes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit nákladní vozy', true), array('controller' => 'cargo_wagons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Přidat nákladní vůz', true), array('controller' => 'cargo_wagons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit strojvůdce', true), array('controller' => 'employees', 'action' => 'engine_driver_index')); ?> </li>
		<li><?php echo $this->Html->link(__('Přidat zaměstnance', true), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit hnací vozy', true), array('controller' => 'locomotives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Přidat hnací vůz', true), array('controller' => 'locomotives', 'action' => 'add')); ?> </li>
	</ul>
</div>