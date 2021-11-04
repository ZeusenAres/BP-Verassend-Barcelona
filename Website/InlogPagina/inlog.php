<?php
require_once ('LoginController.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Log in pagina</title>
    <link rel="stylesheet" type="text/css" href="Inlog.css" />
    <link rel="stylesheet" type="text/css" href="../header-footer/header.footer.css" />
</head>
<body>
<div class="mordor">
    <div class="container">
        <section id="content">
            <form action="index.php" method="post">
                <h1>Inloggen voor medewerkers!</h1>
                <div class="Gebruikersnaam">
                    <input type="text" placeholder="Gebruikersnaam" required="" id="Gebruikersnaam" />
                </div>
                <div class="Wachtwoord">
                    <input type="password" placeholder="Wachtwoord" required="" id="Wachtwoord" />
                </div>
                <div class="Button">
                    <input type="submit" value="Log in" id="Button" />
                </div>
            </form>
        </section>
    </div>
</div>
</body>
<?php
if (isset($_POST['login']))
{
    try
    {
        $user = $_POST['user'];
        $loginController = new LoginController();
        if ($loginController->Login($user, $_POST['password']))
        {
            echo 'ingelogd<br/>';
            $_SESSION['user'] = $user;
        }
        else
        {
            echo 'ongeldig user id of wachtwoord<br/>';
            unset( $_SESSION['user']);
        }
    }

    catch (Exception $ex)
    {
        echo $ex->getMessage() . "<br/>";
    }
}
?> 

</html>
