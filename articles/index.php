<?php include __DIR__ . '/../header.php' ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="mt-3">
        <div>
            <h1 class="border-bottom w-100">Articles.</h1>
            <form action="/skeleton/NewUser/traitement.php" method="post" enctype="multipart/form-data" class="col-md-4">
                <div class="form-group">
                    <label for="titre">Titre de l'Article</label>
                    <input class="form-control" id="titreArticle" name="titreArticle"required >
                </div>
                <div class="form-group">
                    <label for="texte">Texte</label>
                    <input class="form-control" id="texteArticle" name="texteArticle"required >
                </div>
                <div class="form-group">
                    <label for="imageUpload">(optionnel)</label><br>
                    <input type="file" class="form-control-file" id="imageUpload" name="imageUpload" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-block btn-primary" type="submit">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</main>
    
<?php include __DIR__ . '/../footer.php' ?>