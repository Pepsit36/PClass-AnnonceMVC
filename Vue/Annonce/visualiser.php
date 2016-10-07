<!DOCTYPE html>
<html>
    <head>
        <title>Voir annonce</title>

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
                        <h2>Titre</h2>
                        <p><?= $annonce['titre'] ?></p>
                        <h2>Prix</h2>
                        <p><?= $annonce['prix'] ?></p>
                        <h2>Date Publication</h2>
                        <p><?= $annonce['datePublication']->diff(new DateTime())->days ?></p>
                        <h2>Annonce</h2>
                        <p><?= $annonce['contenu'] ?></p>
                    </main>
                </div>
            </div>

            <footer class="well">
                Tout droits réservés
            </footer>
        </div>
    </body>
</html>