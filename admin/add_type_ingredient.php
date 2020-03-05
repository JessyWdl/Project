<?php

  require'../functions.php';
  session_start();

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Type Ingrédients</title>
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

        <div class="mx-auto">

          <div class="text-center text-3xl">
            Ajouter un type d'ingrédient
          </div>


          <div class="mt-8">

            <form class="border border-gray-300 rounded-lg p-3" action="trt/trt_add_type_ingredient.php" method="post">

              <div class="mb-3">
                <label for="description">Description :</label>
                <input class="border border-gray-300" type="text" name="description" value="">
              </div>



              <div class="text-red-500">
                <?php
                  if (isset($_SESSION['err_add_type_ingredient'])) {
                    echo $_SESSION['err_add_type_ingredient'];
                    unset($_SESSION['err_add_type_ingredient']);
                  }
                ?>
              </div>

              <div class="">
                <button class="border border-gray-300 rounded-lg p-1" type="submit" name="button">Ajouter</button>
              </div>

            </form>

          </div>

        </div>

      </div>
    </div>



  </body>
</html>
