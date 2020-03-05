<?php include __DIR__ . '/../header.php' ?>

    <div class="w-full max-w-xs">
        <form action="traitement.php" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="mail">
                    Adresse Mail :
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="mail" name="mail" type="text" placeholder="Username">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="pass">
                    Mot de passe :
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="pass" name="pass" type="password" placeholder="******************">
                <p class="text-red-500 text-xs italic"></p>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Se connecter
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="../signin/signin.php">
                    Create Account ?
                </a>
            </div>

            <div class="text-red-500 mt-3">
              <?php
                if (isset($_SESSION['err_login'])) {
                  echo $_SESSION['err_login'];
                  unset($_SESSION['err_login']);
                }
              ?>
            </div>
        </form>
    </div>
<?php include __DIR__ . '/../footer.php' ?>
