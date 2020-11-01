<?php

class Category {

    private $conn;
    private $table_name = "categories";

    // свойства объекта
    public $id;
    public $name;
    public $description;
    public $created;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // используем раскрывающийся список выбора
    public function readAll() {
        // выборка всех данных
        $query = "SELECT
                    id, name, description
                FROM
                    " . $this->table_name . "
                ORDER BY
                    name";

        $stmt = $this->conn>prepare($query);
        $stmt->execute();

        return $stmt;
    }

    // используем раскрывающийся список выбор
    public function read()
    {
        // выбираем все данные
        $query = "SELECT
                id, name, description
            FROM
                " . $this->table_name . "
            ORDER BY
                name";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
}
