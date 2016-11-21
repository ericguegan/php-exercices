<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
</head>
<body>
<?php
// exo1
$age = 15;
echo ($age);
echo '<br>';
if($age >= 18 ){
echo "Vous êtes majeur";
}
else {echo "Vous êtes mineur";
}
echo '<br>';
//exo2
$IsEasy = false;
if($IsEasy === true){
  echo "C'est facile!!";
}
else {
  echo "C'est difficile !!!.";
}
echo '<br>';
// exo 3
$age = 12;
$genre = "homme";
if($genre == "homme" AND $age >= 18){
  echo "Vous êtes un homme et vous êtes majeur";
}
elseif($genre == "homme" AND $age <18){
  echo "Vous êtes un homme et vous êtes mineur";
}
elseif($genre == "femme" AND $age >= 18){
  echo "Vous êtes une femme et vous êtes majeur";
}
else {
  echo "Vous êtes une femme et vous êtes mineur";
}
echo '<br>';
echo '<br>';
// exo 4
$magnitude = 9;
echo ($magnitude);
echo '<br>';
$clef = array(1 => 'Micro-séisme impossible à ressentir.', 2 => 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.', 3 => ' Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.', 4 => 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.', 5 => 'Séisme capable d engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.', 6 => 'Fort séisme capable d engendrer des destructions majeures sur une large distance 180 km autour de l épicentre.', 7 => 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.', 8 => 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.', 9 => 'Séisme capable de tout détruire sur une très vaste zone.');
$valeur = array_values($clef);

foreach ($clef as $magnit => $value) {
  if ($magnitude == $magnit) {
    echo ($value);
  }

}
echo '<br>';
echo '<br>';
// exo 5
if (maVariable != 'homme'){
  echo "c'est une développeuse !!!";
}
else {
  echo "C'est un développeur !!!";
}

echo '<br>';
echo '<br>';
// exo 6
$monAge = 19;
if ($monAge >= 18){
  echo "tu es majeur";
}
else {
  echo "tu n'es pas majeur";
}

echo '<br>';
echo '<br>';
// exo 7
$maVariable = true;
if ($maVariable == false){
  echo "c'est pas bon";
}
else {
  echo "c'est ok";
}
echo '<br>';
echo '<br>';
// exo 8
if ($maVariable){ $maVariable = $vrai;
echo "c'est ok";
} else {$maVariable = $faux;
echo "c'est pas bon";
}












?>
</body>
</html>
