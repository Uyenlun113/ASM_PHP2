<?php
namespace App\Model;

use PDO;

class Db
{
    function getConnect()
    {
        $connect = new PDO(
            "mysql:host=" . DBHOST
            . ";dbname=" . DBNAME
            . ";charset=" . DBCHARSET,
            DBUSER,
            DBPASS
        );
        return $connect;
    }
    function getData($query, $getAll = true)
    {
        $conn = $this->getConnect();
        $stmt = $conn->prepare($query);
        $stmt->execute();
        if ($getAll) {
            return $stmt->fetchAll();
        }
        return $conn->lastInsertId();
    }
    public function getLastInsertId()
    {
        $conn = $this->getConnect();
        $lastInsertId = $conn->lastInsertId();
        return $lastInsertId;
    }

}

?>