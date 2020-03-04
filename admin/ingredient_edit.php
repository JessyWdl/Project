<?php

  require '../functions.php';
  session_start();

  if (isset($_GET['ID'])) {
    $_SESSION['Edit_Ingredient_Id']= $_GET['ID'];
  }

  $Ingredient_Id = $_SESSION['Edit_Ingredient_Id'];

  connect_Database();
  $req = $dbconnect->prepare("SELECT * FROM ingredients WHERE ID = '$Ingredient_Id' ");
  $req->execute();
  $tab = $req->fetch();

  $req2 = $dbconnect->prepare("SELECT * FROM ingredients_types ");
  $req2->execute();
  $tab2 = $req2->fetchAll();

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ingrédients</title>
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
            Modification de l'ingrédient
          </div>

          <div class="ml-8 mt-8">

            <form class="" action="trt/trt_ingredient_edit.php" method="post">

              <div class="mb-3">
                <label for="nom">Nom :</label>
                <input class="border border-gray-300" type="text" name="nom" value="<?php echo $tab['Nom'] ?>">
              </div>

              <div class="mb-3">
                <label for="type">Type :</label>
                <select class="" name="type">
                  <?php
                    foreach ($tab2 as $type) {
                  ?>
                  <option <?php echo $tab['Type']==$type['Type'] ? 'selected' : ''; ?> value=" <?php echo $type['Type']; ?> "> <?php echo $type['Description']; ?> </option>
                  <?php
                    }
                  ?>
                </select>
              </div>

              <div class="text-red-500 mt-3">
                <?php
                  if (isset($_SESSION['err_ingredient_edit'])) {
                    echo $_SESSION['err_ingredient_edit'];
                    unset($_SESSION['err_ingredient_edit']);
                  }
                ?>
              </div>

              <div class="">
                <button class="border border-gray-300 p-1 rounded-lg" type="submit" name="button">Valider</button>
              </div>

            </form>

          </div>

        </div>

      </div>
    </div>



  </body>
</html>
