<?php

  session_start();

?>

<div class="mx-auto mt-8 p-4 w-1/2 border border-gray-300 rounded-lg">

      <form class="" action="traitement.php" method="post">

        <div class="">
          <label for="nom">Nom :</label>
          <input type="text" name="nom" value="" class="border border-gray-400">

          <label for="prenom">Prénom :</label>
          <input type="text" name="prenom" value="" class="border border-gray-400">
        </div>

        <div class="mt-3">
          <label for="mail">Email :</label>
          <input type="text" name="mail" value="" class="border border-gray-400">
        </div>

        <div class="mt-3">
          <label for="pass">Mot de passe :</label>
          <input type="password" name="pass" value="" class="border border-gray-400">

          <label for="conf_pass">Confirmation :</label>
          <input type="password" name="conf_pass" value="" class="border border-gray-400">
        </div>

        <div class="text-red-500 mt-3">
          <?php
            if (isset($_SESSION['err_signin'])) {
              echo $_SESSION['err_signin'];
              unset($_SESSION['err_signin']);
            }
          ?>
        </div>

        <div class="mt-8 text-center">
          <button type="submit" name="button" class="bg-gray-200 border border-gray-400 rounded-lg p-1">Valider</button>
        </div>


      </form>

    </div>
