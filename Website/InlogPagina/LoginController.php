<?php

class LoginController
{
    //....


public function __construct() // database connectie
{
    $host = '127.0.0.1';
    $database = 'login';
    $user = 'root';
    $password = '';

    $this->connection = new PDO("mysql:host=$host;dbname=$database", $user, $password);



           
}

// Hier wordt de user en password gevalideert
public function Login(string $user, $password) : bool
{
    $this->ValidateUser($user);
    $this->ValidatePassword($password);
    return $this->CheckPassword($user, $password);
}

private function ValidateUser(string $user)
{
    if (strlen(trim($user)) == 0)
    {
        throw new Exception('Geef een usernaam op');
    }
}

private function ValidatePassword(string $password)
{
    if (strlen(trim($password)) == 0)
    {
        throw new Exception('Geef een wachtwoord op');
    }
}

// hier wordt er gekeken of er een match is tussen de ingevoerde ww en database
private function CheckPassword(string $user, string $password) : bool
{
    $statement = $this->connection->Prepare
            ("select password from $this->table where id like :id");
    $statement->execute(
        [
          ":id" => $user
        ]);
    $result = $statement->fetch();
    return $result != null && password_verify($password,$result['password']);
}




private PDO $connection;
private string $table ="info";
}
