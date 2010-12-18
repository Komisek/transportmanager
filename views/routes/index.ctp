<div class="routes index">
	<h2><?php __('Routes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('start_station_id');?></th>
			<th><?php echo $this->Paginator->sort('end_station_id');?></th>
			<th><?php echo $this->Paginator->sort('datum_cas');?></th>
			<th><?php echo $this->Paginator->sort('periodicity_id');?></th>
			<th><?php echo $this->Paginator->sort('train_id');?></th>
			<th><?php echo $this->Paginator->sort('path_id');?></th>
			<th><?php echo $this->Paginator->sort('stav_schvaleni');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($routes as $route):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $route['Route']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($route['start_station']['name'], array('controller' => 'stations', 'action' => 'view', $route['start_station']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($route['end_station']['name'], array('controller' => 'stations', 'action' => 'view', $route['end_station']['id'])); ?>
		</td>
		<td><?php echo $route['Route']['datum_cas']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($route['Periodicity']['name'], array('controller' => 'periodicities', 'action' => 'view', $route['Periodicity']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($route['Train']['id'], array('controller' => 'trains', 'action' => 'view', $route['Train']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($route['Path']['id'], array('controller' => 'paths', 'action' => 'view', $route['Path']['id'])); ?>
		</td>
		<td><?php echo $route['Route']['stav_schvaleni']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $route['Route']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $route['Route']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $route['Route']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $route['Route']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Route', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Periodicities', true), array('controller' => 'periodicities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Periodicity', true), array('controller' => 'periodicities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trains', true), array('controller' => 'trains', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Train', true), array('controller' => 'trains', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Paths', true), array('controller' => 'paths', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Path', true), array('controller' => 'paths', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations', true), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Start Station', true), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>