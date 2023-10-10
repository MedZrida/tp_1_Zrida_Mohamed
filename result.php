<?php

require_once("function.php");
var_dump($_POST);

// affectation
if ($_POST) {
$mdp = $_POST['mdp'];

// test si vide
if (empty($mdp)) {
echo "</br> Il faut entrer un mot de passe.";

} else {
$resultat = validerettester($mdp);
echo "</br>$resultat"; }
}

?>
