<!DOCTYPE html>
<html>
    <head>
        <title>Voir annonces</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
              crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
              integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
              crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <header class="jumbotron">
                Liste des annonces
            </header>

            <div class="panel panel-default">
                <div class="panel-body">
                    <main>
                        <form method="POST">
                            <div class="form-group">
                                <label for="titre">Titre</label>
                                <input type="text" id="titre" name="titre" value="<?= $titre ?>"/>
                                <?= ($erreurs['titre'])??'' ?>
                            </div>
                            <div class="form-group">
                                <label for="contenu">Contenu:</label>
                                <textarea id="contenu" name="contenu"><?= $contenu ?></textarea>
                                <?= ($erreurs['contenu'])??'' ?>
                            </div>
                            <div class="form-group">
                                <label for="prix">Prix</label>
                                <input type="number" id="prix" name="prix" value="<?= $prix ?>"/>
                                <?= ($erreurs['prix'])??'' ?>
                            </div>

                            <button type="submit">Enregistrer</button>
                        </form>
                    </main>
                </div>
            </div>

            <footer class="well">
                Tout droits réservés
            </footer>
        </div>
    </body>
</html>