<?php

class SimplaTableHelper extends FormHelper
{
    var $__model = '';
    var $__countCols = 0;
    var $helpers = array('Form', 'Html', 'SimplaForm', 'Paginator', 'SimplaBoxes');

    function start_table($model = null)
    {
        $this->__model = $model;
        $out = '';
        $admin = '';
        if(isset($this->params['admin']) && $this->params['admin'] == 1)
        {
            $admin = 'admin/';
        }
        $out .= '<form id="'.$model.'Listing" method="post" action="/'.$admin.Inflector::pluralize($model).'/listing">'.NL;
        $out .= '<table>'.NL;
        return $out;
    }

    function end_table()
    {
        $out = '';
        $out .= '</table>'.NL;
        $out .= '</form>'.NL;
        return $out;
    }

    function table_head($names = array())
    {
        $this->__countCols = count($names);
        $out ='';
        $out .= '<thead>'.NL;
        $out .= '<tr>'.NL;
        $out .= '<th><input class="check-all" type="checkbox" /></th>'.NL;
        foreach($names as $name)
        {
            $out .= '<th>'.$name.'</th>'.NL;
        }
        $out .= '</tr>'.NL;
        $out .= '</thead>'.NL;
        return $out;
    }

    function table_body($data = array(), $format = array())
    {
        $i = 0;
        /*
        foreach ($users as $user)
        {
            echo '<tr>';
                echo '<td><input type="checkbox" value="'.$user['User']['id'].'"/></td>';
                echo '<td>';
                    echo $html->link($user['User']['username'], array('admin' => true, 'controller' => 'users', 'action' => 'view', $user['User']['id']), array('escape' => false, 'alt' => __('Prohlédnout', true)));
                echo '</td>';
                echo '<td>jmeno</td>';
                echo '<td>prijmeni</td>';
                echo '<td>'.$user['User']['created'].'</td>';
                echo '<td>role</td>';
                echo '<td>';
                    echo $html->link($html->image('icons/simplicio/16x16/user_edit.png', array('alt' => __('Upravit', true), 'title' =>  __('Upravit', true))).__('Upravit', true), array('admin' => true, 'controller' => 'users', 'action' => 'edit', $user['User']['id']), array('escape' => false, 'title' => __('Upravit', true)));
                    echo '&nbsp;&nbsp;';
                    echo $html->link($html->image('icons/simplicio/16x16/user_delete.png', array('alt' => __('Smazat', true), 'title' => __('Smazat', true))).__('Smazat', true), array('admin' => true, 'controller' => 'users', 'action' => 'delete', $user['User']['id']), array('escape' => false, 'title' => __('Smazat', true)), sprintf(__('Opravdu chcete smazat uživatele: %s?', true), $user['User']['username']));
                    echo '&nbsp;&nbsp;';
                    echo $html->link($html->image('icons/simplicio/16x16/role_manage.png', array('alt' => __('Upravit role', true), 'title' =>  __('Upravit role', true))).__('Role na webu', true), array('admin' => true, 'controller' => 'user', 'action' => 'role', $user['User']['id']), array('escape' => false, 'title' =>  __('Upravit role', true)));
                echo '</td>';
            echo '</tr>';
        }*/
         /* [0] => Array
        (
            [User] => Array
                (
                    [id] => 2
                    [username] => admin
                    [password] => 63bd5ac8875a401b59e2cb2cdba4e7191c6afbb2
                    [created] => 2010-09-14 20:33:32
                    [modified] => 2010-10-08 21:11:35
                )

            [UserInformation] => Array
                (
                    [0] => Array
                        (
                            [user_id] => 2
                            [name] => admin
                            [surname] => admin
                            [email] => admin@cms
                            [desc] => administrátor, nastavující web
                            [avatar] =>
                            [ckto_expert] => 0
                        )

                )

            [Role] => Array
                (
                )

        )

         */
        $out = '';
        $out .= '<tbody>'.NL;
        foreach($data as $row)
        {
            $out .= '<tr>'.NL;
            $out .= '<td>'.$this->Form->checkbox('data['.$this->__model.'][id]', array('value' => $row[$this->__model]['id'])).'</td>'.NL;
            foreach($format as $key => $cell)
            {
                $out .= '<td>';
                /*if($key != 'actions')
                {
                    list($model, $field) = explode('.', $cell);
                }*/

                /*switch($key)
                {
                case 'link':
                    $out .=$key.'-'.$model.'-'.$field;
                    $out .= $this->Html->link($row[$model][$field], array('controller' => Inflector::pluralize($model), 'action' => 'view', $row[$model]['id']), array('escape' => false, 'alt' => __('Prohlédnout', true)));
                break;*/
                if($key == 'actions' && is_array($cell))
                {
                    foreach($cell as $action => $text)
                    {
                        list($m, $action) = explode('.', $action);
                        $controller = strtolower(Inflector::pluralize($m));
                        $warning = '';
                        if($action == 'delete')
                        {
                            $warning = __('Opravdu smazat?', true);
                        }
                        $out .= $this->Html->link($this->Html->image('icons/simplicio/16x16/'.strtolower($this->__model).'_'.$action.'.png', array('alt' => $text, 'title' => $text)).$text, array('controller' => $controller, 'action' => $action, $row[$this->__model]['id']), array('escape' => false, 'title' => $text), $warning);
                        $out .= '&nbsp;&nbsp'.NL;
                    }
                }
                else
                {
                    if(isset($key['link']))
                    {
                        list($model, $field) = explode('.', $key);
                        $out .= $this->Html->link($row[$model][$field], array('controller' => Inflector::pluralize($model), 'action' => 'view', $row[$model]['id']), array('escape' => false, 'alt' => __('Prohlédnout', true)));
                    }
                    else
                    {
                        list($model, $field) = explode('.', $cell);
                        if(isset($row[$model][0]))
                        {
                            if(count($row[$model]) > 1)
                            {
                                /*
                                 * [Role] => Array
                                    (
                                        [0] => Array
                                            (
                                                [id] => 1
                                                [name] => Administrátor
                                                [text] =>
                                                [UsersRole] => Array
                                                    (
                                                        [user_id] => 2
                                                        [role_id] => 1
                                                        [is_default] => 1
                                                    )

                                            )

                                        [1] => Array
                                            (
                                                [id] => 3
                                                [name] => Registrovaný Uživatel
                                                [text] =>
                                                [UsersRole] => Array
                                                    (
                                                        [user_id] => 2
                                                        [role_id] => 3
                                                        [is_default] => 0
                                                    )

                                            )

                                    )
                                 */
                                foreach($row[$model] as $m)
                                {
                                    $out .= $m[$field].', ';
                                }
                            }
                            else
                            {
                                /*
                                 * [UserInformation] => Array
                                    (
                                        [0] => Array
                                            (
                                                [user_id] => 2
                                                [name] => Ilona
                                                [surname] => Babková
                                                [email] => admin@cms
                                                [desc] => administrátor, nastavující web
                                                [avatar] =>
                                                [ckto_expert] => 0
                                            )

                                    )
                                 */
                                $out .= $row[$model][0][$field];
                            }
                        }
                        else
                        {
                            /*
                             * [User] => Array
                                (
                                    [id] => 2
                                    [username] => admin
                                    [password] => 63bd5ac8875a401b59e2cb2cdba4e7191c6afbb2
                                    [created] => 2010-09-14 20:33:32
                                    [modified] => 2010-10-08 21:11:35
                                )
                             */
                            $out .= $row[$model][$field];
                        }
                    }
                }
                $out .= '</td>'.NL;
            }
            $out .= '</tr>'.NL;
        }
        $out .= '</tbody>'.NL;
        return $out;
    }

    function table_foot($options = array())
    {
        /*
         * <tfoot>
                <tr>
                    <td colspan="6">
                        <?php echo $html->link($html->image('icons/simplicio/32x32/user_add.png').__('Přidat nového uživatele', true), array('admin' => true, 'controller' => 'users', 'action' => 'add'), array('escape' => false, 'title' => __('Přidat nového uživatele', true)));?>
                    </td>
                </tr>
                <tr>
                    <td colspan="6">
                        <div class="bulk-actions align-left">
                            <select name="dropdown">
                                <option value="option1"><?php __('Vyberte akci ...');?></option>
                                <option value="option2"><?php __('Upravit');?></option>
                                <option value="option3"><?php __('Smazat');?></option>
                            </select>
                            <a class="button" href="#"><?php __('Použít na vybrané');?></a>
                        </div>

                        <div class="pagination">
                            <?php
                                echo $paginator->first(__('&laquo; První', true), array('escape' => false));
                                echo $paginator->prev(__('&laquo; Předcházející', true), array('escape' => false));
                                echo $paginator->numbers();
                                echo $paginator->next(__('Následující &raquo;', true), array('escape' => false));
                                echo $paginator->last(__('Poslední &raquo;', true), array('escape' => false));
                            ?>
                               <!-- <a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
                                <a href="#" class="number" title="1">1</a>
                                <a href="#" class="number" title="2">2</a>
                                <a href="#" class="number current" title="3">3</a>
                                <a href="#" class="number" title="4">4</a>
                                <a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a> -->
                        </div> <!-- End .pagination -->
                        <div class="clear"></div>
                    </td>
                </tr>
            </tfoot>
         */
        /*
         * echo $this->SimplaForm->table_foot(
            array(
                'bulkActions' => array('empty' => __('Vyberte akci ...', true), 'edit' => __('Upravit', true), 'delete' => __('Smazat', true)),
                'addAction' =>  array('text' => __('Přidat nového uživatele', true), 'url' => array('admin' => true, 'controller' => 'users', 'action' => 'add')),
                'pagination' => true
            )
         );
         */
        $out = '';
        $out .= '<tfoot>';
        if(isset($options['addAction']))
        {
            $out .= '<tr>';
            $out .= '<td colspan="'.$this->__countCols.'">';
            //echo $html->link($html->image('icons/simplicio/32x32/user_add.png').__('Přidat nového uživatele', true), array('admin' => true, 'controller' => 'users', 'action' => 'add'), array('escape' => false, 'title' => __('Přidat nového uživatele', true)));
            $out .= $this->Html->link($this->Html->image('icons/simplicio/32x32/'.strtolower($this->__model).'_add.png').$options['addAction']['text'], $options['addAction']['url'], array('escape' => false, 'title' => $options['addAction']['text']));
            $out .= '</td>';
            $out .= '</tr>';
        }
        if(isset($options['bulkActions']) || isset($options['pagination']))
        {
            $out .= '<tr>';
            $out .= '<td colspan="'.$this->__countCols.'">';
            if(isset($options['bulkActions']))
            {
                $out .= '<div class="bulk-actions align-left">';
                //FIXME: Předělat tento select na používání HTML helperu
                $out .= '<select name="data['.$this->__model.'][bulkAction]">';
                    foreach($options['bulkActions'] as $action=>$text)
                    {
                        $out .= '<option value="'.$action.'">'.$text.'</option>';
                    }
                $out .= '</select>';
                $out .= ' '.$this->Html->link(__('Použít na vybrané', true), array(), array('class' => 'button', 'onclick' => "$('#{$this->__model}Listing').submit(); return false;"));
                $out .= '</div>';
            }
            if(isset($options['pagination']) && $options['pagination'] == true)
            {
                $out .= '<div class="pagination">';
                $out .= $this->Paginator->first(__('&laquo; První', true), array('escape' => false));
                $out .= $this->Paginator->prev(__('&laquo; Předcházející', true), array('escape' => false));
                $out .= $this->Paginator->numbers();
                $out .= $this->Paginator->next(__('Následující &raquo;', true), array('escape' => false));
                $out .= $this->Paginator->last(__('Poslední &raquo;', true), array('escape' => false));
                       /*<!-- <a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
                        <a href="#" class="number" title="1">1</a>
                        <a href="#" class="number" title="2">2</a>
                        <a href="#" class="number current" title="3">3</a>
                        <a href="#" class="number" title="4">4</a>
                        <a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a> -->*/
                $out .= '</div> <!-- End .pagination -->';
            }
            $out .= $this->SimplaBoxes->clear();
            $out .= '</td>';
            $out .= '</tr>';
        }
        $out .= '</tfoot>';
        return $out;
    }
}

?>