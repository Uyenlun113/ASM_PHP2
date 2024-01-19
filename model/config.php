<?php
class DatabaseConfig {
    private $host;
    private $username;
    private $password;
    private $database;
    private $connection;

    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function connect() {
        try {
            $this->connection = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->connection;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function closeConnection() {
        $this->connection = null;
    }

    public function insertData($tableName, $data) {
        try {
            $columns = implode(", ", array_keys($data));
            $values = ":" . implode(", :", array_keys($data));

            $query = "INSERT INTO $tableName ($columns) VALUES ($values)";
            $statement = $this->connection->prepare($query);
            $statement->execute($data);
        } catch (PDOException $e) {
            die("Insert failed: " . $e->getMessage());
        }
    }

    public function updateData($tableName, $data, $condition) {
        try {
            $updateString = '';
            foreach ($data as $key => $value) {
                $updateString .= "$key=:$key, ";
            }
            $updateString = rtrim($updateString, ", ");

            $query = "UPDATE $tableName SET $updateString WHERE $condition";
            $statement = $this->connection->prepare($query);
            $statement->execute($data);
        } catch (PDOException $e) {
            die("Update failed: " . $e->getMessage());
        }
    }

    public function deleteData($tableName, $condition) {
        try {
            $query = "DELETE FROM $tableName WHERE $condition";
            $statement = $this->connection->prepare($query);
            $statement->execute();
        } catch (PDOException $e) {
            die("Delete failed: " . $e->getMessage());
        }
    }

    public function getAllData($tableName) {
        try {
            $query = "SELECT * FROM $tableName";
            $statement = $this->connection->prepare($query);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    }
}


$host = "localhost";
$username = "root";
$password = "";
$database = "asm_php";

$databaseConfig = new DatabaseConfig($host, $username, $password, $database);
$connection = $databaseConfig->connect();

 ?>