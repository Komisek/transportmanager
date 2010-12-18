<?php

if(!isset($_SERVER['HTTP_HOST']))
{
    $_SERVER['HTTP_HOST'] = 'tm';
}

switch($_SERVER['HTTP_HOST'])
            {
                case 'tm':
                    class DATABASE_CONFIG {

                            var $default = array(
                                    'driver' => 'mysql',
                                    'persistent' => false,
                                    'host' => 'localhost',
                                    'login' => 'transportmanager',
                                    'password' => 'transportmanager',
                                    'database' => 'transportmanager',
                            );
                    }
                break;
                case 'transportmanager':
                    class DATABASE_CONFIG {

                            var $default = array(
                                    'driver' => 'mysql',
                                    'persistent' => false,
                                    'host' => 'localhost',
                                    'login' => 'komisek',
                                    'password' => 'komisek',
                                    'database' => 'TransportManager',
                            );
                    }
                break;
            }
?>
