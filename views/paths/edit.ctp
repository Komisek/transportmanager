<div class="paths form">
<?php echo $this->Form->create('Path');?>
	<fieldset>
 		<legend><?php __('Uprava cesty'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('station_id');
		echo $this->Form->input('next_id');
		echo $this->Form->input('lft');
		echo $this->Form->input('rght');
		echo $this->Form->input('parent_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('OK', true));?>
</div>
<div class="actions">
	<h3><?php __('Další úpravy'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Smazat', true), array('action' => 'delete', $this->Form->value('Path.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Path.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Paths', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Zobrazit cesty', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit stanice', true), array('controller' => 'stations', 'action' => 'index')); ?> </li>
        	<li><?php echo $this->Html->link(__('Zobrazit historii prepravy', true), array('controller' => 'archived_transportations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit trasy', true), array('controller' => 'routes', 'action' => 'index')); ?> </li>
	</ul>
</div>