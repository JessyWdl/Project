<?php include __DIR__ . '/../header.php' ?>

  <div class="mx-auto w-full h-full">


    <!-- TITRE -->
    <div class="text-center text-3xl">
      Ajouter une recette
    </div>


    <!-- FORMULAIRE -->
    <div class="mt-12">

      <form enctype="multipart/form-data" class="border border-gray-300 rounded-lg p-3" action="traitement.php" method="post">

        <div class="mb-3">
          <label for="titre">Titre :</label>
          <input class="border border-gray-300" type="text" name="titre" value="">
        </div>

        <div class="mb-3">
          <label for="description">Description :</label>
          <textarea class="border border-gray-300" name="description" rows="8" cols="80"></textarea>
        </div>

        <div class="mb-3">
          <input type="file" name="image" value="">
        </div>

        <div class="text-red-500">
          <?php
            if (isset($_SESSION['err_add_recette'])) {
              echo $_SESSION['err_add_recette'];
              unset($_SESSION['err_add_recette']);
            }
          ?>
        </div>

        <div class="">
          <button class="border border-gray-300 p-1 rounded-lg" type="submit" name="button">Ajouter</button>
        </div>

      </form>

    </div>

  </div>

<?php include __DIR__ . '/../footer.php' ?>
