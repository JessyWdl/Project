<?php

  require '../functions.php';
  session_start();

  if (!isset($_SESSION['User_Type']) || $_SESSION['User_Type']<1) {
    header ('Location: ../index.php');
  }

  connect_Database();

  $req = $dbconnect->prepare("SELECT * FROM recettes WHERE Archive=0 AND Valide=1");
  $req->execute();
  $count_recettes = $req->rowCount();

  $req2 = $dbconnect->prepare("SELECT * FROM ingredients WHERE Archive=0 ");
  $req2->execute();
  $count_ingredients = $req2->rowCount();

  $req3 = $dbconnect->prepare("SELECT * FROM recettes_commentaires WHERE Archive=0 ");
  $req3->execute();
  $count_commentaires = $req3->rowCount();

  $req4 = $dbconnect->prepare("SELECT * FROM users WHERE Archive=0 ");
  $req4->execute();
  $count_users = $req4->rowCount();

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tableaux de bord</title>
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

          <div class="text-center text-3xl mb-8">
            Tableaux de bord
          </div>


          <div class="ml-8 mt-12">

            <!-- Recettes -->
            <div class="mb-8">
              <div class="text-center text-6xl">
                <?php echo $count_recettes; ?>
              </div>
              <div class="text-center">
                Recettes
              </div>
            </div>

            <!-- Ingrédients -->
            <div class="mb-8">
              <div class="text-center text-6xl">
                <?php echo $count_ingredients; ?>
              </div>
              <div class="text-center">
                Ingrédients
              </div>
            </div>

            <!-- Commentaires -->
            <div class="mb-8">
              <div class="text-center text-6xl">
                <?php echo $count_commentaires; ?>
              </div>
              <div class="text-center">
                Commentaires
              </div>
            </div>

            <!-- Utilisateurs -->
            <div class="mb-8">
              <div class="text-center text-6xl">
                <?php echo $count_users; ?>
              </div>
              <div class="text-center">
                Utilisateurs
              </div>
            </div>

          </div>

        </div>

      </div>
    </div>



  </body>
</html>
