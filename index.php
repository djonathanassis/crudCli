<?php
if(isset($_SESSION)){session_start();}
require __DIR__ . '\vendor\autoload.php';
require __DIR__ .'\source\Core\Config.php';
require __DIR__ . '\source\Core\Router.php';
$r = new Source\Core\Router();