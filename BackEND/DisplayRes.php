<!DOCTYPE html>
<html>
<head>
<title>Show reservation</title>

</head>
<body>
    <table>

    </table>
        <tr>
            <th>Voornaam</th>
            <th>Achternaam</th>
            <th>fietsen</th>
            <th>datum</th>
            <th>email</th>
        </tr>
<?php

class Verbinding {


$dbhost = "127.0.0.1";
$dbname = "fietsverhuur";
$user = "root";
$pass = "";
$charset = "utf8mb4";
$dsn = "mysql:host=$dbhost;dbname=$dbname;charset=$charset";
$options = [

            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        
            PDO::ATTR_EMULATE_PREPARES   => false
        
        ];

$conn = new PDO($dsn, $user, $pass, $options);
if ($conn-> connect_error) {
    die("Connection failed:". $conn-> connect_error);
}

$sql = "SELECT Voornaam, Achternaam, fietsen, datum, email from reserveringennorm";
$result = $conn-> query($sql);

if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc) {
        echo "<tr><td>". $row["Voornaam"] . "</td><td>" . $row["Achternaam"] . "<tr><td>". $row["fietsen"] . "</td><td>" . "<tr><td>". $row["datum"] . "</td><td>" . "<tr><td>". $row["email"] . "</td><td>";
    }
    echo "</table>";
}
else {
    echo "0 result";
}

$conn-> close;
}
?>

</body>
</html>