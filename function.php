<?php

// Condition longueur entre 6 et 10
function validerettester($mdp) {
if (strlen($mdp) > 10 || strlen($mdp) < 6) {
return "Erreur ! Il faut entrer un mot de passe valide, entre 6 et 10 caractères.";
}

// Salt
$salt = "Special";

// Concaténation
$mdpsalt = $mdp . $salt;

// cryptage
$mdpchiffré = password_hash($mdpsalt, PASSWORD_DEFAULT);

if (preg_match('/[A-Z]/', $mdp)  && preg_match('/[a-z]/', $mdp) && preg_match('/[0-9]/', $mdp)) {
return "Le niveau de mot de passe est fort. </br> Salt: $mdpsalt, </br> Mot de passe chiffré: $mdpchiffré";
} 

elseif (preg_match('/[a-z]/', $mdp) && preg_match('/[A-Z]/', $mdp)) {
return "Le niveau de mot de passe est passable, vous pouvez d'ajouter des chiffres. </br> MDP Salt: $mdpsalt, </br> Mot de passe chiffré: $mdpchiffré";
} 

else  {
return "Le niveau de mot de passe est faible. vous pouvez ajouter des lettres en majuscules ou minuscules et des chiffres, </br> Salt: $mdpsalt, </br> Mot de passe chiffré: $mdpchiffré";
}
}


?>