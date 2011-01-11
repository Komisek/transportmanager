<ul class="shortcut-buttons-set">
    <li>
        <?php echo $menu->image_link('icons/simplicio/48x48/shoppingcart_add.png', __('Sestavit soupravy', true), array('controller' => 'trains', 'action' => 'wizard'));?>
    </li>

    <li>
        <?php echo $menu->image_link('icons/simplicio/48x48/shoppingcart.png', __('Zobrazit soupravy', true), array('controller' => 'trains', 'action' => 'index'));?>
    </li>

    <li>
        <?php echo $menu->image_link('icons/simplicio/48x48/shoppingcart_checkout.png', __('Zobrazit objednavky', true), array('controller' => 'orders', 'action' => 'index'));?>
    </li>
</ul><!-- End .shortcut-buttons-set -->