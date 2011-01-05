<div class="paths view">
<h2><?php  __('Cesta');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $path['Path']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Station'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($path['Station']['name'], array('controller' => 'stations', 'action' => 'view', $path['Station']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Next'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($path['Next']['name'], array('controller' => 'stations', 'action' => 'view', $path['Next']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Lft'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $path['Path']['lft']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rght'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $path['Path']['rght']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Parent Path'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($path['ParentPath']['id'], array('controller' => 'paths', 'action' => 'view', $path['ParentPath']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Úpravy'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Úpravit', true), array('action' => 'edit', $path['Path']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Smazat', true), array('action' => 'delete', $path['Path']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $path['Path']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit cesty', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit stanice', true), array('controller' => 'stations', 'action' => 'index')); ?> </li>
        	<li><?php echo $this->Html->link(__('Zobrazit historii prepravy', true), array('controller' => 'archived_transportations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit trasy', true), array('controller' => 'routes', 'action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Archived Transportations');?></h3>
	<?php if (!empty($path['ArchivedTransportation'])):?>
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
		foreach ($path['ArchivedTransportation'] as $archivedTransportation):
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
	<h3><?php __('Related Paths');?></h3>
	<?php if (!empty($path['ChildPath'])):?>
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
		foreach ($path['ChildPath'] as $childPath):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $childPath['id'];?></td>
			<td><?php echo $childPath['station_id'];?></td>
			<td><?php echo $childPath['next_id'];?></td>
			<td><?php echo $childPath['lft'];?></td>
			<td><?php echo $childPath['rght'];?></td>
			<td><?php echo $childPath['parent_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'paths', 'action' => 'view', $childPath['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'paths', 'action' => 'edit', $childPath['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'paths', 'action' => 'delete', $childPath['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $childPath['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Path', true), array('controller' => 'paths', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Routes');?></h3>
	<?php if (!empty($path['Route'])):?>
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
		foreach ($path['Route'] as $route):
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
