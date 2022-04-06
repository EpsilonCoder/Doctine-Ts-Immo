<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Login System</title>
  <link rel="stylesheet" href="public/css/style.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>


  </style>
  <script>
    $(document).ready(function() {
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>

</head>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TASNIM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/ts_immo/Proprietaire/formulaire">AjoutProprietaire</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/ts_immo/Proprietaire/listProprietaire">ListeProprietaire</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<body><br><br><br>

  <div class="col-md-6 offset-md-3">
    <form method="POST" action="http://localhost/ts_immo/Proprietaire/modifier/<?= $data->getId() ?>">
      <div class="mb-3">
        <input type="hidden" name="id_proprietaire" value="<?= $data->getId() ?>" id="">
        <label for="exampleInputEmail1" class="form-label">Nom</label>
        <input type="text" class="form-control" id="nom" value="<?= $data->getNom() ?>" name="nom">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Prenom</label>
        <input type="text" class="form-control" id="prenom" value="<?= $data->getPrenom() ?>" name="prenom">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">DateNaisssance</label>
        <input type="date" class="form-control" name="dateNaissance" value="<?= $data->getDateNaissance() ?>">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Lieu de Naissance</label>
        <input type="text" class="form-control" name="lieuNaissance" value="<?= $data->getLieuNaissance() ?>" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">civile</label>
        <select name="civilite" value="<?= $data->getCivilite() ?>" class="form-control">
          <option name="civilite">-------</option>
          <option name="civilite">Marié</option>
          <option name="civilite">Divorcé</option>
          <option name="civilite">Celibataire</option>
        </select>
      </div>
      <div class="mb-3">
        <label class="form-label">Code Piece Identité</label>
        <input type="number" class="form-control" name="CodePieceIdentite" value="<?= $data->getCodePieceIdentite() ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Numero Piece d'identite</label>
        <input type="text" class="form-control" name="NumeroPieceIdentite" value="<?= $data->getNumeroPieceIdentite() ?>">
      </div>
      <input type="submit" class="button btn btn-dark" value="Modifier" name="add">
    </form>
  </div>
  <div class="col-6">
</body>

</html>