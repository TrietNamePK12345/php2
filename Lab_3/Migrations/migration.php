<?php
use App\core\Application as App;

/*
| Register The Auto Loader
*/
require_once __DIR__.'/../vendor/autoload.php';

require_once __DIR__.'/../config/database.php'; // use config


$app = new App(dirname(__DIR__), $config); // get config


$app->db->applyMigrations(); // khởi chạy ApplyMigrations

