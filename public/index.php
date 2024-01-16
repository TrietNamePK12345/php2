<?php
/*
| Register The Auto Loader
|--------------------------------------------------------------------------
*/
require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../config/web_root.php';


use App\core\Application as App;
$app = new App( dirname(__DIR__));


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
