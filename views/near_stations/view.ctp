<div class="nearStations view">
<h2><?php  __('Near Station');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nearStation['NearStation']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Station'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($nearStation['Station']['name'], array('controller' => 'stations', 'action' => 'view', $nearStation['Station']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Next Station'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($nearStation['next_station']['name'], array('controller' => 'stations', 'action' => 'view', $nearStation['next_station']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Vzdalenost'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nearStation['NearStation']['vzdalenost']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Near Station', true), array('action' => 'edit', $nearStation['NearStation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Near Station', true), array('action' => 'delete', $nearStation['NearStation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $nearStation['NearStation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Near Stations', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Near Station', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations', true), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station', true), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
