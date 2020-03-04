<?php

  require '../functions.php';
  session_start();

  if (!isset($_SESSION['User_Type']) && $_SESSION['User_Type']!=2) {
    header ('Location: ../index.php');
  }

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Utilisateurs</title>
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
            Liste des utilisateurs
          </div>

          <div class="text-left mt-12 ml-8">
            <a href="../signin/signin.php"> <i class="fas fa-user-plus"></i> Ajouter </a>
          </div>

          <div class="ml-8">

            <table class="border border-gray-400">

              <thead class="bg-gray-200">
                <tr>
                  <td class="w-12">ID</td>
                  <td class="w-24">Nom</td>
                  <td class="w-24">Prenom</td>
                  <td class="w-24">Email</td>
                  <td class="w-32">Type</td>
                  <td class="w-32">Archivé</td>
                  <td class="w-12">Actions</td>
                </tr>
              </thead>

              <tbody>

                <?php

                  connect_Database();
                  $req=$dbconnect->prepare("SELECT * FROM users INNER JOIN users_types ON users.type = users_types.type ORDER BY ID ");
                  $req->execute();
                  $tab = $req->fetchAll();

                  foreach ($tab as $user) {
                ?>

                <tr>
                  <td><?php echo $user['ID']; ?></td>
                  <td><?php echo $user['Nom']; ?></td>
                  <td><?php echo $user['Prenom']; ?></td>
                  <td><?php echo $user['Mail']; ?></td>
                  <td><?php echo $user['Description']; ?></td>
                  <td><?php echo $user['Archive']; ?></td>
                  <td>
                    <a href="users_edit.php?ID=<?php echo $user['ID']; ?>"> <i class="far fa-edit text-blue-500"> </i> </a>
                    <a href="trt/trt_users_archive.php?ID=<?php echo $user['ID']; ?>"> <i class="fas fa-archive text-red-500"></i> </a>
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
