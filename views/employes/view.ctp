<div class="employes view">
<h2><?php  __('Employe');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employe['Employe']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employe['Employe']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Surname'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employe['Employe']['surname']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Role'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($employe['Role']['name'], array('controller' => 'roles', 'action' => 'view', $employe['Role']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employe', true), array('action' => 'edit', $employe['Employe']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Employe', true), array('action' => 'delete', $employe['Employe']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $employe['Employe']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employe', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles', true), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role', true), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Archived Transportations', true), array('controller' => 'archived_transportations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Archived Transportation', true), array('controller' => 'archived_transportations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trains', true), array('controller' => 'trains', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Train', true), array('controller' => 'trains', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Archived Transportations');?></h3>
	<?php if (!empty($employe['ArchivedTransportation'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Path Id'); ?></th>
		<th><?php __('Locomotive Id'); ?></th>
		<th><?php __('Engine Driver Id'); ?></th>
		<th><?php __('Start Station Id'); ?></th>
		<th><?php __('End Station Id'); ?></th>
		<th><?php __('Datum Cas'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($employe['ArchivedTransportation'] as $archivedTransportation):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $archivedTransportation['id'];?></td>
			<td><?php echo $archivedTransportation['path_id'];?></td>
			<td><?php echo $archivedTransportation['locomotive_id'];?></td>
			<td><?php echo $archivedTransportation['engine_driver_id'];?></td>
			<td><?php echo $archivedTransportation['start_station_id'];?></td>
			<td><?php echo $archivedTransportation['end_station_id'];?></td>
			<td><?php echo $archivedTransportation['datum_cas'];?></td>
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
	<?php if (!empty($employe['Train'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Route Id'); ?></th>
		<th><?php __('Locomotive Id'); ?></th>
		<th><?php __('Engine Driver Id'); ?></th>
		<th><?php __('Stav Rezervace'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($employe['Train'] as $train):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $train['id'];?></td>
			<td><?php echo $train['route_id'];?></td>
			<td><?php echo $train['locomotive_id'];?></td>
			<td><?php echo $train['engine_driver_id'];?></td>
			<td><?php echo $train['stav_rezervace'];?></td>
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
