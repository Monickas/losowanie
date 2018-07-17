<!DOCTYPE html>
<html lang=pl dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title></title>
  </head>
  <body>
    <div id="container">
      <form action="losowanie.php" method="post">
        Rzuć monetą: <input type="radio" name="moneta" value="orzeł">Orzeł
        <input type="radio" name="moneta" value="reszka">Reszka
        <input type="submit" name="losuj" value="Losuj!">
  </body>
  <?php if (isset($_POST["losuj"])) {
            if (isset($_POST["moneta"]))
            {
              losowanie();
            } else{
              echo "Musisz zaznaczyć!";
            }
          }
  ?>
</html>
