<?php

error_reporting(E_ALL); //zapnutie chybových hlásení
ini_set("display_errors", "On");
require_once('database.php');

// Inherit from the teacher's Database class
class Programs extends Database
{
    // Store connection info
    protected $connection;

    // Constructor to create the Programs instance
    public function __construct()
    {
        $this->connect();
        $this->connection = $this->getConnection();
    }

    // Get all the programs from the database
    public function getAllPrograms()
    {
        $sql = "SELECT * FROM programs ";

        // If there are any errors in trying to get programs, catch them safely
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
