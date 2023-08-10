<?php
if(isset($_POST['action']) && $_POST['action'] === 'appeler_ma_fonction_php') {
    // Inclure les fichiers nécessaires pour la fonction
    // Exécuter la fonction
    $resultat = ma_fonction_php();
    echo $resultat;
}

function ma_fonction_php() {
    // Votre logique PHP ici
    return "Résultat de la fonction PHP";
}
?>
