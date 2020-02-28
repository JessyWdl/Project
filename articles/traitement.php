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
$contenu_binaire = file_get_contents($_FILES['imageUpload']['tmp_name']);
$image_encodee = base64_encode($contenu_binaire);
$titreArt = $_POST['titreArticle'];
$contenuArt = $_POST['textArticle'];
$imageArt = $image_encodee;

    try{
        // Create prepared statement
        $sql = "INSERT INTO Article (art_titre, art_contenu, art_image) VALUES (:art_titre, :art_contenu, :imageArt)";
        $stmt = $bdd->prepare($sql);

        // Bind des paramètres
        $stmt->bindParam(':art_titre', $titreArt);
        $stmt->bindParam(':art_contenu', $contenuArt);
        $stmt->bindParam(':art_image', $imageArt);
        // Exécuter l'instruction préparée
        $stmt->execute();
        header('location: /skeleton/formulaire/index.php')

        chekInputSucces();
    } catch(PDOException $e){
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    }
}

 
// Fermer la connexion
unset($bdd);
?>