<?php

  session_start();
  require '../functions.php';

  //On commence par récupérer les champs du formulaire :
  if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['pass']) && isset($_POST['conf_pass'])) {

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    $conf_pass = $_POST['conf_pass'];

    //On vérifie que les champs saisis ne sont pas vides:
    if (empty($nom) || empty($prenom) || empty($mail) || empty($pass) || empty($conf_pass)) {
      $_SESSION['err_signin'] = "Merci de renseigner tous les champs du formulaire." ;
      header ('Location: signin.php');
    }
    else {
      //On vérifie que l'adresse mail n'est pas déjà enregistrée dans la base:
      connect_Database();
      $req = $dbconnect->prepare("SELECT * FROM users WHERE mail = '$mail'");
      $req-> execute();
      $count = $req->rowCount();

      if ($count != 0) {
        $_SESSION['err_signin'] = "L'adresse mail que vous avez renseignée est déjà enregistrée dans notre base." ;
        header ('Location: signin.php');
      }
      else {
        //On vérifie que les champs de mots de passe et confirmation sont identiques:
        if ($pass != $conf_pass) {
          $_SESSION['err_signin'] = "Les champs de mot de passe et de confirmation doivent correspondre." ;
          header ('Location: signin.php');
        }
        else {
          //On crypte le mot de passe avant de l'enregistrer dans la base de données:
          $mdpcrypt = md5($pass);

          //On intègre les données dans la base, on log automatique le nouvel utilisateur
          $req = $dbconnect -> prepare("INSERT INTO users (Nom,Prenom,Mail,Pass) VALUES ('$nom', '$prenom', '$mail', '$mdpcrypt')");
          $req -> execute();

          $_SESSION['User_Prenom'] = $prenom;
          header ('Location: ../accueil/index.php');
        }
      }
    }
  }



?>
