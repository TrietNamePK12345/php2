<?php
use App\Core\Application as App;

/*
| Register The Auto Loader
*/
require_once __DIR__.'/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();



$app = new App(dirname(__DIR__)); // get config


$app->migration->applyMigrations(); // khởi chạy ApplyMigrations

