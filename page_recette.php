
<!-- INSERTION DU HEADER -->
<?php include __DIR__ . '/header.php' ?>


<?php

  if (isset($_GET['ID'])) {
    $recette_Id = $_GET['ID'];
  }

  require 'functions.php';

  connect_Database();
  $req = $dbconnect->prepare("SELECT * FROM recettes WHERE ID=$recette_Id ");
  $req->execute();
  $recette = $req->fetch();

?>



<!-- CONTENU DE LA PAGE -->
<div class="h-full w-5/6 py-10 px-32 mx-auto">

    <!-- ARTICLE -->
    <div class="w-full lg:w-full md:mx-2 mb-4 md:mb-0">
      <div class="bg-white rounded-lg overflow-hidden shadow relative">
          <img class="h-full object-cover object-center" src=" img/recettes/<?php echo $recette['Image']; ?>" alt="">
          <div class="p-4 h-auto md:h-40 lg:h-48">
            <!-- TITRE DE LA RECETTE -->
            <div class="block text-blue-500 hover:text-blue-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">
              <?php echo $recette['Titre']; ?>
            </div>
            <!-- DESCRIPTION DE LA RECETTE -->
            <div class="text-gray-600 text-sm leading-relaxed block md:text-xs lg:text-sm">
              <?php echo $recette['Description']; ?>
            </div>
            <!-- TAGS DE LA RECETTE -->
            <div class="relative mt-2 lg:absolute bottom-0 mb-4 md:hidden lg:block">
              <a class="inline bg-gray-300 py-1 px-2 rounded-full text-xs lowercase text-gray-700" href="#">#sel</a>
              <a class="inline bg-gray-300 py-1 px-2 rounded-full text-xs lowercase text-gray-700" href="#">#sucre</a>
            </div>
          </div>
      </div>
    </div> <!-- FIN DE L'ARTICLE -->

</div>




<!-- INSERTION DU FOOTER -->
<?php include __DIR__ . '/footer.php' ?>
