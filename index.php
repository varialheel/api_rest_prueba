<?php
ini_set('display_error',1);
ini_set('log_errors',1);
ini_set('error_log',$_SERVER['DOCUMENT_ROOT'].'/log.txt');

require_once 'conf/config.php';
require_once 'bd/Bd.php';
require_once 'controllers/RouteController.php';

require_once 'routes/routes.php';