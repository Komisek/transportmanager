<div class="cargoWagons form">
<?php echo $this->Form->create('CargoWagon');?>
	<fieldset>
 		<h3><?php __('Přidej nákladní vůz'); ?></h3>
	<?php
		echo $this->Form->input('wagon_series_id', array('label' => 'Vozová řada'));
		echo $this->Form->input('cislo_him', array('label' => 'Číslo HIM'));
		echo $this->Form->input('cislo_vozu', array('label' => 'Číslo vozu'));
		echo $this->Form->input('druh_brzdeni', array('label' => 'Druh brždění'));
		echo $this->Form->input('druh_brzdoveho_valce', array('labelDruh brzdového válce'));
		echo $this->Form->input('dvojkoli_revize', array('label' => 'Revize dvojkolí'));
		echo $this->Form->input('dvojkoli_typ', array('label' => 'Typ dvojkolí'));
		echo $this->Form->input('dvojkoli_velikost', array('label' => 'Velilkost dvojkolí'));
		echo $this->Form->input('dvojkoli_vyrobce', array('label' => 'Výrobce dvojkolí'));
		echo $this->Form->input('oprava_typ', array('label' => 'Typ opravy'));
		echo $this->Form->input('pruznice', array('label' => 'Pružnice'));
		echo $this->Form->input('rada', array('label' => 'Řada'));
		echo $this->Form->input('rezim_vozu', array('label' => 'Režim vozu'));
		echo $this->Form->input('roky_revize_dvojkoli_bez_zvednuti_skrine', array('label' => 'Revize dvojkolé bez zvednutí skříně (roky)'));
		echo $this->Form->input('roky_revize_kotle', array('label' => 'Revize kotle (roky)'));
		echo $this->Form->input('roky_revize_vozu', array('label' => 'Revize vozu (roky)'));
		echo $this->Form->input('rozvadec', array('label' => 'Rozvaděč'));
		echo $this->Form->input('rucni_brzda', array('label' => 'ruční brzda'));
		echo $this->Form->input('rychlost_km', array('label' => 'Rychlost (Km/h)'));
		echo $this->Form->input('vlastni_hmotnost', array('label' => 'Vlastní hmotnost (Kg)'));
		echo $this->Form->input('zdrze');
		echo $this->Form->input('Train', array('label' => 'Přiřazená vlaková souprava'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('OK', true));?>
</div>
<div class="actions">
	<h3><?php __('Další úpravy'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Zobraz nákladní vozy', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Zobraz vozové řady', true), array('controller' => 'wagon_series', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Přidej vozovou řadu', true), array('controller' => 'wagon_series', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobraz vlakové soupravy', true), array('controller' => 'trains', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Přidej vlakovou soupravu', true), array('controller' => 'trains', 'action' => 'add')); ?> </li>
	</ul>
</div>