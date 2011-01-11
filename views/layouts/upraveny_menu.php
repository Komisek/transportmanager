<?php

    switch ($role[id]) {
    case 1:?>
			<ul id="main-nav">  <!-- Accordion Menu -->

                            <li>
                                <?php echo $menu->link(__('Dashbord', true), array('admin' => false, 'controller' => 'pages'), array('toplink' => true, 'singlelink' => true));?>
                            </li>

                            <li>
                                <?php echo $menu->link(__('Plánování přepravy', true), array('admin' => false, 'controller' => 'transportations'), array('toplink' => true));?>
                                <ul>
                                    <li><?php echo $menu->link(__('Objenávky', true), array('admin' => false, 'controller' => 'orders'));?></li>
                                    <li><?php echo $menu->link(__('Vlakové soupravy', true), array('admin' => false, 'controller' => 'trains'));?></li>
                                    <li><?php echo $menu->link(__('Trasy', true), array('admin' => false, 'controller' => 'routes'));?></li>
                                </ul>
                            </li>

                            <li>
                                <?php echo $menu->link(__('Trasy', true), array('admin' => false, 'controller' => 'routes'), array('toplink' => true)); ?>
                                <ul>
                                    <li><?php echo $menu->link(__('Stanice', true), array('admin' => false, 'controller' => 'stations'));?></li>
                                    <li><?php echo $menu->link(__('Cesty', true), array('admin' => false, 'controller' => 'paths')); ?></li>
                                </ul>
                            </li>

                            <li>
                                <?php echo $menu->link(__('Zaměstnanci', true), array('admin' => false, 'controller' => 'employees'), array('toplink' => true));?>
                                    <ul>
                                            <li><?php echo $menu->link(__('Zobraz zaměstnance', true), array('admin' => false, 'controller' => 'employees', 'action' => 'index'));?></li>
                                            <li><?php echo $menu->link(__('Zobraz uživatelské role', true), array('admin' => false, 'controller' => 'roles'));?></li>
                                    </ul>
                            </li>

                            <li>
                                <?php echo $menu->link(__('Zdroje', true), array('admin' => false, 'controller' => 'sources'), array('toplink' => true));?>
                                    <ul>
                                            <li><?php echo $menu->link(__('Zobraz strojvůdce', true), array('admin' => false, 'controller' => 'employees', 'action' => 'engine_drivers_index'));?></li>
                                            <li><?php echo $menu->link(__('Zobraz hnací vozidla', true), array('admin' => false, 'controller' => 'locomotives'));?></li>
                                            <li><?php echo $menu->link(__('Zobraz nákladní vozy', true), array('admin' => false, 'controller' => 'cargo_wagons'));?></li>
                                            <li><?php echo $menu->link(__('Zobraz vozové řady', true), array('admin' => false, 'controller' => 'wagon_series'));?></li>
                                    </ul>
                            </li>

                            <li>
                                <?php echo $menu->link(__('Archiv', true), array('admin' => false, 'controller' => 'archived_transportations'), array('toplink' => true, 'singlelink' => true));?>
                            </li>

                            <li>
                                <?php echo $menu->link(__('Uživatelská nastavení', true), array('admin' => false, 'controller' => 'user', 'action' => 'settings'), array('toplink' => true));?>
                                    <ul>
                                        <li><?php echo $menu->link(__('Změna hesla', true), array('admin' => false, 'controller' => 'users', 'action' => 'change_password'));?></li>
                                    </ul>
                            </li>

                            <li>
                                <?php echo $menu->link(__('Nastavení aplikace', true), array('admin' => false, 'controller' => 'settings'), array('toplink' => true));?>
                                    <ul>
                                        <li><?php echo $menu->link(__('Uprav nastavení', true), array('admin' => false, 'controller' => 'settings'));?></li>
                                        <li><?php echo $menu->link(__('Uprav ACO', true), array('admin' => false, 'controller' => 'acos'));?></li>
                                    </ul>
                            </li>



			</ul> <!-- End #main-nav -->

    <?php    break;
    case 2:?>
			<ul id="main-nav">  <!-- Accordion Menu -->

                            <li>
                                <?php echo $menu->link(__('Dashbord', true), array('admin' => false, 'controller' => 'pages'), array('toplink' => true, 'singlelink' => true));?>
                            </li>

                            <li>
                                <?php echo $menu->link(__('Plánování přepravy', true), array('admin' => false, 'controller' => 'transportations'), array('toplink' => true));?>
                                <ul>
                                    <li><?php echo $menu->link(__('Objenávky', true), array('admin' => false, 'controller' => 'orders'));?></li>
                                </ul>
                            </li>
                            <li>
                                <?php echo $menu->link(__('Archiv', true), array('admin' => false, 'controller' => 'archived_transportations'), array('toplink' => true, 'singlelink' => true));?>
                            </li>

                            <li>
                                <?php echo $menu->link(__('Uživatelská nastavení', true), array('admin' => false, 'controller' => 'user', 'action' => 'settings'), array('toplink' => true));?>
                                    <ul>
                                        <li><?php echo $menu->link(__('Změna hesla', true), array('admin' => false, 'controller' => 'users', 'action' => 'change_password'));?></li>
                                    </ul>
                            </li>

			</ul> <!-- End #main-nav -->
                        <?php break;
        case 3:?>
                        			<ul id="main-nav">  <!-- Accordion Menu -->

                            <li>
                                <?php echo $menu->link(__('Dashbord', true), array('admin' => false, 'controller' => 'pages'), array('toplink' => true, 'singlelink' => true));?>
                            </li>

                            <li>
                                <?php echo $menu->link(__('Plánování přepravy', true), array('admin' => false, 'controller' => 'transportations'), array('toplink' => true));?>
                                <ul>
                                    <li><?php echo $menu->link(__('Objenávky', true), array('admin' => false, 'controller' => 'orders'));?></li>
                                    <li><?php echo $menu->link(__('Vlakové soupravy', true), array('admin' => false, 'controller' => 'trains'));?></li>
                                    <li><?php echo $menu->link(__('Trasy', true), array('admin' => false, 'controller' => 'routes'));?></li>
                                </ul>
                            </li>
                            <li>
                                <?php echo $menu->link(__('Uživatelská nastavení', true), array('admin' => false, 'controller' => 'user', 'action' => 'settings'), array('toplink' => true));?>
                                    <ul>
                                        <li><?php echo $menu->link(__('Změna hesla', true), array('admin' => false, 'controller' => 'users', 'action' => 'change_password'));?></li>
                                    </ul>
                            </li>
			</ul> <!-- End #main-nav -->
                        <?php break;
                    case 4:?>
                        			<ul id="main-nav">  <!-- Accordion Menu -->

                            <li>
                                <?php echo $menu->link(__('Dashbord', true), array('admin' => false, 'controller' => 'pages'), array('toplink' => true, 'singlelink' => true));?>
                            </li>

                            <li>
                                <?php echo $menu->link(__('Trasy', true), array('admin' => false, 'controller' => 'routes'), array('toplink' => true)); ?>
                                <ul>
                                    <li><?php echo $menu->link(__('Stanice', true), array('admin' => false, 'controller' => 'stations'));?></li>
                                </ul>
                            </li>

                            <li>
                                <?php echo $menu->link(__('Zaměstnanci', true), array('admin' => false, 'controller' => 'employees'), array('toplink' => true));?>
                                    <ul>
                                            <li><?php echo $menu->link(__('Zobraz zaměstnance', true), array('admin' => false, 'controller' => 'employees', 'action' => 'index'));?></li>
                                            <li><?php echo $menu->link(__('Zobraz uživatelské role', true), array('admin' => false, 'controller' => 'roles'));?></li>
                                    </ul>
                            </li>

                            <li>
                                <?php echo $menu->link(__('Uživatelská nastavení', true), array('admin' => false, 'controller' => 'user', 'action' => 'settings'), array('toplink' => true));?>
                                    <ul>
                                        <li><?php echo $menu->link(__('Změna hesla', true), array('admin' => false, 'controller' => 'users', 'action' => 'change_password'));?></li>
                                    </ul>
                            </li>

			</ul> <!-- End #main-nav -->
                        <?php break;
                    case 6:?>
                        			<ul id="main-nav">  <!-- Accordion Menu -->

                            <li>
                                <?php echo $menu->link(__('Dashbord', true), array('admin' => false, 'controller' => 'pages'), array('toplink' => true, 'singlelink' => true));?>
                            </li>

                            <li>
                            <li>
                                <?php echo $menu->link(__('Zdroje', true), array('admin' => false, 'controller' => 'sources'), array('toplink' => true));?>
                                    <ul>
                                            <li><?php echo $menu->link(__('Zobraz strojvůdce', true), array('admin' => false, 'controller' => 'employees', 'action' => 'engine_drivers_index'));?></li>
                                            <li><?php echo $menu->link(__('Zobraz hnací vozidla', true), array('admin' => false, 'controller' => 'locomotives'));?></li>
                                            <li><?php echo $menu->link(__('Zobraz nákladní vozy', true), array('admin' => false, 'controller' => 'cargo_wagons'));?></li>
                                            <li><?php echo $menu->link(__('Zobraz vozové řady', true), array('admin' => false, 'controller' => 'wagon_series'));?></li>
                                    </ul>
                            </li>

                            <li>
                                <?php echo $menu->link(__('Uživatelská nastavení', true), array('admin' => false, 'controller' => 'user', 'action' => 'settings'), array('toplink' => true));?>
                                    <ul>
                                        <li><?php echo $menu->link(__('Změna hesla', true), array('admin' => false, 'controller' => 'users', 'action' => 'change_password'));?></li>
                                    </ul>
                            </li>

                          

			</ul> <!-- End #main-nav -->
                        <?php break;
                        default:
                            echo 'hovno';
                        break;
} ?>