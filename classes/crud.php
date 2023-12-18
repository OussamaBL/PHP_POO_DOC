<?php

class crud
{
    static PDO $pdo;

    public function __construct($host, $dbname, $user, $password)
    {
        $this->Connexion($host, $dbname, $user, $password);

    }
    public function Connexion($host, $dbname, $user, $password):void{
        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
        self::$pdo = new PDO($dsn, $user, $password);
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    static function create($table, $data):int
    {
        $columns = implode(', ', array_keys($data));
        $values = implode(', ', array_fill(0, count($data), '?'));

        $sql = "insert into $table($columns) values ($values)";
        $stmt = self::$pdo->prepare($sql);
        $stmt->execute(array_values($data));

        return self::$pdo->lastInsertId();
    }

    static function read($table, $id)
    {
        $sql = "SELECT * FROM $table WHERE id = ?";
        $stmt = self::$pdo->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    static function update($table, $id, $data):int
    {
        $setClause = implode(' = ?, ', array_keys($data)) . ' = ?';
        $sql = "UPDATE $table SET $setClause WHERE id = ?";
        $stmt = self::$pdo->prepare($sql);
        $stmt->execute(array_merge(array_values($data), [$id]));

        return $stmt->rowCount();
    }

    static function delete($table, $id):int
    {
        $sql = "DELETE FROM $table WHERE id = ?";
        $stmt = self::$pdo->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->rowCount();
    }
}