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
                                    'encoding' => 'utf8'
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
                                    'encoding' => 'utf8',
                            );
                    }
                break;
            }
?>
