<div class="cargoWagons index">
	<h2><?php __('Cargo Wagons');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('wagon_series_id');?></th>
			<th><?php echo $this->Paginator->sort('cislo_him');?></th>
			<th><?php echo $this->Paginator->sort('cislo_vozu');?></th>
			<th><?php echo $this->Paginator->sort('druh_brzdeni');?></th>
			<th><?php echo $this->Paginator->sort('druh_brzdoveho_valce');?></th>
			<th><?php echo $this->Paginator->sort('dvojkoli_revize');?></th>
			<th><?php echo $this->Paginator->sort('dvojkoli_typ');?></th>
			<th><?php echo $this->Paginator->sort('dvojkoli_velikost');?></th>
			<th><?php echo $this->Paginator->sort('dvojkoli_vyrobce');?></th>
			<th><?php echo $this->Paginator->sort('oprava_typ');?></th>
			<th><?php echo $this->Paginator->sort('pruznice');?></th>
			<th><?php echo $this->Paginator->sort('rada');?></th>
			<th><?php echo $this->Paginator->sort('rezim_vozu');?></th>
			<th><?php echo $this->Paginator->sort('roky_revize_dvojkoli_bez_zvednuti_skrine');?></th>
			<th><?php echo $this->Paginator->sort('roky_revize_kotle');?></th>
			<th><?php echo $this->Paginator->sort('roky_revize_vozu');?></th>
			<th><?php echo $this->Paginator->sort('rozvadec');?></th>
			<th><?php echo $this->Paginator->sort('rucni_brzda');?></th>
			<th><?php echo $this->Paginator->sort('rychlost_km');?></th>
			<th><?php echo $this->Paginator->sort('vlastni_hmotnost');?></th>
			<th><?php echo $this->Paginator->sort('zdrze');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($cargoWagons as $cargoWagon):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $cargoWagon['CargoWagon']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cargoWagon['WagonSeries']['oznaceni'], array('controller' => 'wagon_series', 'action' => 'view', $cargoWagon['WagonSeries']['id'])); ?>
		</td>
		<td><?php echo $cargoWagon['CargoWagon']['cislo_him']; ?>&nbsp;</td>
		<td><?php echo $cargoWagon['CargoWagon']['cislo_vozu']; ?>&nbsp;</td>
		<td><?php echo $cargoWagon['CargoWagon']['druh_brzdeni']; ?>&nbsp;</td>
		<td><?php echo $cargoWagon['CargoWagon']['druh_brzdoveho_valce']; ?>&nbsp;</td>
		<td><?php echo $cargoWagon['CargoWagon']['dvojkoli_revize']; ?>&nbsp;</td>
		<td><?php echo $cargoWagon['CargoWagon']['dvojkoli_typ']; ?>&nbsp;</td>
		<td><?php echo $cargoWagon['CargoWagon']['dvojkoli_velikost']; ?>&nbsp;</td>
		<td><?php echo $cargoWagon['CargoWagon']['dvojkoli_vyrobce']; ?>&nbsp;</td>
		<td><?php echo $cargoWagon['CargoWagon']['oprava_typ']; ?>&nbsp;</td>
		<td><?php echo $cargoWagon['CargoWagon']['pruznice']; ?>&nbsp;</td>
		<td><?php echo $cargoWagon['CargoWagon']['rada']; ?>&nbsp;</td>
		<td><?php echo $cargoWagon['CargoWagon']['rezim_vozu']; ?>&nbsp;</td>
		<td><?php echo $cargoWagon['CargoWagon']['roky_revize_dvojkoli_bez_zvednuti_skrine']; ?>&nbsp;</td>
		<td><?php echo $cargoWagon['CargoWagon']['roky_revize_kotle']; ?>&nbsp;</td>
		<td><?php echo $cargoWagon['CargoWagon']['roky_revize_vozu']; ?>&nbsp;</td>
		<td><?php echo $cargoWagon['CargoWagon']['rozvadec']; ?>&nbsp;</td>
		<td><?php echo $cargoWagon['CargoWagon']['rucni_brzda']; ?>&nbsp;</td>
		<td><?php echo $cargoWagon['CargoWagon']['rychlost_km']; ?>&nbsp;</td>
		<td><?php echo $cargoWagon['CargoWagon']['vlastni_hmotnost']; ?>&nbsp;</td>
		<td><?php echo $cargoWagon['CargoWagon']['zdrze']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $cargoWagon['CargoWagon']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $cargoWagon['CargoWagon']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $cargoWagon['CargoWagon']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cargoWagon['CargoWagon']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Cargo Wagon', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Wagon Series', true), array('controller' => 'wagon_series', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wagon Series', true), array('controller' => 'wagon_series', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trains', true), array('controller' => 'trains', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Train', true), array('controller' => 'trains', 'action' => 'add')); ?> </li>
	</ul>
</div>