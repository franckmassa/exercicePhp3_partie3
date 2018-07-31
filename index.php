<?php
$number1 = 100;
$number2 = rand(1,100);
 ?>
 <!DOCTYPE html>
 <html lang="fr">
   <head>
     <meta charset="utf-8" />
     <title>Exercice3</title>
   </head>
   <body>
     <p>
<?php
//Décrémentation de la  premère variable tant qu'elle n'est pas inférieure ou égale à 10
while($number1 >= 10){
  echo $number1 * $number2 . '<br/>';
  $number1--;
}
 ?>
     </p>
   </body>
 </html>
