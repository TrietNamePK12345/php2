<?php

namespace App\Core;

class Migration
{
    use Connection;
    public \PDO $con;

    function __construct()
    {
        $this->con = $this->createConnection();
    }
    public function applyMigrations()
    {
        $sql = $this->createMigrationsTable(); // tạo bảng migration
        $appliedMigrations = $this->getAppliedMigration(); // thực hiện các migration

        $files = scandir(Application::$ROOT_DIR."/database/migrations"); //scandir : lấy danh sách tất cả các tệp trong directory.
        $toApplyMigrations = array_diff($files, $appliedMigrations); // array_diff : chỉ lấy các phần tử có trong arr1  và không có chứa nó trong các arr sau.
        foreach ( $toApplyMigrations as $migration) {
            if ( $migration === '.' || $migration === '..') {
                continue;
            }

            require_once Application::$ROOT_DIR."/database/migrations/$migration";
            $className = pathinfo($migration, PATHINFO_FILENAME); // lấy tên tệp
            $instance = new $className();

            $this->log("Applying migration $migration");
            $instance->up();
            $this->log("Applyied migration $migration");

            $newMigrations[] = $migration;
        }

        if (!empty($newMigrations)) {
            $this->saveMigrations($newMigrations);
        } else {
            echo $this->log("All migrations are applied");
        }
    }

    public function createMigrationsTable()
    {
        $this->con->exec("CREATE TABLE IF NOT EXISTS migrations(
            id INT AUTO_INCREMENT PRIMARY KEY,
            migration VARCHAR(255),
            create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=INNODB;");
    }

    public function getAppliedMigration()
    {
        $statement = $this->con->prepare("SELECT migration FROM migrations");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_COLUMN);
    }

    public function  saveMigrations(array $migrations)
    {
        // implode: nối phần tử thành chuỗi , dunng , để ngăn cách các pt
        // array_map: áp dụng 1 hàm callback(có thể là 1 hàm vô danh như fn($m))
        $str = implode(",",array_map(fn($m) => "('$m')", $migrations));

        $statement =  $this->con->prepare(
            "INSERT INTO migrations (migration) VALUES
                   $str                
                    ");
        $statement->execute();
    }

    protected function  log($message)
    {
        echo "[".date('Y-m-d H:i:s')."] - $message".PHP_EOL;
    }
}