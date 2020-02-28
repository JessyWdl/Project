<?php include __DIR__ . '/../header.php' ?>
<?php
    // Nom utilisateur BDD
    $userBdd = 'NOMUSER';
    // Password utilisateur BDD
    $passBdd = 'PASSBDD';
    // Nom Bdd
    $nameBdd = 'NOMBDD';
    // Host Bdd
    $hostBdd = 'localhost';

    // Chaine de connexion
    $dsn = 'mysql:dbname='.$nameBdd.';host='.$hostBdd;

    $pdo = new PDO($dsn, $userBdd, $passBdd);
    $stmt = $pdo->query('SELECT * FROM user');
    $users = $stmt->fetchAll(PDO::FETCH_CLASS);
?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div>
            <div>
                <h1 class="border-bottom w-100">Base de données</h1>
                <p>Listing table user</p>
                <?php foreach ($users as $user) : ?>
                <h3><?= $user->nom ?></h3>
                <?php endforeach ?>
            </div>
        </div>
    </main>

<?php include __DIR__ . '/../footer.php' ?>
