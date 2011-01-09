<div class="engine_driver_index">
    <?php
        echo $this->SimplaBoxes->clear();
        echo $this->SimplaBoxes->start_content_box(__('Výpis strojvůdců', true));
            echo $this->SimplaBoxes->start_content_tab(true);

            echo $this->SimplaTable->start_table('Employee');
                echo $this->SimplaTable->table_head(
                        array(
                            __('Jméno', true),
                            __('Příjmení', true),
                            __('e-mail', true),
                            __('Role', true),
                            __('Akce', true)
                        ));
                echo $this->SimplaTable->table_body(
                        $employees,
                        array(
                            'Employee.name',
                            'Employee.surname',
                            'Employee.email',
                            'Role.name',
                            'actions' => array(
                                'Employee.view' => __('Detail', true),
                                'Employee.edit' => __('Upravit', true),
                                'Employee.delete' => __('Smazat', true),
                            )
                        ));
                echo $this->SimplaTable->table_foot(
                        array(
                            'addAction' =>  array('text' => __('Přidat nového zaměstnance', true), 'url' => array('admin' => true, 'controller' => 'employees', 'action' => 'add')),
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
		<li><?php echo $this->Html->link(__('Zobrazit role', true), array('controller' => 'roles', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('Zobrazit historii přepravy', true), array('controller' => 'archived_transportations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit vlakove soupravy', true), array('controller' => 'trains', 'action' => 'index')); ?> </li>
        </ul>
</div>

