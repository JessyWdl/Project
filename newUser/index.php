<?php include __DIR__ . '/../header.php' ?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="mt-3">
            <div>
                <h1 class="border-bottom w-100">Inscription.</h1>
                <form action="/skeleton/NewUser/traitement.php" method="post" enctype="multipart/form-data" class="col-md-4">
                    <div class="form-group">
                        <label for="nomUser">Entrez un Pseudo</label>
                        <input class="form-control" id="nomUser" name="nomUser"required >
                    </div>
                    <div class="form-group">
                        <label for="userMail">E-Mail</label>
                        <input type="email" class="form-control" id="userMail" name="userMail" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Choisissez votre mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="password2">Ressaisissez votre mot de passe</label>
                        <input type="password" class="form-control" id="password2" name="password2" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">S'inscrire</button>
                    </div>
                    <div>
                        <a href="http://localhost/projet_php_jessy/projetPhP/login/index.php">Déjà un Compte ?</a>
                    </div>
                    <!-- <div class="form-group">
                        <label for="userPict">Ma Photo</label><br>
                        <input type="file" class="form-control-file" id="userPict" name="userPict">
                    </div> -->
                </form>
            </div>
        </div>
    </main>
<?php include __DIR__ . '/../footer.php' ?>