<?php
class Calcul {
    public function removeDoublon($array) {
        return array_unique($array);
    }
}

// Exemple d'utilisation
$calcul = new Calcul();
$prenoms = ["Jean", "Paul","Anna", "Max", "Pierre", "Jean", "Paul",  "Lisa", "Max", "Sophie"];
$prenoms = $calcul->removeDoublon($prenoms);

print_r($prenoms);  
?>
