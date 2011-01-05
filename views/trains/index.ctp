<div class="trains index">
	<h2><?php __('Vlakové soupravy');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
                        <th><?php echo $this->Paginator->sort('Číslo vlaku', 'id');?></th>
			<th><?php echo $this->Paginator->sort('route_id');?></th>
			<th><?php echo $this->Paginator->sort('stav_rezervace');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
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
		<td>
			<?php echo $this->Html->link($train['Route']['id'], array('controller' => 'routes', 'action' => 'view', $train['Route']['id'])); ?>
		</td>
		<td><?php echo $train['Train']['stav_rezervace']; ?>&nbsp;</td>
		<td><?php echo $train['Train']['created']; ?>&nbsp;</td>
		<td><?php echo $train['Train']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Detail', true), array('action' => 'view', $train['Train']['id'])); ?><br/>
			<?php echo $this->Html->link(__('Upravit', true), array('action' => 'edit', $train['Train']['id'])); ?><br/>
			<?php echo $this->Html->link(__('Smazat', true), array('action' => 'delete', $train['Train']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $train['Train']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Přidat vlakovou soupravu', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Zobrazit trasy', true), array('controller' => 'routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Přidat trasu', true), array('controller' => 'routes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit nákladní vozy', true), array('controller' => 'cargo_wagons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Přidat nákladní vůz', true), array('controller' => 'cargo_wagons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit strojvůdce', true), array('controller' => 'employees', 'action' => 'engine_driver_index')); ?> </li>
		<li><?php echo $this->Html->link(__('Přidat zaměstnance', true), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit hnací vozy', true), array('controller' => 'locomotives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Přidat hnací vůz', true), array('controller' => 'locomotives', 'action' => 'add')); ?> </li>
	</ul>
</div>