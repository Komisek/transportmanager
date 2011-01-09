<div class="employees form">
<h2><?php __('Employee');?></h2>
    <?php
        echo $this->SimplaBoxes->start_content_box(__('Přidání zaměstnance', true));
            echo $this->SimplaBoxes->start_content_tab(true);

            echo $this->Form->create('Employee');
            echo $this->SimplaForm->input_small('name', array('label' => 'Jméno'));
            echo $this->SimplaForm->input_small('surname', array('label' => 'Příjmení'));
            echo $this->SimplaForm->input_small('email');
            echo $this->SimplaForm->input_small('passwd', array('label' => 'Heslo'));
            echo $this->SimplaForm->select('role_id', $roles);
            
            echo $this->SimplaForm->end(array('label' => __('Ulož', true)));

            echo $this->SimplaBoxes->end_content_tab();
        echo $this->SimplaBoxes->end_content_box();
    ?>
</div>
<div class="actions">
	<h3><?php __('Kam dál?'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Zobrazit zaměstnance', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Zobrazit role', true), array('controller' => 'roles', 'action' => 'index')); ?> </li>
	</ul>
</div>