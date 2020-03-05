<?php

  require'../functions.php';
  session_start();

  if (isset($_GET['ID'])) {
    $_SESSION['Edit_Recette_Id']= $_GET['ID'];
  }

  $Recette_Id = $_SESSION['Edit_Recette_Id'];

  connect_Database();
  $req = $dbconnect->prepare("SELECT * FROM recettes WHERE ID = '$Recette_Id' ");
  $req->execute();
  $tab = $req->fetch();

  $req2 = $dbconnect->prepare("SELECT * FROM recettes_categories ");
  $req2->execute();
  $tab2 = $req2->fetchAll();



?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Recette</title>
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
            Modification de recette.
          </div>

          <div class="ml-8 mt-8">

            <form enctype="multipart/form-data" class="border border-gray-300 rounded-lg p-3" action="trt/trt_recette_edit.php" method="post">

              <div class="mb-3">
                <label for="titre">Titre :</label>
                <input class="border border-gray-300" type="text" name="titre" value="<?php echo $tab['Titre'] ?>">
              </div>

              <div class="mb-3">
                <label for="description">Description :</label>
                <textarea class="border border-gray-300" name="description" rows="8" cols="80"><?php echo $tab['Description'] ?></textarea>
              </div>

              <div class="mb-3">
                <label for="categorie">Catégorie :</label>
                <select class="" name="categorie">
                  <?php
                    foreach ($tab2 as $categorie) {
                  ?>
                  <option <?php echo $tab['Categorie']==$categorie['Categorie'] ? 'selected' : ''; ?> value=" <?php echo $categorie['Categorie']; ?> "> <?php echo $categorie['Description']; ?> </option>
                  <?php
                    }
                  ?>
                </select>
              </div>


              <div class="mb-3">
                <img src="../img/recettes/<?php echo $tab['Image']; ?>" class="w-1/2" alt="">
              </div>

              <div class="text-red-500">
                <?php
                  if (isset($_SESSION['err_recette_edit'])) {
                    echo $_SESSION['err_recette_edit'];
                    unset($_SESSION['err_recette_edit']);
                  }
                ?>
              </div>

              <div class="">
                <?php
                  if ($tab['Valide']==1) {
                ?>
                <button class="border border-gray-300 p-1 rounded-lg bg-gray-300 hover:bg-gray-200" type="submit" name="button">Enregistrer</button>
                <?php
                  }

                  if ($tab['Valide']==0) {
                ?>
                  <button class="border border-gray-300 p-1 rounded-lg bg-gray-300 hover:bg-gray-200" type="button" name="button"> <a href="valider_recette.php?ID=<?php echo $Recette_Id; ?>">Valider</a> </button>
                <?PHP
                  }
                ?>
              </div>


            </form>

          </div>

        </div>

      </div>
    </div>



  </body>
</html>
