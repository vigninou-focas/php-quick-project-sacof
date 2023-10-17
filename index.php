<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <form action="enregistrement.php" method="post" class="m-5">
        <h3>SAISIE DES PROJETS</h3>
        <div class="mb-3">
            <label for="codeProjet">Code Projet</label>
            <input name="codeProjet" id="codeProjet" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="nomProjet">Nom du Projet</label>
            <input name="nomProjet" id="nomProjet" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="date">Date de lancement</label>
            <input id="date" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="durée">Durée</label>
            <input name="duree" id="durée" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="localité">Localité</label>
            <select name="localite" id="localité" type="text" class="form-select form-select-sm">
                <option value="">Localité 1</option>
            </select>
        </div>
        <div class="mt-2 btn-bloc">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <button type="reset" class="btn btn-secondary">Annuler</button>
        </div>
    </form>
</body>

</html>