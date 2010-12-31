<div class="cargoWagons index">
	<h2><?php __('Nákladní vozy');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Číslo HIM', 'cislo_him');?></th>
			<th><?php echo $this->Paginator->sort('Číslo vozu', 'cislo_vozu');?></th>
                        <th><?php echo $this->Paginator->sort('Vozová řada', 'wagon_series_id');?></th>
			<th class="actions"><?php __('Úpravy');?></th>
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
		<td><?php echo $cargoWagon['CargoWagon']['cislo_him']; ?>&nbsp;</td>
		<td><?php echo $cargoWagon['CargoWagon']['cislo_vozu']; ?>&nbsp;</td>
                <td>
			<?php echo $this->Html->link($cargoWagon['WagonSeries']['oznaceni'], array('controller' => 'wagon_series', 'action' => 'view', $cargoWagon['WagonSeries']['id'])); ?>
		</td>

		<td class="actions">
			<?php echo $this->Html->link(__('Detail', true), array('action' => 'view', $cargoWagon['CargoWagon']['id'])); ?>
			<?php echo $this->Html->link(__('Upravit', true), array('action' => 'edit', $cargoWagon['CargoWagon']['id'])); ?>
			<?php echo $this->Html->link(__('Smazat', true), array('action' => 'delete', $cargoWagon['CargoWagon']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cargoWagon['CargoWagon']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Přidej nákladní vůz', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Zobraz vozové řady', true), array('controller' => 'wagon_series', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Přidej vozovou řadu', true), array('controller' => 'wagon_series', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobraz vlakové soupravy', true), array('controller' => 'trains', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Přidej vlakovou soupravu', true), array('controller' => 'trains', 'action' => 'add')); ?> </li>
	</ul>
</div>