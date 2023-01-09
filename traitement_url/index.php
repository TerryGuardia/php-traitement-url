<?php
$url = "https://darkcity.fr/blog/2015/08/16/bac-a-sable-php/";
$array_1 = foo1($url);
$resultat = foo2($array_1);
$type = foo3($resultat);

function foo1($url)
{
    $url = str_replace('https://', '', $url);
    $elements = array();
    $elements = explode('/', $url);

    foreach ($elements as $element) {

        if (empty($element)) {
            continue;
        }
    }
    return $elements;
}
print_r($array_1);
echo "<br>";

function foo2($tableau)
{
    $resultat = array();
    foreach ($tableau as $element) {
        if (is_numeric($element)) {
            $resultat[$element] = 'int';
        } else {
            $resultat[$element] = 'string';
        }
    }
    return $resultat;
}
print_r($resultat);
echo "<br>";

function foo3($tableau)
{
    // On crée trois tableaux vides
    $nombres = array();
    $strings = array();

    // On parcourt chaque élément du tableau
    foreach ($tableau as $element) {
        // On utilise la fonction is_numeric pour vérifier si l'élément est un nombre
        if (is_numeric($element)) {
            // Si c'est un nombre, on l'ajoute au tableau des nombres
            $nombres[] = $element;
        } elseif (is_string($element)) {
            // Si c'est une chaîne de caractères, on l'ajoute au tableau des chaînes de caractères
            $strings[] = $element;
        }
    }

    return array(
        'nombres' => $nombres,
        'strings' => $strings
    );
}
print_r($type);
