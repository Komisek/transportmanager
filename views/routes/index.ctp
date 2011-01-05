<div class="routes index">
	<h2><?php __('Trasy');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Čislo trasy','id');?></th>
			<th><?php echo $this->Paginator->sort('Počáteční stanice', 'start_station_id');?></th>
			<th><?php echo $this->Paginator->sort('Cílová stanice','end_station_id');?></th>
			<th><?php echo $this->Paginator->sort('Datum a čas','datum_cas');?></th>
			<th><?php echo $this->Paginator->sort('Periodicita','periodicity_id');?></th>
			<th><?php echo $this->Paginator->sort('Číslo vlaku','train_id');?></th>
			<th><?php echo $this->Paginator->sort('Cesta','path_id');?></th>
			<th><?php echo $this->Paginator->sort('Stav schválení','stav_schvaleni');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
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
			<?php echo $this->Html->link($route['StartStation']['name'], array('controller' => 'stations', 'action' => 'view', $route['StartStation']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($route['EndStation']['name'], array('controller' => 'stations', 'action' => 'view', $route['EndStation']['id'])); ?>
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
		<td><?php echo $route['Route']['created']; ?>&nbsp;</td>
		<td><?php echo $route['Route']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Detail', true), array('action' => 'view', $route['Route']['id'])); ?>
			<?php echo $this->Html->link(__('Upravit', true), array('action' => 'edit', $route['Route']['id'])); ?>
			<?php echo $this->Html->link(__('Smazat', true), array('action' => 'delete', $route['Route']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $route['Route']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
		<?php
	echo $this->Paginator->counter(array(
	'format' => __('Stánka %page% z %pages%, celkový počet záznamu %count%, zobrazeny záznamy %start% - %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('předchozí', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('další', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Úpravy'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Přidat trasu', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Zobraz periodicity', true), array('controller' => 'periodicities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobraz vlakové soupravy', true), array('controller' => 'trains', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobraz cesty', true), array('controller' => 'paths', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobraz stanice', true), array('controller' => 'stations', 'action' => 'index')); ?> </li>
	</ul>
</div>