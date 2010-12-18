<div class="archivedTransportations view">
<h2><?php  __('Archived Transportation');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $archivedTransportation['ArchivedTransportation']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Path Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $archivedTransportation['ArchivedTransportation']['path_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Locomotive Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $archivedTransportation['ArchivedTransportation']['locomotive_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Engine Driver Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $archivedTransportation['ArchivedTransportation']['engine_driver_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Start Station Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $archivedTransportation['ArchivedTransportation']['start_station_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('End Station Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $archivedTransportation['ArchivedTransportation']['end_station_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Datum Cas'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $archivedTransportation['ArchivedTransportation']['datum_cas']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Archived Transportation', true), array('action' => 'edit', $archivedTransportation['ArchivedTransportation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Archived Transportation', true), array('action' => 'delete', $archivedTransportation['ArchivedTransportation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $archivedTransportation['ArchivedTransportation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Archived Transportations', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Archived Transportation', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employes', true), array('controller' => 'employes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employe', true), array('controller' => 'employes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Employes');?></h3>
	<?php if (!empty($archivedTransportation['Employe'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Surname'); ?></th>
		<th><?php __('Role Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($archivedTransportation['Employe'] as $employe):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $employe['id'];?></td>
			<td><?php echo $employe['name'];?></td>
			<td><?php echo $employe['surname'];?></td>
			<td><?php echo $employe['role_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'employes', 'action' => 'view', $employe['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'employes', 'action' => 'edit', $employe['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'employes', 'action' => 'delete', $employe['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $employe['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Employe', true), array('controller' => 'employes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
