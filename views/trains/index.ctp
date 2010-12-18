<div class="trains index">
	<h2><?php __('Trains');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('route_id');?></th>
			<th><?php echo $this->Paginator->sort('locomotive_id');?></th>
			<th><?php echo $this->Paginator->sort('engine_driver_id');?></th>
			<th><?php echo $this->Paginator->sort('stav_rezervace');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($trains as $train):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $train['Train']['id']; ?>&nbsp;</td>
		<td><?php echo $train['Train']['route_id']; ?>&nbsp;</td>
		<td><?php echo $train['Train']['locomotive_id']; ?>&nbsp;</td>
		<td><?php echo $train['Train']['engine_driver_id']; ?>&nbsp;</td>
		<td><?php echo $train['Train']['stav_rezervace']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $train['Train']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $train['Train']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $train['Train']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $train['Train']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Train', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cargo Wagons', true), array('controller' => 'cargo_wagons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cargo Wagon', true), array('controller' => 'cargo_wagons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees', true), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employe', true), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locomotives', true), array('controller' => 'locomotives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locomotive', true), array('controller' => 'locomotives', 'action' => 'add')); ?> </li>
	</ul>
</div>