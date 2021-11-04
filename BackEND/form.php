<!DOCTYPE html>
<html>
  <head>
      <title>Reservering</title>
      <meta charset="UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="../Website/header-footer/header.footer.css" />
      <link rel="stylesheet" href="form.css"/>
      <?php
      require_once '../Website/Classes/PageLayout.php';
      $layout = new PageLayout();
      ?>
  </head>
  <body>
    <?php
    $layout->getNavbarHead("../Website/Homepage/", "", "../Website/Informatiepaging/", "../Website/Tarievenpagina/", "../Website/InlogPagina/");
    ?>
    <form  method="POST">
      <label for="name">Voornaam</label>
      <input type="text" name="Voornaam" required/>
      <label for="name">Achternaam</label>
      <input type="text" name="Achternaam" required/>
      <label for="quantity">Aantal fietsen</label>
      <input type="number" id="quantity" name="fietsen" min="1" max="20">
      <label for="date">Datum en tijd:</label>
      <input type="datetime-local" id="date" name="datum">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email">
      <input type="submit" value="Verzenden"/>
    </form>

    <?php
    $layout->getNavbarFoot();
    if (isset($_POST['Voornaam'])) {
      require "save.php";
    }
    ?>
  </body>
</html>