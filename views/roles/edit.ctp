<div class="roles form">
<h2><?php __('Role');?></h2>
    <?php
        echo $this->SimplaBoxes->start_content_box(__('Přidání role', true));
            echo $this->SimplaBoxes->start_content_tab(true);

            echo $this->Form->create('Role');
            echo $this->Form->input('id');
            echo $this->SimplaForm->input_small('name', array('label' => 'Název role'));
            echo $this->SimplaForm->end(array('label' => __('Ulož', true)));

            echo $this->SimplaBoxes->end_content_tab();
        echo $this->SimplaBoxes->end_content_box();
    ?>
</div>
<div class="actions">
	<h3><?php __('Kam dál?'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Smazat', true), array('action' => 'delete', $this->Form->value('Role.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Role.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Zobrazit zaměstnance', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Zobrazit role', true), array('controller' => 'roles', 'action' => 'index')); ?> </li>
	</ul>
</div>