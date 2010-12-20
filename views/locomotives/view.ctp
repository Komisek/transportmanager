<div class="locomotives view">
<h2><?php  __('Locomotive');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Brzda Parkovaci Druh'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['brzda_parkovaci_druh']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Brzda Primocara Druh'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['brzda_primocara_druh']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Brzda Rucni Druh'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['brzda_rucni_druh']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Brzda Tahova Druh'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['brzda_tahova_druh']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Brzdici Vaha'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['brzdici_vaha']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cislo Prukazu Zpusobnosti'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['cislo_prukazu_zpusobnosti']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Delka Pres Narazniky'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['delka_pres_narazniky']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Dvojkoli Revize'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['dvojkoli_revize']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Dvojkoli Velikost'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['dvojkoli_velikost']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Dvojkoli Vyrobce'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['dvojkoli_vyrobce']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Hmotnost'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['hmotnost']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Inventarni Cislo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['inventarni_cislo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Klimatizace'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['klimatizace']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Km Revize Celkova'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['km_revize_celkova']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Km Revize Dvojkoli'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['km_revize_dvojkoli']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Km Revize Provozni'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['km_revize_provozni']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Komunikacni Zarizeni'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['komunikacni_zarizeni']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Maximalni Rychlost'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['maximalni_rychlost']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Motor Typ'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['motor_typ']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Oprava Napln'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['oprava_napln']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Oprava Probihajici'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['oprava_probihajici']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Oznaceni'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['oznaceni']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Provozni Cislo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['provozni_cislo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rada'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['rada']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rok Vyroby'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['rok_vyroby']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rychlomer Cislo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['rychlomer_cislo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rychlomer Typ'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['rychlomer_typ']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Vykon'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['vykon']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Vyrobce'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['vyrobce']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Vyrobni Cislo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['vyrobni_cislo']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Locomotive', true), array('action' => 'edit', $locomotive['Locomotive']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Locomotive', true), array('action' => 'delete', $locomotive['Locomotive']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $locomotive['Locomotive']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Locomotives', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locomotive', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Archived Transportations', true), array('controller' => 'archived_transportations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Archived Transportation', true), array('controller' => 'archived_transportations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trains', true), array('controller' => 'trains', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Train', true), array('controller' => 'trains', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Archived Transportations');?></h3>
	<?php if (!empty($locomotive['ArchivedTransportation'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Path Id'); ?></th>
		<th><?php __('Start Station Id'); ?></th>
		<th><?php __('End Station Id'); ?></th>
		<th><?php __('Datum Cas'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($locomotive['ArchivedTransportation'] as $archivedTransportation):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $archivedTransportation['id'];?></td>
			<td><?php echo $archivedTransportation['path_id'];?></td>
			<td><?php echo $archivedTransportation['start_station_id'];?></td>
			<td><?php echo $archivedTransportation['end_station_id'];?></td>
			<td><?php echo $archivedTransportation['datum_cas'];?></td>
			<td><?php echo $archivedTransportation['created'];?></td>
			<td><?php echo $archivedTransportation['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'archived_transportations', 'action' => 'view', $archivedTransportation['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'archived_transportations', 'action' => 'edit', $archivedTransportation['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'archived_transportations', 'action' => 'delete', $archivedTransportation['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $archivedTransportation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Archived Transportation', true), array('controller' => 'archived_transportations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Trains');?></h3>
	<?php if (!empty($locomotive['Train'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Route Id'); ?></th>
		<th><?php __('Stav Rezervace'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($locomotive['Train'] as $train):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $train['id'];?></td>
			<td><?php echo $train['route_id'];?></td>
			<td><?php echo $train['stav_rezervace'];?></td>
			<td><?php echo $train['created'];?></td>
			<td><?php echo $train['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'trains', 'action' => 'view', $train['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'trains', 'action' => 'edit', $train['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'trains', 'action' => 'delete', $train['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $train['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Train', true), array('controller' => 'trains', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
