<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Partie 4 Exercice 3</title>
  </head>
  <body>
    <?php
      $firstString='Salut,';
      $secondString='ça va ?';
      function concatString($var,$var1){
        return $var.''.$var1;
      }
      echo concatString($firstString,$secondString);
     ?>
  </body>
</html>
