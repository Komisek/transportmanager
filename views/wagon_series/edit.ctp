<div class="wagonSeries form">
<?php echo $this->Form->create('WagonSeries');?>
	<fieldset>
 		<legend><?php __('Edit Wagon Series'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('brzdici_vaha');
		echo $this->Form->input('cislo');
		echo $this->Form->input('delka');
		echo $this->Form->input('oznaceni');
		echo $this->Form->input('pocet_naprav');
		echo $this->Form->input('rozvor');
		echo $this->Form->input('rucni_brzda');
		echo $this->Form->input('unosnost');
		echo $this->Form->input('vyska_nad_temenem_kolejnice');
		echo $this->Form->input('vzdalenost_os');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('WagonSeries.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('WagonSeries.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Wagon Series', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cargo Wagons', true), array('controller' => 'cargo_wagons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cargo Wagon', true), array('controller' => 'cargo_wagons', 'action' => 'add')); ?> </li>
	</ul>
</div>