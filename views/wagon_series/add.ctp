<div class="wagonSeries form">
<?php echo $this->Form->create('WagonSeries');?>
	<fieldset>
 		<h3><?php __('Přidání vozové řady'); ?></h3>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('brzdici_vaha', array('label' => 'Brzdící váha'));
		echo $this->Form->input('cislo', array('label' => 'Číslo'));
		echo $this->Form->input('delka', array('label' => 'Délka'));
		echo $this->Form->input('oznaceni', array('label' => 'Označení'));
		echo $this->Form->input('pocet_naprav', array('label' => 'Počet náprav'));
		echo $this->Form->input('rozvor', array('label' => 'Rozvor'));
		echo $this->Form->input('rucni_brzda', array('label' => 'Ruční brzda'));
		echo $this->Form->input('unosnost', array('label' => 'Únosnost'));
		echo $this->Form->input('vyska_nad_temenem_kolejnice', array('label' => 'Výška nad temenem kolejnice'));
		echo $this->Form->input('vzdalenost_os', array('label' => 'Vzdálenost os'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('OK', true));?>
</div>
<div class="actions">
	<h3><?php __('Další úpravy'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Zobrazit vozové řady', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Zobrazit nákladní vozy', true), array('controller' => 'cargo_wagons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Přidat nákladní vůz', true), array('controller' => 'cargo_wagons', 'action' => 'add')); ?> </li>
	</ul>
</div>