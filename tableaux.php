<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
</head>
<body>
<?php
// exo 1
echo "exo 1";


$arrayTab = array('janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'decembre');

echo '<br>';
 echo implode(", ", $arrayTab) ;
 echo '<br>';
// exo 2
echo "exo 2";
echo '<br>';

echo ($arrayTab[2]);
// exo 3
echo '<br>';
echo "exo 3";
echo '<br>';
echo ($arrayTab[4]);
// exo 4
echo '<br>';
echo "exo 4";
echo '<br>';
($arrayTab[7] = août);
echo ($arrayTab[7]);
// exo 5
echo '<br>';
echo "exo 5";
echo '<br>';
$hdf = array(02 => 'Aisne', 59 => 'Nord', 60 => 'Oise', 62 => 'Pas-de-Calais', 80 => 'Somme');
$valeur = array_values($hdf);
foreach ($hdf as $num => $dep) {
  echo "=> " . $num . " : " . $dep;
}
// exo 6
echo '<br>';
echo "exo 6";
echo '<br>';
echo ($hdf[59]);

// exo 7
echo '<br>';
echo "exo 7";
echo '<br>';
($hdf[51] = 'Marne');
foreach ($hdf as $num => $dep) {
  echo "=> " . $num . " : " . $dep;
}
// exo 8
echo '<br>';
echo "exo 8";
echo '<br>';
foreach ($arrayTab as $numero => $mois) {
  echo $mois . ", ";
}
// exo 9
echo '<br>';
echo "exo 9";
echo '<br>';

foreach ($hdf as $num => $dep) {
  echo $num . " : " . $dep . ", ";
}
echo "exo 10";
echo '<br>';

foreach ($hdf as $num => $dep) {
  echo "Le département " . $dep . " a le numero : " . $num . '<br>';
}




?>
</body>
</html>
