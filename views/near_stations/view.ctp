<div class="nearStations view">
<h2><?php  __('Okolní stanice');?></h2>
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
	<h3><?php __('Úpravy'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Upravit', true), array('action' => 'edit', $nearStation['NearStation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Smazat', true), array('action' => 'delete', $nearStation['NearStation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $nearStation['NearStation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit okolní stanice', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Přidat okolní stanici', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit stanice', true), array('controller' => 'stations', 'action' => 'index')); ?> </li>
	</ul>
</div>
