<?php
  error_reporting(E_ALL); //zapnutie chybových hlásení
  ini_set("display_errors", "On");
  require_once('database.php');
  class Users extends Database {
      protected $connection;

      public function __construct() {
          $this->connect();
          $this->connection = $this->getConnection();
      }

      public function getAllUsers() {
          $sql = "SELECT * FROM users";
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

      public function getUser($email) {
          $sql = "SELECT * FROM users  WHERE email=(:email)";
          try {
              $statement = $this->connection->prepare($sql);
              $get = $statement->execute(array(
                  ':email' => $email
              ));
              http_response_code(200);
              return $statement->fetch(PDO::FETCH_ASSOC);
          } catch (\Exception $exception) {
              http_response_code(500);
              return "Error!";
          }
      }

      public function insertUser($name, $date, $telephone, $email, $password) {
        // Is chosen date > current date
        // This means the date is in the FUTURE
        // new DateTime() creates the current datetime
        if (new DateTime($date) > new DateTime()){
          http_response_code(500);
          return "This date is invalid! 6767676767";
        }
        
          $sql = "INSERT INTO users (name, date_of_birth, telephone, email, password)
                  VALUES (:name, :date_of_birth, :telephone, :email, :password)";
          try {
              $statement = $this->connection->prepare($sql);
              $insert = $statement->execute(array(
                  ':name' => $name,
                  ':date_of_birth' => $date,
                  ':telephone' => $telephone,
                  ':email' => $email,
                  ':password' => $password
              ));
              http_response_code(200);
              return null;
          } catch (\Exception $exception) {
              http_response_code(500);
              return "Error!";
          }
      }

      public function deleteUser($id) {

          $sql = "DELETE FROM users
                  WHERE id = :id";
          try {
              $statement = $this->connection->prepare($sql);
              $cancel = $statement->execute(array(
                  ':id' => $id,
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