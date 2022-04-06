<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">TASNIM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/ts_immo/Proprietaire/addProprietaire">AjoutProprietaire</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/ts_immo/Proprietaire/listProprietaire">ListeProprietaire</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br><br><br><br>
    <div class="card mx-auto bg-dark text-white" style="width: 60rem;">
        <div class="card-body">
            <h6 class="card-title mx-auto">Détail des propriétaires</h6>
            <h6 class="card-subtitle mb-2 text-muted">
                <h4><?= $data->getPrenom() ?> <?= $data->getNom() ?></h4>
            </h6>
            <p class="card-text">Née le <?= $data->getDateNaissance() ?> a <?= $data->getLieuNaissance() ?> a comme civilité :<?= $data->getCivilite() ?></p>
            <p class="card-text">Le code de sa carte d'identité est : <?= $data->getCodePieceIdentite() ?></p>
            <p class="card-text">Le numero de sa carte d'identité est : <?= $data->getNumeroPieceIdentite() ?></p>

        </div>
    </div>
    </div>
</body>

</html>