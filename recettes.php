
<!-- INSERTION DU HEADER -->
<?php include __DIR__ . '/header.php' ?>




<!-- CONTENU DE LA PAGE -->
<div class="py-10 px-32">

  <div class ="font-bold text-4xl">
    <h1> Les suggestions du chef</h1>
  </div>

  <!-- DEBUT DU BLOC DES SUGGESTIONS DU CHEF -->
  <div class="block md:flex justify-between md:-mx-2">

    <?php
      require 'functions.php';
      connect_Database();

      $req = $dbconnect->prepare("SELECT * FROM recettes WHERE Categorie=3 AND Archive=0 AND Valide=1");
      $req->execute();
      $tab = $req->fetchAll();

      foreach ($tab as $sug_chef) {
    ?>

    <!-- ARTICLE -->
    <div class="w-full lg:w-2/4 md:mx-2 mb-4 md:mb-0">
      <div class="bg-white rounded-lg overflow-hidden shadow relative">
          <a href="page_recette.php?ID=<?php echo $sug_chef['ID'] ?>"> <img class="h-56 w-full object-cover object-center" src=" img/recettes/<?php echo $sug_chef['Image']; ?>" alt=""> </a>
          <div class="p-4 h-auto md:h-40 lg:h-48">
            <!-- TITRE DE LA RECETTE -->
            <div href="#" class="block text-blue-500 hover:text-blue-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">
              <?php echo $sug_chef['Titre']; ?>
            </div>
            <!-- DESCRIPTION DE LA RECETTE -->
            <div class="text-gray-600 text-sm leading-relaxed block md:text-xs lg:text-sm">
              <?php echo $sug_chef['Description']; ?>
            </div>
            <!-- TAGS DE LA RECETTE -->
            <div class="relative mt-2 lg:absolute bottom-0 mb-4 md:hidden lg:block">
              <a class="inline bg-gray-300 py-1 px-2 rounded-full text-xs lowercase text-gray-700" href="#">#sel</a>
              <a class="inline bg-gray-300 py-1 px-2 rounded-full text-xs lowercase text-gray-700" href="#">#sucre</a>
            </div>
          </div>
      </div>
    </div> <!-- FIN DE L'ARTICLE -->

    <?php
      }
    ?>

  </div> <!-- FIN DU BLOC DES SUGGESTIONS DU CHEF -->

</div>



<div class="py-10 px-32">

  <div class ="font-bold text-4xl">
    <h1> Les recettes de saison</h1>
  </div>

  <!-- DEBUT DU BLOC DES RECETTES DE SAISON -->
  <div class="block md:flex justify-between md:-mx-2">

    <?php

      $req2 = $dbconnect->prepare("SELECT * FROM recettes WHERE Categorie=2 AND Archive=0 AND Valide=1");
      $req2->execute();
      $tab2 = $req2->fetchAll();

      foreach ($tab2 as $recettes_saison) {
    ?>

    <!-- ARTICLE -->
    <div class="w-full lg:w-1/3 md:mx-2 mb-4 md:mb-0">
      <div class="bg-white rounded-lg overflow-hidden shadow relative">
        <a href="page_recette.php?ID=<?php echo $recettes_saison['ID'] ?>">  <img class="h-56 w-full object-cover object-center" src=" img/recettes/<?php echo $recettes_saison['Image']; ?>" alt=""> </a>
        <div class="p-4 h-auto md:h-40 lg:h-48">
          <!-- TITRE DE LA RECETTE -->
          <div href="#" class="block text-blue-500 hover:text-blue-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">
            <?php echo $recettes_saison['Titre']; ?>
          </div>
          <!-- DESCRIPTION DE LA RECETTE -->
          <div class="text-gray-600 text-sm leading-relaxed block md:text-xs lg:text-sm">
            <?php echo $recettes_saison['Description']; ?>
          </div>
          <!-- TAGS DE LA RECETTE -->
          <div class="relative mt-2 lg:absolute bottom-0 mb-4 md:hidden lg:block">
            <a class="inline bg-gray-300 py-1 px-2 rounded-full text-xs lowercase text-gray-700" href="#">#sel</a>
            <a class="inline bg-gray-300 py-1 px-2 rounded-full text-xs lowercase text-gray-700" href="#">#sucre</a>
          </div>
        </div>
      </div>
    </div> <!-- FIN DE L'ARTICLE -->

    <?php
      }
    ?>

  </div> <!-- FIN DU BLOC DES RECETTES DE SAISON -->

</div>


<div class="py-10 px-32">

  <div class ="font-bold text-4xl">
    <h1> Idées de recettes</h1>
  </div>

  <!-- DEBUT DU BLOC DES IDEES DE RECETTES -->
  <div class="block md:flex justify-between md:-mx-2">

    <?php

      $req3 = $dbconnect->prepare("SELECT * FROM recettes WHERE Categorie=1 AND Archive=0 AND Valide=1");
      $req3->execute();
      $tab3 = $req3->fetchAll();

      foreach ($tab3 as $idees_recettes) {
    ?>

    <!-- ARTICLE -->
    <div class="w-full lg:w-1/4 md:mx-2 mb-4 md:mb-0">
      <div class="bg-white rounded-lg overflow-hidden shadow relative">
        <a href="page_recette.php?ID=<?php echo $idees_recettes['ID'] ?>">  <img class="h-56 w-full object-cover object-center" src=" img/recettes/<?php echo $idees_recettes['Image']; ?>" alt=""> </a>
        <div class="p-4 h-auto md:h-40 lg:h-48">
          <!-- TITRE DE LA RECETTE -->
          <div class="block text-blue-500 hover:text-blue-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">
            <?php echo $idees_recettes['Titre']; ?>
          </div>
          <!-- DESCRIPTION DE LA RECETTE -->
          <div class="text-gray-600 text-sm leading-relaxed block md:text-xs lg:text-sm">
            <?php echo $idees_recettes['Description']; ?>
          </div>
          <!-- TAGS DE LA RECETTE -->
          <div class="relative mt-2 lg:absolute bottom-0 mb-4 md:hidden lg:block">
            <a class="inline bg-gray-300 py-1 px-2 rounded-full text-xs lowercase text-gray-700" href="#">#dessert</a>
            <a class="inline bg-gray-300 py-1 px-2 rounded-full text-xs lowercase text-gray-700" href="#">#fraise</a>
            <a class="inline bg-gray-300 py-1 px-2 rounded-full text-xs lowercase text-gray-700" href="#">#chocolat</a>
          </div>
        </div>
      </div>
    </div> <!-- FIN DE L'ARTICLE -->

    <?php
      }
    ?>

  </div> <!-- FIN DU BLOC DES IDEES DE RECETTES -->

</div>




<!-- INSERTION DU FOOTER -->
<?php include __DIR__ . '/footer.php' ?>
