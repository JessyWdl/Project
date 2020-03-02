<?php


  function connect_Database(){

    global $dbconnect;

    $dbconnect = new PDO('mysql:host=localhost;dbname=projet_web', 'root','root');
  }



?>
