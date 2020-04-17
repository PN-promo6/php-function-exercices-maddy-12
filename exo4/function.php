<?php
//Recursive function
//Vous devez écrire une fonction Sum qui prend 1 array en paramètre.
// Cette méthode doit être capable de faire la somme des entiers de cet array.
// Attention l’array peut contenir d’autres array.

function sum($numbers)
{
    $sum = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        $currentElement = $numbers[$i];

        //Si c'est un tableau, on appelle la methode "sum" pour traiter le sous-tableau
        if (is_array($currentElement)) {
            //Il fait l'addition dans le sous-tableau puis l'additionne aux autres elements du big tableau
            $sum = $sum + sum($currentElement);
        } else {
            $sum = $sum + $currentElement;
        }
    }
    return $sum;
}
$numbers = array(array(5, 7, 8), 9, 5, 3, 1);
$total = sum($numbers);
echo $total;
