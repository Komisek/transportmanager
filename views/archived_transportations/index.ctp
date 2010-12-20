<div class="archivedTransportations index">
	<h2><?php __('Archived Transportations');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('path_id');?></th>
			<th><?php echo $this->Paginator->sort('start_station_id');?></th>
			<th><?php echo $this->Paginator->sort('end_station_id');?></th>
			<th><?php echo $this->Paginator->sort('datum_cas');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($archivedTransportations as $archivedTransportation):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $archivedTransportation['ArchivedTransportation']['id']; ?>&nbsp;</td>
		<td><?php echo $archivedTransportation['ArchivedTransportation']['path_id']; ?>&nbsp;</td>
		<td><?php echo $archivedTransportation['ArchivedTransportation']['start_station_id']; ?>&nbsp;</td>
		<td><?php echo $archivedTransportation['ArchivedTransportation']['end_station_id']; ?>&nbsp;</td>
		<td><?php echo $archivedTransportation['ArchivedTransportation']['datum_cas']; ?>&nbsp;</td>
		<td><?php echo $archivedTransportation['ArchivedTransportation']['created']; ?>&nbsp;</td>
		<td><?php echo $archivedTransportation['ArchivedTransportation']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $archivedTransportation['ArchivedTransportation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $archivedTransportation['ArchivedTransportation']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $archivedTransportation['ArchivedTransportation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $archivedTransportation['ArchivedTransportation']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Archived Transportation', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cargo Wagons', true), array('controller' => 'cargo_wagons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cargo Wagon', true), array('controller' => 'cargo_wagons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees', true), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employe', true), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locomotives', true), array('controller' => 'locomotives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locomotive', true), array('controller' => 'locomotives', 'action' => 'add')); ?> </li>
	</ul>
</div>