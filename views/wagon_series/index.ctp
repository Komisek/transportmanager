<div class="wagonSeries index">
	<h2><?php __('Vozové řady');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Základní řada', 'zakladni_rada');?></th>
			<th><?php echo $this->Paginator->sort('Označení', 'oznaceni');?></th>
			<th><?php echo $this->Paginator->sort('Konstrukční skupina', 'konstrukcni_skupina');?></th>
			<th><?php echo $this->Paginator->sort('Délka', 'delka');?></th>
			<th><?php echo $this->Paginator->sort('Únosnost','unosnost');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($wagonSeries as $wagonSeries):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $wagonSeries['WagonSeries']['zakladni_rada']; ?>&nbsp;</td>
		<td><?php echo $wagonSeries['WagonSeries']['oznaceni']; ?>&nbsp;</td>
		<td><?php echo $wagonSeries['WagonSeries']['konstrukcni_skupina']; ?>&nbsp;</td>
		<td><?php echo $wagonSeries['WagonSeries']['delka']; ?>&nbsp;</td>
		<td><?php echo $wagonSeries['WagonSeries']['unosnost']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Detail', true), array('action' => 'view', $wagonSeries['WagonSeries']['id'])); ?>
			<?php echo $this->Html->link(__('Upravit', true), array('action' => 'edit', $wagonSeries['WagonSeries']['id'])); ?>
			<?php echo $this->Html->link(__('Smazat', true), array('action' => 'delete', $wagonSeries['WagonSeries']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wagonSeries['WagonSeries']['id'])); ?>
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
	<h3><?php __('Další možnosti'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Přidat vozovou řadu', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Zobrazit nákladní vozy', true), array('controller' => 'cargo_wagons', 'action' => 'index')); ?> </li>
	</ul>
</div>