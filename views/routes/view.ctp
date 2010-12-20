<div class="routes view">
<h2><?php  __('Route');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $route['Route']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Start Station'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($route['StartStation']['name'], array('controller' => 'stations', 'action' => 'view', $route['StartStation']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('End Station'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($route['EndStation']['name'], array('controller' => 'stations', 'action' => 'view', $route['EndStation']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Datum Cas'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $route['Route']['datum_cas']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Periodicity'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($route['Periodicity']['name'], array('controller' => 'periodicities', 'action' => 'view', $route['Periodicity']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Train'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($route['Train']['id'], array('controller' => 'trains', 'action' => 'view', $route['Train']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Path'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($route['Path']['id'], array('controller' => 'paths', 'action' => 'view', $route['Path']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Stav Schvaleni'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $route['Route']['stav_schvaleni']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $route['Route']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $route['Route']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Route', true), array('action' => 'edit', $route['Route']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Route', true), array('action' => 'delete', $route['Route']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $route['Route']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Routes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Route', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Periodicities', true), array('controller' => 'periodicities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Periodicity', true), array('controller' => 'periodicities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trains', true), array('controller' => 'trains', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Train', true), array('controller' => 'trains', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Paths', true), array('controller' => 'paths', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Path', true), array('controller' => 'paths', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations', true), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Start Station', true), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
