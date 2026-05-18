<?php

error_reporting(E_ALL); //zapnutie chybových hlásení
ini_set("display_errors", "On");
require_once('database.php');
class Users extends Database
{
    protected $connection;

    public function __construct()
    {
        $this->connect();
        $this->connection = $this->getConnection();
    }

    public function getAllUsers()
    {
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

    public function getUserById($id)
    {
        $sql = "SELECT * FROM users  WHERE id=(:id)";
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

    public function existsUser($email)
    {
        $sql = "SELECT * FROM users  WHERE email=(:email)";
        try {
            $statement = $this->connection->prepare($sql);
            $get = $statement->execute(array(
                ':email' => $email
            ));
            $user = $statement->fetch(PDO::FETCH_ASSOC);
            if (!$user) {
                http_response_code(200);
                return false;
            }
            http_response_code(200);
            return true;
        } catch (\Exception $exception) {
            http_response_code(500);
            return "Error:" . $exception->getMessage();
        }
    }

    public function getUser($email)
    {
        $sql = "SELECT * FROM users  WHERE email=(:email)";
        try {
            $statement = $this->connection->prepare($sql);
            $get = $statement->execute(array(
                ':email' => $email
            ));
            $user = $statement->fetch(PDO::FETCH_ASSOC);
            if (!$user) {
                http_response_code(404);
                return "Error: user doesn't exist";
            }
            http_response_code(200);
            return $user;
        } catch (\Exception $exception) {
            http_response_code(500);
            return "Error:" . $exception->getMessage();
        }
    }

    public function insertUser($name, $date, $telephone, $email, $password)
    {
        // Is chosen date > current date
        // This means the date is in the FUTURE
        // new DateTime() creates the current datetime
        if (new DateTime($date) > new DateTime()) {
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

    public function updateUser($id, $name, $date, $telephone, $email, $password)
    {
        // Cannot create a user born in the future
        // input date > current date, then error
        if (new DateTime($date) > new DateTime()) {
            http_response_code(500);
            return "This date is invalid! 6767676767";
        }

        $sql = "UPDATE users
                  SET name = :name, date_of_birth = :date, telephone = :telephone, password = :password
                  WHERE id = :id";
        try {
            $statement = $this->connection->prepare($sql);
            $update = $statement->execute(array(
              ':name' => $name,
              ':date' => $date,
              ':telephone' => $telephone,
              ':password' => $password,
              ':id' => $id
            ));
            http_response_code(200);
            return null;
        } catch (\Exception $exception) {
            http_response_code(500);
            return "Error:" . $exception->getMessage();
        }
    }

    public function deleteUser($id)
    {

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
