<div class="paths index">
	<h2><?php __('Cesty');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('station_id');?></th>
			<th><?php echo $this->Paginator->sort('next_id');?></th>
			<th><?php echo $this->Paginator->sort('lft');?></th>
			<th><?php echo $this->Paginator->sort('rght');?></th>
			<th><?php echo $this->Paginator->sort('parent_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($paths as $path):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $path['Path']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($path['Station']['name'], array('controller' => 'stations', 'action' => 'view', $path['Station']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($path['Next']['name'], array('controller' => 'stations', 'action' => 'view', $path['Next']['id'])); ?>
		</td>
		<td><?php echo $path['Path']['lft']; ?>&nbsp;</td>
		<td><?php echo $path['Path']['rght']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($path['ParentPath']['id'], array('controller' => 'paths', 'action' => 'view', $path['ParentPath']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Detail', true), array('action' => 'view', $path['Path']['id'])); ?>
			<?php echo $this->Html->link(__('Upravit', true), array('action' => 'edit', $path['Path']['id'])); ?>
			<?php echo $this->Html->link(__('Smazat', true), array('action' => 'delete', $path['Path']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $path['Path']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Přidat cestu', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Zobrazit stanice', true), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit historii přepravy', true), array('controller' => 'archived_transportations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit trasy', true), array('controller' => 'routes', 'action' => 'index')); ?> </li>
	</ul>
</div>