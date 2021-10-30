<!DOCTYPE html>
<html>
  <head>
    <title>Reservering</title>
  </head>
  <body>

    
    <form  method="POST">
      <label for="name">Voornaam</label>
      <input type="text" name="Voornaam" required/>
      <label for="name">Achternaam</label>
      <input type="text" name="Achternaam" required/>
      <label for="quantity">Aantal fietsen</label>
      <input type="number" id="quantity" name="fietsen" min="1" max="20">
      <label for="date">Datum en tijd:</label>
      <input type="datetime-local" id="date" name="datum">
  
      <input type="submit" value="Verzenden"/>
    </form>

    <?php
    
    if (isset($_POST['Voornaam'])) {
      require "save.php";
    }
    ?>
  </body>
</html>