<?php

  require '../../functions.php';
  session_start();

  if (isset($_POST['tittre']) && isset($_POST['description']) && isset($_POST['image']) ) {
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $Recette_Id = $_SESSION['Edit_Recette_Id'];



    //On vérifie que les champs saisis ne sont pas vides:
    if (empty($titre) || empty($description) || empty($image)) {
      $_SESSION['err_recette_edit'] = "Merci de renseigner tous les champs du formulaire." ;
      header ('Location: ../recette_edit.php');
    }
    else {
      //On vérifie que l'adresse mail n'est pas déjà enregistrée dans la base:
      connect_Database();

      $req = $dbconnect->prepare("UPDATE recettes SET Titre = '$titre', Descriprion = '$description', Image = '$image', Date_Modification = now() WHERE ID = '$Recette_Id' ");
      $req -> execute();
      header ('Location: ../adm_recettes.php');
    }
  }

?>
