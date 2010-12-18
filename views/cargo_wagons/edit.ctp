<div class="cargoWagons form">
<?php echo $this->Form->create('CargoWagon');?>
	<fieldset>
 		<legend><?php __('Edit Cargo Wagon'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('wagon_series_id');
		echo $this->Form->input('cislo_him');
		echo $this->Form->input('cislo_vozu');
		echo $this->Form->input('druh_brzdeni');
		echo $this->Form->input('druh_brzdoveho_valce');
		echo $this->Form->input('dvojkoli_revize');
		echo $this->Form->input('dvojkoli_typ');
		echo $this->Form->input('dvojkoli_velikost');
		echo $this->Form->input('dvojkoli_vyrobce');
		echo $this->Form->input('oprava_typ');
		echo $this->Form->input('pruznice');
		echo $this->Form->input('rada');
		echo $this->Form->input('rezim_vozu');
		echo $this->Form->input('roky_revize_dvojkoli_bez_zvednuti_skrine');
		echo $this->Form->input('roky_revize_kotle');
		echo $this->Form->input('roky_revize_vozu');
		echo $this->Form->input('rozvadec');
		echo $this->Form->input('rucni_brzda');
		echo $this->Form->input('rychlost_km');
		echo $this->Form->input('vlastni_hmotnost');
		echo $this->Form->input('zdrze');
		echo $this->Form->input('Train');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('CargoWagon.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('CargoWagon.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cargo Wagons', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Wagon Series', true), array('controller' => 'wagon_series', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wagon Series', true), array('controller' => 'wagon_series', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trains', true), array('controller' => 'trains', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Train', true), array('controller' => 'trains', 'action' => 'add')); ?> </li>
	</ul>
</div>