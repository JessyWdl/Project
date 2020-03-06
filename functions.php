<?php


  function connect_Database(){

    global $dbconnect;

    // $host_name = 'db5000318747.hosting-data.io';
    // $database = 'dbs310753';
    // $user_name = 'dbu575821';
    // $password = 'Ces1@dm1n';
    // $dbconnect = null;

    $host_name = 'localhost';
    $database = 'projet_web';
    $user_name = 'admin';
    $password = 'rollerblade';
    $dbconnect = null;

    try {
      $dbconnect = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
    } catch (PDOException $e) {
      echo "Erreur!: " . $e->getMessage() . "<br/>";
      die();
    }
  }
?>
