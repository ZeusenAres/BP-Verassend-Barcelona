<?php

$host = "127.0.0.1";
$database = "fietsverhuur";
$user = "root";
$password = "";

$pdo = new PDO("mysql:host=$host;dbname=$database", $user, $password);


$sql = $pdo->query("SELECT * FROM reserveringennorm");
while($row = $sql->fetch()) {
    echo $row["Voornaam"];
};


?>