<div class="stations index">
	<h2><?php __('Stanice');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Název', 'name');?></th>
			<th><?php echo $this->Paginator->sort('okres');?></th>
			<th><?php echo $this->Paginator->sort('kraj');?></th>
			<th><?php echo $this->Paginator->sort('Číslo', 'cislo');?></th>
			<th><?php echo $this->Paginator->sort('gps');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($stations as $station):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $station['Station']['name']; ?>&nbsp;</td>
		<td><?php echo $station['Station']['okres']; ?>&nbsp;</td>
		<td><?php echo $station['Station']['kraj']; ?>&nbsp;</td>
		<td><?php echo $station['Station']['cislo']; ?>&nbsp;</td>
		<td><?php echo $station['Station']['gps']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Detail', true), array('action' => 'view', $station['Station']['id'])); ?>
			<?php echo $this->Html->link(__('Upravit', true), array('action' => 'edit', $station['Station']['id'])); ?>
			<?php echo $this->Html->link(__('Smazat', true), array('action' => 'delete', $station['Station']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $station['Station']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Přidat stanici', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit cesty', true), array('controller' => 'paths', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nová cesta', true), array('controller' => 'paths', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit okolní stanice', true), array('controller' => 'near_stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobraz Trasy', true), array('controller' => 'routes', 'action' => 'index')); ?> </li>
	</ul>
</div>