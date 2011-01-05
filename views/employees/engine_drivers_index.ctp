<div class="engine_driver_index">
	<h2><?php __('Strojvůdci');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
        		<th><?php echo $this->Paginator->sort('Jméno','name');?></th>
			<th><?php echo $this->Paginator->sort('Příjmení','surname');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('role_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($employees as $employee):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $employee['Employee']['name']; ?>&nbsp;</td>
		<td><?php echo $employee['Employee']['surname']; ?>&nbsp;</td>
		<td><?php echo $employee['Employee']['email']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($employee['Role']['name'], array('controller' => 'roles', 'action' => 'view', $employee['Role']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Detail', true), array('action' => 'view', $employee['Employee']['id'])); ?>
			<?php echo $this->Html->link(__('Upravit', true), array('action' => 'edit', $employee['Employee']['id'])); ?>
			<?php echo $this->Html->link(__('Smazat', true), array('action' => 'delete', $employee['Employee']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $employee['Employee']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Přidat zaměstnance', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Zobrazit role', true), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit historii přepravy', true), array('controller' => 'archived_transportations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit vlakove soupravy', true), array('controller' => 'trains', 'action' => 'index')); ?> </li>
	</ul>
</div>