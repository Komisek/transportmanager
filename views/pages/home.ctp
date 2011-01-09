    <h2><?php  echo __('Zdroje');?></h2>
    <?php
        echo $this->SimplaBoxes->clear();
        echo $this->SimplaBoxes->start_content_box(__('Výpis strojvůdců', true));
            echo $this->SimplaBoxes->start_content_tab(true);

            echo $this->SimplaTable->start_table('Employees');
                echo $this->SimplaTable->table_head(
                        array(
                            __('Jméno', true),
                            __('Příjmení', true),
                            __('e-mail', true),
                            __('Akce', true)
                        ));
                echo $this->SimplaTable->table_body(
                        $employees,
                        array(
                            'Employees.name',
                            'Employees.surname',
                            'Employees.email',
                            'actions' => array(
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