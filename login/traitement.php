<?php

  require '../functions.php';
  session_start();

  //On récupère les champs du formulaires de login:
  if (isset($_POST['mail']) && isset($_POST['pass'])) {

    $mail = $_POST['mail'];
    $pass = md5($_POST['pass']);

    //On vérifie qu'aucun champ saisi n'est vide:
    if (empty($mail) || empty($pass)) {
      $_SESSION['err_login'] = "Merci de renseigner tous les champs.";
      header ('Location: login.php');
    }
    else {
      //On vérifie en base si le mail renseigné existe :
      connect_Database();
      $req = $dbconnect->prepare("SELECT * FROM users WHERE mail = '$mail'");
      $req -> execute();
      $count = $req->rowCount();

      if ($count==0) {
        $_SESSION['err_login'] = "L'adresse mail renseignée n'est pas enregistrée dans notre base.";
        header ('Location: login.php');
      }
      else {
        //On vérifie la concordance mail / mdp
        $req = $dbconnect->prepare("SELECT * FROM users where mail = '$mail' ");
        $req->execute();
        $tab = $req->fetch();

        if ($tab['Pass'] != $pass) {
          $_SESSION['err_login'] = "Le mot de passe saisie n'est pas correct";
          header ('Location: login.php');
        }
        else {

          if ($tab['Archive']==0) {
            $_SESSION['User_Nom'] = $tab['Nom'];
            $_SESSION['User_Prenom'] = $tab['Prenom'];
            $_SESSION['User_Type'] = $tab['Type'];
            header ('Location: ../accueil/index.php');
          }
          else {
            $_SESSION['err_login'] = "Votre compte a été désactivé";
            header ('Location: login.php');
          }

        }
      }
    }
  }


?>
