<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
</head>
<body>
<?php
// exo 1
echo "exo 1";
echo '<br>';
$monNombre = 0;
do {
  echo $monNombre;
  $monNombre++;
}
while ($monNombre != 10);


echo '<br>';
echo '<br>';
// exo 2
echo "exo 2";
echo '<br>';
$nb1 = 0;
$nb2 = 90;
do {
  echo $nb1;
  echo '<br>';
  $nb3 = ($nb1 * $nb2);

  echo '<br>';
  $nb1++;
  echo $nb1;
}
while($nb1 < 20);

echo '<br>';
echo '<br>';
// exo 3
echo "exo 3";
echo '<br>';
$nbx1 = 100;
$nbx2 = 52;
do {
$nbx3 = ($nbx1 * $nbx2);

$nbx1--;
echo '<br>';
echo $nbx1;
}
while($nbx1 <= 10);

echo '<br>';
echo '<br>';
// exo 4
echo "exo 4";
echo '<br>';
$nbh = 1;
do {
  echo $nbh;
$nbh1 = ($nbh / 2);
$result = ($nbh + $nbh1);

}
while($nbx1 < 10);

echo '<br>';
echo '<br>';
// exo 5
echo "exo 5";
echo '<br>';
$nbg = 1;
do {
    $nbg++;
  echo "On y arrive presque";

}
while($nbg != 15);

do {
$nbc ++ 15;
  echo "On tient le bon bout";
}

echo '<br>';
echo '<br>';
// exo 6
echo "exo 6";
echo '<br>';
$nbj = 20;
do {
  $nbj--;
  echo "C'est presque bon";
}
while($nbj != 0);

echo '<br>';
echo '<br>';
// exo 7
echo "exo 7";
echo '<br>';


?>
</body>
</html>
