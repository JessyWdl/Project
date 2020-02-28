<?php
// Constante DEBUG :
// true : affiche des infos à des fins de debuggage
// false : fonctionnement normal
define("DEBUG", true);

// On teste d'abord la présence des champs du formulaire
if (!checkInputs()) {
    checkInputErreur(); // Redirige vers la page d'erreur
    exit();     // Termine le script (important !)
                // Sans exit(), PHP continue d'interpréter le script...
                // et testera donc le user/pass
                // On aurait aussi pu le mettre dans la fonction checkInputErreur().
} else {
    $login = $_POST['userName'];
    $pass = $_POST['password'];
    $authentified = false;
    try {
        // On se connecte à MySQL >> base Cours_PHP User 'root' mdp 'root'
        $dbHost = 'localhost';
        $dbName = 'Cours_PHP';        
        $dbUser = 'root';
        $dbPass = '';
        $dbCnx = "mysql:host=$dbHost;dbname=$dbName;charset=utf8";
        $bdd = new PDO($dbCnx, $dbUser, $dbPass);
    } catch (Exception $e) {
        die('Erreur : '.$e->getMessage());
    }

    debug("login : $login");
    debug("pass : $pass -> ".md5($pass));
    
    $sql = 'select user_password from utilisateur where user_login = :user_login';
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':user_login', $login);
    
    if (!$stmt->execute()) {
        $err = $stmt->errorInfo();
        echo "Erreur SQL : <br />";
        print_r($err);
        die();
    }

    if ($row = $stmt->fetch()) {
        $passFromDB = $row['user_password'];        
        debug("Utilisateur trouvé ! Pass from DB = $passFromDB");
        
        if ($passFromDB == md5($pass)) {            
            debug('Pass OK');            
            $authentified = true;
            session_start();
            $_SESSION['user_login']=$login;
        }  else {            
            debug('Pass KO');
        }
    } else  {        
        debug('Utilisateur non trouvé !');        
    }

    if ($authentified) {
        checkLoginSucces();
    } else {                
        checkLoginErreur();
    }
}

/*************************************************************************
 FONCTIONS
**************************************************************************/

// Fonction de vérification des champs.
// Retourne true si les champs sont OK, false sinon
function checkInputs()
{
    // Par défaut, le résultat de la fonction sera "true"
    $result = true;

    $tabloChamp = ["userName", "password"];

    // boucle sur les champs du formulaire.(contrôle de la saisie)
    foreach ($tabloChamp as $champ) {
        if (!isset($_POST[$champ]) || empty($_POST[$champ])) {
            debug("$champ est vide !");
            
            // Si le champ n'a pas été transmis, ou est vide,
            // on passe le résultat à false
            $result = false;
        }
    }

    // On retourne le résultat
    return $result;
}

function checkInputErreur()
{
    if (DEBUG) {
        die("Ah fug... Input error");
    } else {
        header('Location: /skeleton/formulaire/erreur.php');
    }
}

function checkLoginErreur()
{
    if (DEBUG) {
        die("Désolé, mais connais pas ! Login error");
        header('Location: /skeleton/formulaire/erreur.php');

    }
} 

function checkLoginSucces()
{
    if (DEBUG) {
        // echo "Login: Check !";
        header('Location: /skeleton/articles/index.php');
    }
}

function debug($text) {
    if (DEBUG) {
        echo $text."<br />";
    }
}