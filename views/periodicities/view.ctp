<div class="periodicities view">
<h2><?php  __('Periodicity');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $periodicity['Periodicity']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $periodicity['Periodicity']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Periodicity', true), array('action' => 'edit', $periodicity['Periodicity']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Periodicity', true), array('action' => 'delete', $periodicity['Periodicity']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $periodicity['Periodicity']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Periodicities', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Periodicity', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Routes', true), array('controller' => 'routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Route', true), array('controller' => 'routes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Routes');?></h3>
	<?php if (!empty($periodicity['Route'])):?>
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
		foreach ($periodicity['Route'] as $route):
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
