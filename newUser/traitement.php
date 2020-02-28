<?php

// Tableau de champ à contrôler 
$tableauChamp = ["nomUser", "password", "password2"]; //les champs de l'index à checker
// boucle sur les champ du tableau
foreach ($tableauChamp as $champ) { // boucle pour chaque entrée du tableau définit $tableauChamp 

    if (isset($_POST[$champ]) && !empty($_POST[$champ])) { //isset — Détermine si une variable est déclarée et est différente de NULL
        chekInputSucces();                                 // empty — Détermine si une variable est vide
    }else {
        chekInputErreur();
    }
}
try
{
    // On se connecte à MySQL >> base Cours_PHP User 'root' mdp 'root'
    $bdd = new PDO('mysql:host=localhost;dbname=Cours_PHP;charset=utf8', 'root', ''); //Utilisation de l'objet de connexion PDO "PHP Data Objects"
    echo 'connection: ok';
}


catch(Exception $e)
{
    
        die('Erreur : '.$e->getMessage());
}

// Tentative d'exécution de la requête d'insertion de l'utilisateur
$login = $_POST['nomUser'];
$mail = $_POST['userMail'];
$pass1 = $_POST['password'];
$pass2 = $_POST['password2'];
// $userPict = $_POST['userPict'];
if($pass1 == $pass2){
    try{
        // Create prepared statement
        $sql = "INSERT INTO Utilisateur (user_login, user_password, user_mail) VALUES (:user_login, :user_password, :user_mail)";
        $stmt = $bdd->prepare($sql);

        // Bind des paramètres
        $stmt->bindParam(':user_login', $login);
        $stmt->bindParam(':user_mail', $mail);
        // $stmt->bindParam(':user_pict', $userPict);
        $stmt->bindParam(':user_password', md5($pass1));

        // Exécuter l'instruction préparée
        $stmt->execute();

        chekInputSucces();
    } catch(PDOException $e){
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    }
}else{
    chekInputErreur();
}

 
// Fermer la connexion
unset($bdd);

    // Fonctions de validation des champs

function chekInputSucces(){
    header('Location: /skeleton/formulaire/succes.php');
};

function chekInputErreur(){
    header('Location: /skeleton/formulaire/erreur.php');
};

// Tableau de champ à contrôler 
$tableauChamp = ["nomUser", "password", "password2"]; //les champs de l'index à checker
// boucle sur les champ du tableau
foreach ($tableauChamp as $champ) { // boucle pour chaque entrée du tableau définit $tableauChamp 

    if (isset($_POST[$champ]) && !empty($_POST[$champ])) { //isset — Détermine si une variable est déclarée et est différente de NULL
        chekInputSucces();                                 // empty — Détermine si une variable est vide
    }else {
        chekInputErreur();
    }
}
?>