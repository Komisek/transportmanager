<div class="employes index">
	<h2><?php __('Employes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('surname');?></th>
			<th><?php echo $this->Paginator->sort('role_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($employes as $employe):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $employe['Employe']['id']; ?>&nbsp;</td>
		<td><?php echo $employe['Employe']['name']; ?>&nbsp;</td>
		<td><?php echo $employe['Employe']['surname']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($employe['Role']['name'], array('controller' => 'roles', 'action' => 'view', $employe['Role']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $employe['Employe']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $employe['Employe']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $employe['Employe']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $employe['Employe']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Employe', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Roles', true), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role', true), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Archived Transportations', true), array('controller' => 'archived_transportations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Archived Transportation', true), array('controller' => 'archived_transportations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trains', true), array('controller' => 'trains', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Train', true), array('controller' => 'trains', 'action' => 'add')); ?> </li>
	</ul>
</div>