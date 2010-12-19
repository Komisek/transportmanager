<div class="nearStations index">
	<h2><?php __('Near Stations');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('station_id');?></th>
			<th><?php echo $this->Paginator->sort('next_station_id');?></th>
			<th><?php echo $this->Paginator->sort('vzdalenost');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($nearStations as $nearStation):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $nearStation['NearStation']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($nearStation['Station']['name'], array('controller' => 'stations', 'action' => 'view', $nearStation['Station']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($nearStation['next_station']['name'], array('controller' => 'stations', 'action' => 'view', $nearStation['next_station']['id'])); ?>
		</td>
		<td><?php echo $nearStation['NearStation']['vzdalenost']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $nearStation['NearStation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $nearStation['NearStation']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $nearStation['NearStation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $nearStation['NearStation']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Near Station', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Stations', true), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station', true), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>