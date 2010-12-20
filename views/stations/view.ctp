<div class="stations view">
<h2><?php  __('Station');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $station['Station']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $station['Station']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Okres'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $station['Station']['okres']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Kraj'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $station['Station']['kraj']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cislo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $station['Station']['cislo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Gps'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $station['Station']['gps']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Station', true), array('action' => 'edit', $station['Station']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Station', true), array('action' => 'delete', $station['Station']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $station['Station']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Paths', true), array('controller' => 'paths', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Path', true), array('controller' => 'paths', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Near Stations', true), array('controller' => 'near_stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station Id', true), array('controller' => 'near_stations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Routes', true), array('controller' => 'routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Start Station', true), array('controller' => 'routes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Paths');?></h3>
	<?php if (!empty($station['Path'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Station Id'); ?></th>
		<th><?php __('Next Id'); ?></th>
		<th><?php __('Lft'); ?></th>
		<th><?php __('Rght'); ?></th>
		<th><?php __('Parent Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($station['Path'] as $path):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $path['id'];?></td>
			<td><?php echo $path['station_id'];?></td>
			<td><?php echo $path['next_id'];?></td>
			<td><?php echo $path['lft'];?></td>
			<td><?php echo $path['rght'];?></td>
			<td><?php echo $path['parent_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'paths', 'action' => 'view', $path['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'paths', 'action' => 'edit', $path['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'paths', 'action' => 'delete', $path['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $path['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Path', true), array('controller' => 'paths', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Near Stations');?></h3>
	<?php if (!empty($station['station_id'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Station Id'); ?></th>
		<th><?php __('Next Station Id'); ?></th>
		<th><?php __('Vzdalenost'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($station['station_id'] as $stationId):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $stationId['id'];?></td>
			<td><?php echo $stationId['station_id'];?></td>
			<td><?php echo $stationId['next_station_id'];?></td>
			<td><?php echo $stationId['vzdalenost'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'near_stations', 'action' => 'view', $stationId['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'near_stations', 'action' => 'edit', $stationId['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'near_stations', 'action' => 'delete', $stationId['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $stationId['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Station Id', true), array('controller' => 'near_stations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Near Stations');?></h3>
	<?php if (!empty($station['near_station_id'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Station Id'); ?></th>
		<th><?php __('Next Station Id'); ?></th>
		<th><?php __('Vzdalenost'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($station['near_station_id'] as $nearStationId):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $nearStationId['id'];?></td>
			<td><?php echo $nearStationId['station_id'];?></td>
			<td><?php echo $nearStationId['next_station_id'];?></td>
			<td><?php echo $nearStationId['vzdalenost'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'near_stations', 'action' => 'view', $nearStationId['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'near_stations', 'action' => 'edit', $nearStationId['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'near_stations', 'action' => 'delete', $nearStationId['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $nearStationId['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Near Station Id', true), array('controller' => 'near_stations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Routes');?></h3>
	<?php if (!empty($station['start_station'])):?>
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
		foreach ($station['start_station'] as $startStation):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $startStation['id'];?></td>
			<td><?php echo $startStation['start_station_id'];?></td>
			<td><?php echo $startStation['end_station_id'];?></td>
			<td><?php echo $startStation['datum_cas'];?></td>
			<td><?php echo $startStation['periodicity_id'];?></td>
			<td><?php echo $startStation['train_id'];?></td>
			<td><?php echo $startStation['path_id'];?></td>
			<td><?php echo $startStation['stav_schvaleni'];?></td>
			<td><?php echo $startStation['created'];?></td>
			<td><?php echo $startStation['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'routes', 'action' => 'view', $startStation['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'routes', 'action' => 'edit', $startStation['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'routes', 'action' => 'delete', $startStation['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $startStation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Start Station', true), array('controller' => 'routes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Routes');?></h3>
	<?php if (!empty($station['end_station'])):?>
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
		foreach ($station['end_station'] as $endStation):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $endStation['id'];?></td>
			<td><?php echo $endStation['start_station_id'];?></td>
			<td><?php echo $endStation['end_station_id'];?></td>
			<td><?php echo $endStation['datum_cas'];?></td>
			<td><?php echo $endStation['periodicity_id'];?></td>
			<td><?php echo $endStation['train_id'];?></td>
			<td><?php echo $endStation['path_id'];?></td>
			<td><?php echo $endStation['stav_schvaleni'];?></td>
			<td><?php echo $endStation['created'];?></td>
			<td><?php echo $endStation['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'routes', 'action' => 'view', $endStation['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'routes', 'action' => 'edit', $endStation['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'routes', 'action' => 'delete', $endStation['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $endStation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New End Station', true), array('controller' => 'routes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
