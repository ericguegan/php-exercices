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
function vrai(){
return true;
  }


  // exo 2
  echo "exo 2";
  echo '<br>';
function chaine(){

  echo "le soleil brille";

}
chaine();

echo '<br>';
// exo 3
echo "exo 3";
echo '<br>';

function bou(){
  $ch1 = "je m'appelle ";
  $ch2 = "Eric";
  echo( $ch1 . $ch2 );
}
bou();

echo '<br>';
// exo 4
echo "exo 4";
echo '<br>';
function nomb(){
  $ch1 = 65;
  $ch2 = 52;
  if ($ch1 > $ch2){
    echo "Le premier nombre est plus grand";
      }
      elseif ($ch1 < $ch2) {
      echo "Le premier nombre est plus petit";
      }
      else {
      echo "Les deux nombres sont identiques";
      }
}
nomb();

echo '<br>';
// exo 5
echo "exo 5";
echo '<br>';
function conc(){
  $chx1 = 215;
  $chx2 = "vroumvroum";
  echo( $chx1 . " " . $chx2 );
      }
conc();

echo '<br>';
// exo 6
echo "exo 6";
echo '<br>';
function hello() {
  $nom = "Guegan";
  $prenom = "Eric";
  $age = "48";
  echo ("Bonjour " . $nom . " " . $prenom . ", tu as " . $age . "ans");
}
hello();

echo '<br>';
// exo 7
echo "exo 7";
echo '<br>';
function genreAge(){
  $age = 78;
  $genre = "femme";
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

}
genreAge();

echo '<br>';
// exo 8
echo "exo 8";
echo '<br>';
function triNombre(){
  $nb1 = 18;
  $nb2 = 52;
  $nb3 = 99;
  $nb4 = ($nb1 + $nb2 + $nb3);
  echo $nb4;
}
triNombre();








?>
</body>
</html>
