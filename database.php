<?php

require_once('db/config.php');

class Database
{
    // Attribute to hold the current connection
    private $conn;

    // Constructor to create the database object and connection
    public function __construct()
    {
        $this->connect();
    }

    // Method to allow connecting to the database
    protected function connect()
    {
        $config = DATABASE;
        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        );

        try {
            // Take configuration information from the config file
            $this->conn = new PDO(
                'mysql:host=' . $config['HOST'] . ';dbname=' . $config['DBNAME'] . ';port=' . $config['PORT'],
                $config['USER_NAME'],
                $config['PASSWORD'],
                $options
            );
        } catch (PDOException $e) {
            // Show error if we didn't manage to connect correctly
            die("Chyba pripojenia: " . $e->getMessage());
        }
    }

    // Getter na získanie pripojenia
    public function getConnection()
    {
        return $this->conn;
    }
}
