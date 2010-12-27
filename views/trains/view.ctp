<div class="trains view">
<h2><?php  __('Train');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $train['Train']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Route'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($train['Route']['id'], array('controller' => 'routes', 'action' => 'view', $train['Route']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Stav Rezervace'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $train['Train']['stav_rezervace']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $train['Train']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $train['Train']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Train', true), array('action' => 'edit', $train['Train']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Train', true), array('action' => 'delete', $train['Train']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $train['Train']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Trains', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Train', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Routes', true), array('controller' => 'routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Route', true), array('controller' => 'routes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cargo Wagons', true), array('controller' => 'cargo_wagons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cargo Wagon', true), array('controller' => 'cargo_wagons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees', true), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee', true), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locomotives', true), array('controller' => 'locomotives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locomotive', true), array('controller' => 'locomotives', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Routes');?></h3>
	<?php if (!empty($train['Route'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Start Station Id'); ?></th>
		<th><?php __('End Station Id'); ?></th>
		<th><?php __('Datum Cas'); ?></th>
		<th><?php __('Periodicity Id'); ?></th>
		<th><?php __('Train Id'); ?></th>
		<th><?php __('Path Id'); ?></th>
		<th><?php __('Stav Schvaleni'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($train['Route'] as $route):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $route['id'];?></td>
			<td><?php echo $route['start_station_id'];?></td>
			<td><?php echo $route['end_station_id'];?></td>
			<td><?php echo $route['datum_cas'];?></td>
			<td><?php echo $route['periodicity_id'];?></td>
			<td><?php echo $route['train_id'];?></td>
			<td><?php echo $route['path_id'];?></td>
			<td><?php echo $route['stav_schvaleni'];?></td>
			<td><?php echo $route['created'];?></td>
			<td><?php echo $route['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'routes', 'action' => 'view', $route['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'routes', 'action' => 'edit', $route['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'routes', 'action' => 'delete', $route['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $route['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Route', true), array('controller' => 'routes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Cargo Wagons');?></h3>
	<?php if (!empty($train['CargoWagon'])):?>
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
		foreach ($train['CargoWagon'] as $cargoWagon):
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
<div class="related">
	<h3><?php __('Related Employees');?></h3>
	<?php if (!empty($train['Employee'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Surname'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Passwd'); ?></th>
		<th><?php __('Role Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($train['Employee'] as $employee):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $employee['id'];?></td>
			<td><?php echo $employee['name'];?></td>
			<td><?php echo $employee['surname'];?></td>
			<td><?php echo $employee['email'];?></td>
			<td><?php echo $employee['passwd'];?></td>
			<td><?php echo $employee['role_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'employees', 'action' => 'view', $employee['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'employees', 'action' => 'edit', $employee['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'employees', 'action' => 'delete', $employee['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $employee['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Employee', true), array('controller' => 'employees', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Locomotives');?></h3>
	<?php if (!empty($train['Locomotive'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Brzda Parkovaci Druh'); ?></th>
		<th><?php __('Brzda Primocara Druh'); ?></th>
		<th><?php __('Brzda Rucni Druh'); ?></th>
		<th><?php __('Brzda Tahova Druh'); ?></th>
		<th><?php __('Brzdici Vaha'); ?></th>
		<th><?php __('Cislo Prukazu Zpusobnosti'); ?></th>
		<th><?php __('Delka Pres Narazniky'); ?></th>
		<th><?php __('Dvojkoli Revize'); ?></th>
		<th><?php __('Dvojkoli Velikost'); ?></th>
		<th><?php __('Dvojkoli Vyrobce'); ?></th>
		<th><?php __('Hmotnost'); ?></th>
		<th><?php __('Inventarni Cislo'); ?></th>
		<th><?php __('Klimatizace'); ?></th>
		<th><?php __('Km Revize Celkova'); ?></th>
		<th><?php __('Km Revize Dvojkoli'); ?></th>
		<th><?php __('Km Revize Provozni'); ?></th>
		<th><?php __('Komunikacni Zarizeni'); ?></th>
		<th><?php __('Maximalni Rychlost'); ?></th>
		<th><?php __('Motor Typ'); ?></th>
		<th><?php __('Oprava Napln'); ?></th>
		<th><?php __('Oprava Probihajici'); ?></th>
		<th><?php __('Oznaceni'); ?></th>
		<th><?php __('Provozni Cislo'); ?></th>
		<th><?php __('Rada'); ?></th>
		<th><?php __('Rok Vyroby'); ?></th>
		<th><?php __('Rychlomer Cislo'); ?></th>
		<th><?php __('Rychlomer Typ'); ?></th>
		<th><?php __('Vykon'); ?></th>
		<th><?php __('Vyrobce'); ?></th>
		<th><?php __('Vyrobni Cislo'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($train['Locomotive'] as $locomotive):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $locomotive['id'];?></td>
			<td><?php echo $locomotive['brzda_parkovaci_druh'];?></td>
			<td><?php echo $locomotive['brzda_primocara_druh'];?></td>
			<td><?php echo $locomotive['brzda_rucni_druh'];?></td>
			<td><?php echo $locomotive['brzda_tahova_druh'];?></td>
			<td><?php echo $locomotive['brzdici_vaha'];?></td>
			<td><?php echo $locomotive['cislo_prukazu_zpusobnosti'];?></td>
			<td><?php echo $locomotive['delka_pres_narazniky'];?></td>
			<td><?php echo $locomotive['dvojkoli_revize'];?></td>
			<td><?php echo $locomotive['dvojkoli_velikost'];?></td>
			<td><?php echo $locomotive['dvojkoli_vyrobce'];?></td>
			<td><?php echo $locomotive['hmotnost'];?></td>
			<td><?php echo $locomotive['inventarni_cislo'];?></td>
			<td><?php echo $locomotive['klimatizace'];?></td>
			<td><?php echo $locomotive['km_revize_celkova'];?></td>
			<td><?php echo $locomotive['km_revize_dvojkoli'];?></td>
			<td><?php echo $locomotive['km_revize_provozni'];?></td>
			<td><?php echo $locomotive['komunikacni_zarizeni'];?></td>
			<td><?php echo $locomotive['maximalni_rychlost'];?></td>
			<td><?php echo $locomotive['motor_typ'];?></td>
			<td><?php echo $locomotive['oprava_napln'];?></td>
			<td><?php echo $locomotive['oprava_probihajici'];?></td>
			<td><?php echo $locomotive['oznaceni'];?></td>
			<td><?php echo $locomotive['provozni_cislo'];?></td>
			<td><?php echo $locomotive['rada'];?></td>
			<td><?php echo $locomotive['rok_vyroby'];?></td>
			<td><?php echo $locomotive['rychlomer_cislo'];?></td>
			<td><?php echo $locomotive['rychlomer_typ'];?></td>
			<td><?php echo $locomotive['vykon'];?></td>
			<td><?php echo $locomotive['vyrobce'];?></td>
			<td><?php echo $locomotive['vyrobni_cislo'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'locomotives', 'action' => 'view', $locomotive['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'locomotives', 'action' => 'edit', $locomotive['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'locomotives', 'action' => 'delete', $locomotive['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $locomotive['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Locomotive', true), array('controller' => 'locomotives', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
