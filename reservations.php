<?php
  error_reporting(E_ALL); //zapnutie chybových hlásení
  ini_set("display_errors", "On");
  require_once('database.php');
  class Reservations extends Database {
      protected $connection;

      public function __construct() {
          $this->connect();
          $this->connection = $this->getConnection();
      }

      public function getAllReservations() {
          $sql = "SELECT * FROM reservations JOIN programs ON reservations.program_id = programs.id";
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

      public function getUserReservations($user_id) {
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

      public function insertReservation($user_id, $program_id, $time) {
        if (new DateTime($time) < new DateTime()){
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
  }
?>