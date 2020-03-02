<?php

  require'../functions.php';

  session_start();

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Administration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
  </head>


  <body>


    <div class="flex">

      <!--Barre latérale -->
      <div class="w-64 h-screen bg-gray-500">

        <?php include 'sidebar.php'; ?>

      </div>

      <!-- Corps de page -->
      <div class="w-full h-screen bg-white">
        Dashboards
      </div>
    </div>



  </body>
</html>
