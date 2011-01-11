<ul class="shortcut-buttons-set">
    <li>
        <?php echo $menu->image_link('icons/simplicio/48x48/user_add.png', __('Přidej uživatele',true), array('controller' => 'employees', 'action' => 'add'));?>
    </li>

    <li>
        <?php echo $menu->image_link('icons/simplicio/48x48/user_manage.png', __('Vypiš strojvůdce', true), array('controller' => 'employees', 'action' => 'engine_driver_index'));?>
    </li>

</ul><!-- End .shortcut-buttons-set -->