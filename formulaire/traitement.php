<?php

if (isset($_POST['monChamp']) && isset($_FILES['monFichier'])) {

    // Répertoire de destination
    $uploadDir = __DIR__ . '/upload/';
    // extension du fichier envoyé
    $extension = pathinfo($_FILES['monFichier']['name'])['extension'];
    // Nom du fichier à uploader
    $nomFichier = 'mon-super-fichier-CESI.' . $extension;

    // On procède à l'enregistrement du fichier
    if (move_uploaded_file($_FILES['monFichier']['tmp_name'], $uploadDir.$nomFichier)) {
        header('Location: ./succes.php');
    } else {
        header('Location: ./erreur.php');
    }

}



















































/*Form avec upload*/
/*
if (isset($_POST['monChamp']) && isset($_FILES['monFichier'])) {
    // Répertoire de destination
    $uploadDir = __DIR__ . '/upload/';
    // extension du fichier envoyé
    $extension = pathinfo($_FILES['monFichier']['name'])['extension'];
    // Nom du fichier à uploader
    $nomFichier = 'mon-super-fichier.' . $extension;

    // On procède à l'enregistrement du fichier
    if (move_uploaded_file($_FILES['monFichier']['tmp_name'], $uploadDir.$nomFichier)) {
        header('Location: ./succes.php');
    } else {
        header('Location: ./erreur.php');
    }

}
*/