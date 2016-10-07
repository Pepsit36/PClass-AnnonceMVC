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
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Titre</th>
                                    <th>Prix</th>
                                    <th>Date Publication</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                foreach ($annonces as $annonce) {
                                    ?>
                                    <tr>
                                        <td>
                                            <a href="?controller=Annonce&&action=visualiser&&id=<?= $annonce['id'] ?>"><?= $annonce['titre'] ?></a>
                                        </td>
                                        <td><?= $annonce['prix'] ?></td>
                                        <td><?= $annonce['datePublication']->diff(new DateTime())->days ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </main>
                </div>
            </div>

            <footer class="well">
                Tout droits réservés
            </footer>
        </div>
    </body>
</html>