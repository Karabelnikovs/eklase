<?php
if (!class_exists('Database')) {
    class Database
    {
        private $config = [
            "host" => "localhost",
            "port" => 8889,
            "dbname" => "eklase",
            "charset" => "utf8mb4",
            "user" => "root",
            "password" => "root"
        ];

        private $pdo;

        public function __construct()
        {
            $dsn = "mysql:" . http_build_query($this->config, "", ";");
            $this->pdo = new PDO($dsn);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }

        public function query($sql, $params = [])
        {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($params);
            return $statement;
        }
    }
}   