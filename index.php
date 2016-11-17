<?php
//exo 1
$age = 30; 

if ($age > 18) 
{
	echo "Vous êtes majeur !";
}
else
{
	echo "Vous êtes mineur !";
}

//exo 2
echo "<br>";
$IsEasy = True;

if ($IsEasy = True) {
 	echo "C'est Facile !!";
 } 
else 
{
	echo "C'est difficile !!";
}

//exo 3 

/*En fonction de l'âge et du genre afficher la phrase correspondante :
- **Vous êtes un homme et vous êtes majeur**
- **Vous êtes un homme et vous êtes mineur**
- **Vous êtes une femme et vous êtes majeur**
- **Vous êtes une femme et vous êtes mineur**  */

$age = 30; 
$genre = "homme" || "femme"; 

if (($genre == "homme") && ($age >= 18)) 
{	
	echo "Vous êtes un homme et vous êtes majeur !";
}
elseif (($genre == "homme") && ($age < 18)) 
{
	echo "Vous êtes un homme et vous êtes mineur!";
}
elseif (($genre == "femme") && ($age >= 18)) 
{
	echo "Vous êtes une femme et vous êtes majeur !";
}
elseif (($genre == "femme") && ($age < 18)) 
{
	echo "Vous êtes une femme et vous êtes mineur !";
}

//exo 4
echo "<br>";
$magnitude = 2;

if ($magnitude == 1) {
	echo "Micro-séisme impossible à ressentir.";
}
elseif ($magnitude == 2) {
	echo "Micro-séisme impossible à resentir mais enregistrable par les sismomètres.";
}
elseif ($magnitude == 3) {
	echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
}
elseif ($magnitude == 4) {
	echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
}
elseif ($magnitude == 5) {
	echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction.";
}
elseif ($magnitude == 6) {
	echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.  ";
}
elseif ($magnitude == 7) {
	echo " Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
}
elseif ($magnitude == 8) {
	echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
}
elseif ($magnitude == 9) {
	echo "Séisme capable de tout détruire sur une très vaste zone.  ";
}

//exo 4 bis : 
echo "<br>";
$magnitude = 1;
switch ($magnitude) {
	case 1:
		echo "Micro-séisme impossible à ressentir.";
		break;
	case 2:
		echo "Micro-séisme impossible à resentir mais enregistrable par les sismomètres.";
		break;
	case 3:
		echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
		break;
	case 4:
		echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
		break;
	case 5:
		echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction.";
		break;
	case 6:
		echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.  ";
		break;
	case 7:
		echo " Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
		break;
	case 8:
		echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
		break;
	case 9:
		echo "Séisme capable de tout détruire sur une très vaste zone.  ";
		break;
	
}

//exo 5 

echo "<br>";
$maVariable = "homme";

if ($maVariable == "homme") {
	echo "C'est un développeur !";
}
else {
	echo "c'est une développeuse ! ";
}

//exo 6

echo "<br>";
$monAge = 18; 

if ($monAge >= 18) {
	echo "Tu es majeur !";
}
else {
	echo "Tu n'est pas majeur !";
}

//exo 7
echo "<br>";
$maVariable = True; 

if ($maVariable == True) {
 	echo "c'est Ok !";
 } 
 else{
 	echo "c'est pas Ok !";
 }

 //exo 8
 echo "<br>";
 if ($maVariable) {
 	echo "C'est Ok !";
 }
 else {
 	echo "C'est pas bon !";
 }








 ?>