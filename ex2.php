<?php
// Exercice 2
$random_words = ["ape", "apple", "zoo", "pie", "elephant", "banana", "picnic", "eye"];

// Fonction pour comparer les mots par longueur et alphabétiquement
function compareWords($word1, $word2) {
    $lengthComparison = strlen($word1) - strlen($word2);

    //Tri alphabétique
    if ($lengthComparison == 0) {
        return strcmp($word1, $word2);
    }

    return $lengthComparison;
}


usort($random_words, 'compareWords');

print_r($random_words);

?>
