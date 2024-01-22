<?php
/*
| Register The Auto Loader
|--------------------------------------------------------------------------
*/
require_once __DIR__.'/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

require_once __DIR__.'/../config/web_root.php';


use App\core\Application as App;

$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD']
    ]
];

$app = new App(dirname(__DIR__), $config);


/*
| Register the Address Page
|--------------------------------------------------------------------------
*/

require_once __DIR__.'/../routes/web.php';

/*
|--------------------------------------------------------------------------
*/




/*
| Run The Application
|--------------------------------------------------------------------------
*/

$app::run();

/*
|--------------------------------------------------------------------------
*/
