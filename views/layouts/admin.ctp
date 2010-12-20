<?php
 /*
  * Administrační rozhraní
  */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $html->charset(); ?>
<title>
<?php echo $_SERVER['HTTP_HOST']; ?> - Admin
<?php echo $title_for_layout; ?>
</title>
<?php
    echo $html->css(array('admin/reset', 'admin/style', 'admin/invalid', 'admin/admin'));

    echo $html->script('admin/jquery-1.3.2.min');
    echo $html->script('admin/simpla.jquery.configuration');
    echo $html->script('admin/facebox');
    echo $html->script('admin/jquery.wysiwyg');
    //echo $html->script('admin/jquery.datePicker');
    //echo $html->script('admin/jquery.date');
    echo $html->css('tree');
    echo $scripts_for_layout;
?>
</head>
<body>
<div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->

<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->

			<h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>

			<!-- Logo (221px wide) -->
			<a href="#">
                            <?php echo $html->image('admin/logo.png', array('alt' => 'Simpla Admin logo', 'id' => 'logo'));?>
                        </a>

			<!-- Sidebar Profile links -->
			<div id="profile-links">
				Hello, <a href="#" title="Edit your profile">John Doe</a>, you have <a href="#messages" rel="modal" title="3 Messages">3 Messages</a><br />
				<br />
				<?php echo $html->link(__('Zobraz webovou stránku', true), array('admin' => false, 'controller' => 'pages', 'action' => 'display', 'home'));?> | <?php echo $html->link(__('Odhlásit', true), array('admin' => false, 'controller' => 'users', 'action' => 'logout'));?>
			</div>

			<ul id="main-nav">  <!-- Accordion Menu -->

                            <li>
                                <?php echo $menu->link(__('Dashbord', true), array('admin' => true, 'controller' => 'pages'), array('toplink' => true, 'singlelink' => true));?>
                            </li>

                            <li>
                                <?php echo $menu->link(__('Správa obsahu', true), array('admin' => true, 'controller' => 'contents'), array('toplink' => true));?>
                                <ul>
                                    <li><?php echo $menu->link(__('Uprav novinky', true), array('admin' => true, 'controller' => 'news'));?></li>
                                    <li><?php echo $menu->link(__('Uprav akce', true), array('admin' => true, 'controller' => 'events'));?></li>
                                    <li><?php echo $menu->link(__('Uprav texty', true), array('admin' => true, 'controller' => 'texts'));?></li>
                                    <li><?php echo $html->link(__('Uprav kategorie novinek', true), array('admin' => true, 'controller' => 'categories'));?></li>
                                    <li><?php echo $html->link(__('Uprav soubory', true), array('admin' => true, 'controller' => 'upload_files'));?></li>
                                </ul>
                            </li>

                            <li>
                                <?php echo $menu->link(__('Experti', true), array('admin' => true, 'controller' => 'experts'), array('toplink' => true)); ?>
                                <ul>
                                    <li><?php echo $menu->link(__('Přidej experta', true), array('admin' => true, 'controller' => 'experts', 'action' => 'add'));?></li>
                                    <li><?php echo $menu->link(__('Vypiš experty', true), array('admin' => true, 'controller' => 'experts', 'action' => 'index')); ?></li>
                                    <li><?php echo $menu->link(__('Uprav obory', true), array('admin' => true, 'controller' => 'scopes', 'action' => 'index'))?></li>
                                </ul>
                            </li>

                            <li>
                                <?php echo $menu->link(__('Uživatelé', true), array('admin' => true, 'controller' => 'users'), array('toplink' => true));?>
                                    <ul>
                                            <li><?php echo $menu->link(__('Přidej uživatele', true), array('admin' => true, 'controller' => 'users', 'action' => 'add'));?></li>
                                            <li><?php echo $menu->link(__('Vypiš uživatele', true), array('admin' => true, 'controller' => 'users', 'action' => 'index'));?></li>
                                            <li><?php echo $menu->link(__('Uprav volitelná pole', true), array('admin' => true, 'controller' => 'custom_user_fields', 'action' => 'index'));?></li>
                                            <li><?php echo $menu->link(__('Uprav role', true), array('admin' => true, 'controller' => 'roles', 'action' => 'index'));?></li>
                                    </ul>
                            </li>

                            <li>
                                <?php echo $menu->link(__('Nastavení webu', true), array('admin' => true, 'controller' => 'web_settings'), array('toplink' => true));?>
                                    <ul>
                                        <li><?php echo $menu->link(__('Uprav ACO', true), array('admin' => true, 'controller' => 'acos'));?></li>
                                    </ul>
                            </li>

                            <li>
                                <?php echo $menu->link(__('Uživatelská nastavení', true), array('admin' => true, 'controller' => 'settings'), array('toplink' => true));?>
                                    <ul>
                                        <li><?php echo $menu->link(__('Změna hesla', true), array('admin' => true, 'controller' => 'users', 'action' => 'change_password'));?></li>
                                    </ul>
                            </li>

			</ul> <!-- End #main-nav -->

		</div></div> <!-- End #sidebar -->

<div id="main-content"> <!-- Main Content Section with everything -->
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Session->flash(); ?>
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>

<?php echo $content_for_layout; ?>

<?php echo $this->SimplaBoxes->clear();?>

<div id="footer">
        <small>
                        &#169; Copyright 2010 Vojtěch Biberle | <a href="#">Top</a>
        </small>
</div> <!-- End #footer -->

</div> <!-- End #main-content -->
<div class="clear"></div>
</div> <!-- End #body-wrapper -->
<div style="background-color: white;">
<?php //echo $this->element('sql_dump'); ?>
</div>
</body>
</html>