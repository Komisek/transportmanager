<div class="roless index">
    <?php
        echo $this->SimplaBoxes->clear();
        echo $this->SimplaBoxes->start_content_box(__('Výpis rolí', true));
            echo $this->SimplaBoxes->start_content_tab(true);

            echo $this->SimplaTable->start_table('Role');
                echo $this->SimplaTable->table_head(
                        array(
                            __('Název', true),
                        ));
                echo $this->SimplaTable->table_body(
                        $roles,
                        array(
                            'Role.name',
                            'actions' => array(
                                'Role.edit' => __('Upravit', true),
                                'Role.delete' => __('Smazat', true),
                            )
                        ));
                echo $this->SimplaTable->table_foot(
                        array(
                            'addAction' =>  array('text' => __('Přidat novou roli', true), 'url' => array('admin' => true, 'controller' => 'roles', 'action' => 'add')),
                            'pagination' => true
                        ));
            echo $this->SimplaTable->end_table();

            //debug($employees);

            echo $this->SimplaBoxes->end_content_tab();
        echo $this->SimplaBoxes->end_content_box();
    ?>
</div>
<div class="actions">
	<h3><?php __('Kam dál?'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Zobrazit zaměstnance', true), array('controller' => 'employees', 'action' => 'index')); ?> </li>
	</ul>
</div>
