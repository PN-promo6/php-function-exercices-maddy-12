
<?php
//Il existe de nombreux algorithmes de tri: http://lwh.free.fr/pages/algo/tri/tri.htm
// Vous devez écrire une fonction CustomSort qui prend 1 array d’entier en paramètre.
// Votre fonction doit retourner le contenu du tableau mais trié par ordre croissant.
// Vous n’avez pas le droit d’utiliser les fonctions php natives de tri (sort, ksort, etc).

function CustomSort(&$unsortedArray)
{
    do {
        $permutation = false;
        for ($i = 0; $i < (count($unsortedArray) - 1); $i++) {
            $currentElement = $unsortedArray[$i];
            $nextElement = $unsortedArray[$i + 1];
            if ($currentElement > $nextElement) {
                $unsortedArray[$i] = $nextElement;
                $unsortedArray[$i + 1] = $currentElement;
                $permutation = true;
            }
        }
    } while ($permutation);
}

$array = array(4, 5, 1, 9);
var_dump($array);
CustomSort($array);
var_dump($array);
