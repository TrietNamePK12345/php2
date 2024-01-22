<?php

namespace App\Core;

class Application
{
    public static string $ROOT_DIR;
    public Route $router;
    public Request $request;
    public Response $response;
    public Migration $migration;
    public Database $database;
    public static Application $app;
    public Controller $controller;

    public function __construct($rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Route($this->request, $this->response);
        $this->migration = new Migration();
        $this->database = new Database();
    }

    public function getController(): Controller
    {
        return $this->controller;
    }

    public function setController(Controller $controller): void
    {
        $this->controller = $controller;
    }

    public static function run()
    {
        echo Route::resolve();
    }


}