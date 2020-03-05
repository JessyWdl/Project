<?php

  require '../functions.php';
  session_start();

  if (!isset($_SESSION['User_Type']) && $_SESSION['User_Type']!=2) {
    header ('Location: ../index.php');
  }

  connect_Database();
  $req = $dbconnect->prepare("SELECT * FROM recettes where Valide=0");
  $req->execute();
  $count = $req->rowCount();

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Recettes</title>
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
            Liste des recettes à valider
          </div>


          <div class="ml-8 mt-12">

            <table class="border border-gray-400">

              <thead class="bg-gray-200">
                <tr>
                  <td class="w-12">ID</td>
                  <td class="w-24">Titre</td>
                  <td class="w-24">Description</td>
                  <td class="w-24">Auteur</td>
                  <td class="w-32">Date de création</td>
                  <td class="w-32">Image</td>
                  <td class="w-32">Archivé</td>
                  <td class="w-12">Actions</td>
                </tr>
              </thead>

              <tbody>

                <?php

                  connect_Database();
                  $req=$dbconnect->prepare("SELECT * FROM recettes WHERE Valide=0 ORDER BY ID ");
                  $req->execute();
                  $tab = $req->fetchAll();

                  foreach ($tab as $recette) {
                ?>

                <tr>
                  <td><?php echo $recette['ID']; ?></td>
                  <td><?php echo $recette['Titre']; ?></td>
                  <td><?php echo $recette['Description']; ?></td>
                  <td><?php echo $recette['Auteur']; ?></td>
                  <td><?php echo $recette['Date_Creation']; ?></td>
                  <td><?php echo $recette['Image']; ?></td>
                  <td><?php echo $recette['Archive']; ?></td>
                  <td>
                    <a href="recette_edit.php?ID=<?php echo $recette['ID']; ?>"> <i class="far fa-edit text-blue-500"> </i> </a>
                    <a href="trt/trt_recette_archive.php?ID=<?php echo $recette['ID']; ?>"> <i class="fas fa-archive text-red-500"></i> </a>
                  </td>
                </tr>

                <?php
                  }
                ?>

              </tbody>

            </table>

          </div>

        </div>

      </div>
    </div>



  </body>
</html>
