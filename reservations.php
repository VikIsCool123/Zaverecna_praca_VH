<?php

error_reporting(E_ALL); //zapnutie chybových hlásení
ini_set("display_errors", "On");
require_once('database.php');
// Inherit from the teacher's Database class
class Reservations extends Database
{
    // Store connection info
    protected $connection;

    // Constructor to create the Reservations objects
    public function __construct()
    {
        $this->connect();
        $this->connection = $this->getConnection();
    }

    // Get all info of a reservation based on the reservation id
    public function getReservation($id)
    {
        $sql = "SELECT id, user_id, program_id, DATE_FORMAT(time,'%Y-%m-%d') AS time FROM reservations  WHERE id=(:id)";
        try {
            $statement = $this->connection->prepare($sql);
            $get = $statement->execute(array(
                ':id' => $id
            ));
            http_response_code(200);
            return $statement->fetch(PDO::FETCH_ASSOC);
        } catch (\Exception $exception) {
            http_response_code(500);
            return "Error!";
        }
    }

    // Get all reservations
    public function getAllReservations()
    {
        $sql = "SELECT reservations.id AS reservationId, user_id, program_id, DATE_FORMAT(time,'%Y-%m-%d') AS time, name FROM reservations JOIN programs ON reservations.program_id = programs.id";
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

    // Get all user's reservations based on the user ID
    public function getUserReservations($user_id)
    {
        $sql = "SELECT * FROM reservations JOIN programs ON reservations.program_id = programs.id  
                  WHERE user_id= (:user_id)";
        try {
            $statement = $this->connection->prepare($sql);
            $getAll = $statement->execute(array(
                ':user_id' => $user_id
            ));
            http_response_code(200);
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (\Exception $exception) {
            http_response_code(500);
            return "Error!";
        }
    }

    // Create a new reservation
    public function insertReservation($user_id, $program_id, $time)
    {
        // Is chosen date < current date
        // This means the date is in the past
        // new DateTime() creates the current datetime
        if (new DateTime($time) < new DateTime()) {
            http_response_code(500);
            return "This date is invalid! 6767676767";
        }

        $sql = "INSERT INTO reservations (user_id, program_id, time)
                  VALUES (:user_id, :program_id, :time)";
        try {
            $statement = $this->connection->prepare($sql);
            $insert = $statement->execute(array(
                ':user_id' => $user_id,
                ':program_id' => $program_id,
                ':time' => $time
            ));
            http_response_code(200);
            return null;
        } catch (\Exception $exception) {
            http_response_code(500);
            return "Error!";
        }
    }

    // Edit a reservation
    public function updateReservation($reservation_id, $program_id, $time)
    {
        if (new DateTime($time) < new DateTime()) {
            http_response_code(500);
            return "This date is invalid! 6767676767";
        }

        $sql = "UPDATE reservations
                  SET program_id = :program_id, time = :time
                  WHERE id = :reservation_id";
        try {
            $statement = $this->connection->prepare($sql);
            $update = $statement->execute(array(
                ':reservation_id' => $reservation_id,
                ':program_id' => $program_id,
                ':time' => $time
            ));
            http_response_code(200);
            return null;
        } catch (\Exception $exception) {
            http_response_code(500);
            return "Error!";
        }
    }

    // Delete a reservation based on the reservation id
    public function cancelReservation($reservation_id)
    {
        $sql = "DELETE FROM reservations
                  WHERE id = :reservation_id";
        try {
            $statement = $this->connection->prepare($sql);
            $cancel = $statement->execute(array(
                ':reservation_id' => $reservation_id,
            ));
            http_response_code(200);
            return null;
        } catch (\Exception $exception) {
            http_response_code(500);
            return "Error!";
        }
    }
}
