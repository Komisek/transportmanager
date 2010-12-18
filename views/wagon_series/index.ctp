<div class="wagonSeries index">
	<h2><?php __('Wagon Series');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('brzdici_vaha');?></th>
			<th><?php echo $this->Paginator->sort('cislo');?></th>
			<th><?php echo $this->Paginator->sort('delka');?></th>
			<th><?php echo $this->Paginator->sort('oznaceni');?></th>
			<th><?php echo $this->Paginator->sort('pocet_naprav');?></th>
			<th><?php echo $this->Paginator->sort('rozvor');?></th>
			<th><?php echo $this->Paginator->sort('rucni_brzda');?></th>
			<th><?php echo $this->Paginator->sort('unosnost');?></th>
			<th><?php echo $this->Paginator->sort('vyska_nad_temenem_kolejnice');?></th>
			<th><?php echo $this->Paginator->sort('vzdalenost_os');?></th>
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
		<td><?php echo $wagonSeries['WagonSeries']['id']; ?>&nbsp;</td>
		<td><?php echo $wagonSeries['WagonSeries']['brzdici_vaha']; ?>&nbsp;</td>
		<td><?php echo $wagonSeries['WagonSeries']['cislo']; ?>&nbsp;</td>
		<td><?php echo $wagonSeries['WagonSeries']['delka']; ?>&nbsp;</td>
		<td><?php echo $wagonSeries['WagonSeries']['oznaceni']; ?>&nbsp;</td>
		<td><?php echo $wagonSeries['WagonSeries']['pocet_naprav']; ?>&nbsp;</td>
		<td><?php echo $wagonSeries['WagonSeries']['rozvor']; ?>&nbsp;</td>
		<td><?php echo $wagonSeries['WagonSeries']['rucni_brzda']; ?>&nbsp;</td>
		<td><?php echo $wagonSeries['WagonSeries']['unosnost']; ?>&nbsp;</td>
		<td><?php echo $wagonSeries['WagonSeries']['vyska_nad_temenem_kolejnice']; ?>&nbsp;</td>
		<td><?php echo $wagonSeries['WagonSeries']['vzdalenost_os']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $wagonSeries['WagonSeries']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $wagonSeries['WagonSeries']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $wagonSeries['WagonSeries']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wagonSeries['WagonSeries']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Wagon Series', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cargo Wagons', true), array('controller' => 'cargo_wagons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cargo Wagon', true), array('controller' => 'cargo_wagons', 'action' => 'add')); ?> </li>
	</ul>
</div>