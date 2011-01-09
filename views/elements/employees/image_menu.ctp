<ul class="shortcut-buttons-set">
    <li>
        <?php echo $menu->image_link('icons/simplicio/48x48/user_add.png', __('Přidej uživatele',true), array('controller' => 'employees', 'action' => 'add'));?>
    </li>

    <li>
        <?php echo $menu->image_link('icons/simplicio/48x48/user_manage.png', __('Vypiš uživatele', true), array('controller' => 'employees', 'action' => 'index'));?>
    </li>

    <li>
        <?php echo $menu->image_link('icons/simplicio/48x48/role_manage.png', __('Uprav role', true), array('controller' => 'roles', 'action' => 'index'));?>
    </li>
</ul><!-- End .shortcut-buttons-set -->