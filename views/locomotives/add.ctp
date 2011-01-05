<div class="locomotives form">
<?php echo $this->Form->create('Locomotive');?>
	<fieldset>
 		<legend><?php __('Přidání hnacího vozu'); ?></legend>
	<?php
		echo $this->Form->input('brzda_parkovaci_druh');
		echo $this->Form->input('brzda_primocara_druh');
		echo $this->Form->input('brzda_rucni_druh');
		echo $this->Form->input('brzda_tahova_druh');
		echo $this->Form->input('brzdici_vaha');
		echo $this->Form->input('cislo_prukazu_zpusobnosti');
		echo $this->Form->input('delka_pres_narazniky');
		echo $this->Form->input('dvojkoli_revize');
		echo $this->Form->input('dvojkoli_velikost');
		echo $this->Form->input('dvojkoli_vyrobce');
		echo $this->Form->input('hmotnost');
		echo $this->Form->input('inventarni_cislo');
		echo $this->Form->input('klimatizace');
		echo $this->Form->input('km_revize_celkova');
		echo $this->Form->input('km_revize_dvojkoli');
		echo $this->Form->input('km_revize_provozni');
		echo $this->Form->input('komunikacni_zarizeni');
		echo $this->Form->input('maximalni_rychlost');
		echo $this->Form->input('motor_typ');
		echo $this->Form->input('oprava_napln');
		echo $this->Form->input('oprava_probihajici');
		echo $this->Form->input('oznaceni');
		echo $this->Form->input('provozni_cislo');
		echo $this->Form->input('rada');
		echo $this->Form->input('rok_vyroby');
		echo $this->Form->input('rychlomer_cislo');
		echo $this->Form->input('rychlomer_typ');
		echo $this->Form->input('vykon');
		echo $this->Form->input('vyrobce');
		echo $this->Form->input('vyrobni_cislo');
		echo $this->Form->input('ArchivedTransportation');
		echo $this->Form->input('Train');
	?>
	</fieldset>
<?php echo $this->Form->end(__('OK', true));?>
</div>
<div class="actions">
	<h3><?php __('Další úpravy'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Zobrazit hnací vozy', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit historii přepravy', true), array('controller' => 'archived_transportations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit vlakové soupravy', true), array('controller' => 'trains', 'action' => 'index')); ?> </li>
	</ul>
</div>