<?php include __DIR__ . '/../header.php' ?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div>
            <div>
                <h1 class="border-bottom w-100">Formulaire</h1>
                <form action="traitement.php" method="post" enctype="multipart/form-data" class="col-md-4">
                <!-- catégorie  -->
                    <div class="form-group">
                        <label for="monChamp">Nom</label>
                        <input class="form-control" id="monChamp" name="monChamp">
                    </div>
                    <div class="form-group">
                        <label for="monChamp">Email</label>
                        <input class="form-control" id="monChamp" name="monChamp">
                    </div>
                    <div class="form-group">
                        <label for="monChamp">Téléphone</label>
                        <input class="form-control" id="monChamp" name="monChamp">
                    </div>
                    <div class="form-group">
                        <label for="monChamp">Message</label>
                        <input class="form-control" id="monChamp" name="monChamp">
                    </div>
                    <div class="form-group">
                        <label for="monFichier">Pièce Jointe</label><br>
                        <input type="file" class="form-control-file" id="monFichier" name="monFichier">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Envoyer le formulaire</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

<?php include __DIR__ . '/../footer.php' ?>














<!--


 enctype="multipart/form-data"

<div class="form-group">
                        <label for="monFichier">Mon Fichier</label><br>
                        <input type="file" class="form-control-file" id="monFichier" name="monFichier">
                    </div>




                    -->
