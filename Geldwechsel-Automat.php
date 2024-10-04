<html>
<head>
  <meta charset="utf-8" />
</head>
<header>

    <p>Herzlich willkommen beim Geldwechsel-Automaten!</p>
  </header>

<body>
<!--] [-->
 <form action="Geldwechsel.php" method="get">
 Ihr Geldbetrag bitte: <input type="decimal" name="name">
<input type="submit">
</form>

<br>
<?php

$gb = $_GET["name"]; //Geldbetrag
$muenzezahl = 8;
$meineWaehrung="EUR";
//Münzen
$m1 = 2.0; $m2 = 1.0; $m3 = 0.5; $m4 = 0.2; $m5 = 0.1; $m6 = 0.05; $m7 = 0.02; $m8 = 0.01;
function GWA($input) //Geldwechsel-Automat
{
  $change_often=0;
  $change_rest=0;
  $muenze=0;
  $eingabe= (float) $input;
  $ausgabe="";
  global $muenzezahl, $m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8;
  for ($x = 1; $x<=$muenzezahl; $x++)
  {
    if ($x==1) $muenze=$m1;
    if ($x==2) $muenze=$m2;
    if ($x==3) $muenze=$m3;
    if ($x==4) $muenze=$m4;
    if ($x==5) $muenze=$m5;
    if ($x==6) $muenze=$m6;
    if ($x==7) $muenze=$m7;
    if ($x==8) $muenze=$m8;

    if ($eingabe >= $muenze)
    {
      $change_often = (int) ($eingabe / $muenze); //Anzahl der Muenzen
      $change_rest = fmod ($eingabe, $muenze); //Restwert/Modulo
      echo $change_often," x ", $muenze, " € ", '<br>'  ;
      $eingabe=$change_rest;
    }



    $change=0;$muenze=0;
  }
  }
  GWA($gb);

 ?>


</body>
</html>
