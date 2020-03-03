<?php

  require'../functions.php';
  session_start();

  if (isset($_POST['titre']) && isset($_POST['description']) && isset($_FILES['image'])) {
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $image = $_FILES['image'];

    $auteur = $_SESSION['User_Nom']." ".$_SESSION['User_Prenom'];


    if (empty($titre) || empty($description)) {
      $_SESSION['err_add_recette'] = "Merci de renseigner l'ensemble des champs";
      header('Location: add_recette.php');
    }
    else {

      // Répertoire de destination
      $uploadDir = __DIR__ . '/../img/recettes/';
      // extension du fichier envoyé
      $extension = pathinfo($_FILES['image']['name'])['extension'];
      // Nom du fichier à uploader
      $nomFichier = pathinfo($_FILES['image']['name'])['filename']. '.'.$extension;

      // On procède à l'enregistrement du fichier
      if (!move_uploaded_file($_FILES['image']['tmp_name'], $uploadDir.$nomFichier)) {
          $error = 'Une erreur est survenue lors de l\'upload du fichier';
      }

      connect_Database();

      $req = $dbconnect->prepare("INSERT INTO recettes (Titre, Description, Image, Date_Creation, Auteur) VALUES ('$titre','$description', '$nomFichier', now(), '$auteur' ) ");
      $req->execute();

      header('Location:../index.php');
    }
  }


 ?>
