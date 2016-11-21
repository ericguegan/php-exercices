<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
</head>
<body>
<?php
// exo1 et 2
$nom = "Guegan";
$prenom = "Eric";
$age = 48;
echo ("mon nom est : " . $nom . ", mon prenom est : " . $prenom . ", mon age est : " . $age . "ans");
 ?>
<br />
<br />
<?php
// exo 3
$km = 1;
echo(" Le nombre de kilomètres est : " . $km);
echo '<br>';
$km = 3;
echo(" Le nombre de kilomètres est : " . $km);
echo '<br>';
$km = 125;
echo(" Le nombre de kilomètres est : " . $km);
echo '<br>';
echo '<br>';
// exo 4
$nom = "Eric";
$nombre = 5;
$decim = 2.2;
$bool = true;
echo("mastring = " . $nom . " ;");
echo("monentier  = " . $nombre . " ;");
echo("monfloat = " . $decim . " ;");
echo("monboolean = " . $bool . " ;");
echo '<br>';
echo '<br>';
// exo 5
$integ = "";
echo($integ);
$integ = 128;
echo($integ);
echo '<br>';
// exo 6
$myname = "thomas";
echo("Bonjour " . $myname  . " , comment vas tu ?");
echo '<br>';
// exo 7
$nom = "dupond";
echo("Bonjour " . $nom . " " . $prenom . ", tu as " . $age . "ans");
echo '<br>';
// exo 8
$nb1 = 3 + 4;
$nb2 = 5 * 20;
$nb3 = 45 / 5;
echo($nb1 . " & " . $nb2 . " & " .$nb3);
echo '<br>';


 ?>
</body>
</html>
