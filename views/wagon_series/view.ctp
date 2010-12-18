<div class="wagonSeries view">
<h2><?php  __('Wagon Series');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wagonSeries['WagonSeries']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Brzdici Vaha'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wagonSeries['WagonSeries']['brzdici_vaha']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cislo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wagonSeries['WagonSeries']['cislo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Delka'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wagonSeries['WagonSeries']['delka']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Oznaceni'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wagonSeries['WagonSeries']['oznaceni']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pocet Naprav'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wagonSeries['WagonSeries']['pocet_naprav']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rozvor'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wagonSeries['WagonSeries']['rozvor']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rucni Brzda'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wagonSeries['WagonSeries']['rucni_brzda']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Unosnost'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wagonSeries['WagonSeries']['unosnost']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Vyska Nad Temenem Kolejnice'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wagonSeries['WagonSeries']['vyska_nad_temenem_kolejnice']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Vzdalenost Os'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wagonSeries['WagonSeries']['vzdalenost_os']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Wagon Series', true), array('action' => 'edit', $wagonSeries['WagonSeries']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Wagon Series', true), array('action' => 'delete', $wagonSeries['WagonSeries']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wagonSeries['WagonSeries']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Wagon Series', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wagon Series', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cargo Wagons', true), array('controller' => 'cargo_wagons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cargo Wagon', true), array('controller' => 'cargo_wagons', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Cargo Wagons');?></h3>
	<?php if (!empty($wagonSeries['CargoWagon'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Wagon Series Id'); ?></th>
		<th><?php __('Cislo Him'); ?></th>
		<th><?php __('Cislo Vozu'); ?></th>
		<th><?php __('Druh Brzdeni'); ?></th>
		<th><?php __('Druh Brzdoveho Valce'); ?></th>
		<th><?php __('Dvojkoli Revize'); ?></th>
		<th><?php __('Dvojkoli Typ'); ?></th>
		<th><?php __('Dvojkoli Velikost'); ?></th>
		<th><?php __('Dvojkoli Vyrobce'); ?></th>
		<th><?php __('Oprava Typ'); ?></th>
		<th><?php __('Pruznice'); ?></th>
		<th><?php __('Rada'); ?></th>
		<th><?php __('Rezim Vozu'); ?></th>
		<th><?php __('Roky Revize Dvojkoli Bez Zvednuti Skrine'); ?></th>
		<th><?php __('Roky Revize Kotle'); ?></th>
		<th><?php __('Roky Revize Vozu'); ?></th>
		<th><?php __('Rozvadec'); ?></th>
		<th><?php __('Rucni Brzda'); ?></th>
		<th><?php __('Rychlost Km'); ?></th>
		<th><?php __('Vlastni Hmotnost'); ?></th>
		<th><?php __('Zdrze'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($wagonSeries['CargoWagon'] as $cargoWagon):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $cargoWagon['id'];?></td>
			<td><?php echo $cargoWagon['wagon_series_id'];?></td>
			<td><?php echo $cargoWagon['cislo_him'];?></td>
			<td><?php echo $cargoWagon['cislo_vozu'];?></td>
			<td><?php echo $cargoWagon['druh_brzdeni'];?></td>
			<td><?php echo $cargoWagon['druh_brzdoveho_valce'];?></td>
			<td><?php echo $cargoWagon['dvojkoli_revize'];?></td>
			<td><?php echo $cargoWagon['dvojkoli_typ'];?></td>
			<td><?php echo $cargoWagon['dvojkoli_velikost'];?></td>
			<td><?php echo $cargoWagon['dvojkoli_vyrobce'];?></td>
			<td><?php echo $cargoWagon['oprava_typ'];?></td>
			<td><?php echo $cargoWagon['pruznice'];?></td>
			<td><?php echo $cargoWagon['rada'];?></td>
			<td><?php echo $cargoWagon['rezim_vozu'];?></td>
			<td><?php echo $cargoWagon['roky_revize_dvojkoli_bez_zvednuti_skrine'];?></td>
			<td><?php echo $cargoWagon['roky_revize_kotle'];?></td>
			<td><?php echo $cargoWagon['roky_revize_vozu'];?></td>
			<td><?php echo $cargoWagon['rozvadec'];?></td>
			<td><?php echo $cargoWagon['rucni_brzda'];?></td>
			<td><?php echo $cargoWagon['rychlost_km'];?></td>
			<td><?php echo $cargoWagon['vlastni_hmotnost'];?></td>
			<td><?php echo $cargoWagon['zdrze'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'cargo_wagons', 'action' => 'view', $cargoWagon['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'cargo_wagons', 'action' => 'edit', $cargoWagon['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'cargo_wagons', 'action' => 'delete', $cargoWagon['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cargoWagon['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cargo Wagon', true), array('controller' => 'cargo_wagons', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
