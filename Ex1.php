<?php
// Exercice 1
$messyArray = [
    "Marguerite" => "Orange",
    "Kiwi",
    7 => "Pomme",
    [
        "Prune",
        "Cerise" => "Cerise"
    ]
];

// À partir de messyArray afficher "Kiwi"
echo $messyArray[0] . PHP_EOL;

// À partir de messyArray afficher "Cerise"
echo $messyArray[8]["Cerise"] . PHP_EOL;

// À partir de messyArray supprimer "Prune"
unset($messyArray[8][0]);


print_r($messyArray);
echo "Prune est supprimé" . PHP_EOL;

?>

