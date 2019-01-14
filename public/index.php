<?php
error_reporting(E_ALL^E_DEPRECATED);
ini_set('display_errors', 1);
require "../vendor/autoload.php";

use Calculator\Routes\Router;

Router::run();
