<?php
// Création des variables

$naha = 0;
$onizuka = 'Mi no sabes';
$Béné = "Hello, world!";
$Audd = false;

// Génération du tableau HTML

echo '<table border="2" >';
// Entete du tableaux avec les valeurs demandés

echo '<thead><tr><th>Type</th><th>Nom</th><th>Valeur</th></tr></thead>';
// Corps du tableau avec les caractérisques associés

echo '<tbody>';
echo '<tr><td>Booléen</td><td> naha</td><td>' . ($naha ? 'true' : 'false') . '</td></tr>';
echo '<tr><td>Entier</td><td> onizuka</td><td>' . $onizuka . '</td></tr>';
echo '<tr><td>Chaîne de caractères</td><td> Béné</td><td>' . $Béné . '</td></tr>';
echo '</tbody>';
echo '</table>';
?>


