<?php include __DIR__ . '/../header.php' ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="mt-3">
            <div>
                <h1 class="border-bottom w-100">Veuillez-vous connecter</h1>
                <form action="/skeleton/login/traitement.php" method="post" enctype="multipart/form-data" class="col-md-4">
                    <div class="form-group">
                        <label for="userName">Nom</label>
                        <input class="form-control" id="userName" name="userName" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Connexion</button>
                    </div>
                    <a href="http://localhost/projet_php_jessy/projetPhP/newUser/index.php">Créer un Compte ?</a>
                </form>
            </div>
        </div>
    </main>
</main>

<?php include __DIR__ . '/../footer.php' ?>