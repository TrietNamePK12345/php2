<?php
use App\core\Application;
class m0001_initial
{
    public function up()
    {
        $db = Application::$app->db;
        $SQL = "
        CREATE TABLE users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            fullname VARCHAR(255) NOT NULL ,
            email VARCHAR(255) NOT NULL,
            password VARCHAR(255) NOT NULL ,
            created_at DATETIME DEFAULT  CURRENT_TIMESTAMP
        ) ENGINE=INNODB;
        ";

        $db->pdo->exec($SQL);
    }

    public function  down()
    {
        $db = Application::$app->db;
        $SQL = "DROP TABLE users";
        $db->pdo->exec($SQL);
    }
}