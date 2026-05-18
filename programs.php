<?php

error_reporting(E_ALL); //zapnutie chybových hlásení
ini_set("display_errors", "On");
require_once('database.php');
class Programs extends Database
{
    protected $connection;

    public function __construct()
    {
        $this->connect();
        $this->connection = $this->getConnection();
    }

    public function getAllPrograms()
    {
        $sql = "SELECT * FROM programs ";
        try {
            $statement = $this->connection->prepare($sql);
            $getAll = $statement->execute();
            http_response_code(200);
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (\Exception $exception) {
            http_response_code(500);
            return "Error!";
        }
    }
}
