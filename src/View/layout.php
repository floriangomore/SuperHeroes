<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/public/style/style.css">

    <title>Super Hero Land</title>
</head>
<body>

<header>
    <h1>Bienvenue dans un monde de super heros</h1>
</header>
<hr>
<nav class="btn-group">
  <a href="<?= '/index.php/' ?>" class="btn btn-default">Accueil</a>
  <a href="<?= '/index.php/power/getAll' ?>" class="btn btn-default">Liste des pouvoirs</a>
  <a href="<?= '/index.php/team/getAll' ?>" class="btn btn-default">Liste des teams</a>
  <a href="<?= '/index.php/hero/getAll' ?>" class="btn btn-default">Liste des héros</a>
</nav>
<hr>
<main>

    <div>
        <?php echo $content ?>
    </div>
</main>
<hr>
<footer>
    tous droits réservés pour IMIE
</footer>
</body>
</html>