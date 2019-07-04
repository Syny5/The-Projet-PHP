<?php // On charge l'élément XML présent dans le dossier.
    $xml = simplexml_load_file('source.xml');
    // On récupère l'ID des pages
    $id = $_GET['id'];
    // On affiche le contenu des pages en fonction de l'ID.
    $display = $xml->page[$id - 1]; // Les pages commencent à 1, et l'index commence à 0.
    if (!$display){
        $display = $xml->page[0]; // Si notre utilisateur joue avec l'url, il est renvoyé vers la page d'accueil.
    }
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Philosopher&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=IM+Fell+English+SC&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/lux/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/mickael.css">
      <link rel="stylesheet" href="assets/css/sonia.css">
      <link rel="stylesheet" href="assets/css/victor.css">
      <title><?= $display->title ?></title>
  </head>
  <body>
    <!-- Entête -->
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <a class="mt-1" id="logo" href="1.html">MAÇONNERIE OCORDO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mr-auto">
                <?php // On crée une boucle pour l'affichage du menu
                    foreach ($xml as $pages) {
                ?>
                    <li class="nav-item">
                        <?php if($pages['id']>1){ // Avec cette condition, nous retirons "accueil" des menus affichés. Ceci afin de le renommer à notre façon et de le sortir du menu burger.' ?>
                        <a class="nav-link" href="<?= $pages['id'] ?>.html"><?= $pages->menu ?></a>
                        <?php } ?>
                    </li>
                <?php } ?>
            </ul>
        </div>
      </nav>
    </header>
    <!-- Conteneur principal -->
    <div class="container-fluid">
      <!-- Contenu principal - Corps de la page -->
      <main>
        <div class="d-flex flex-column">
        <?= $display->content // On affiche le contenu, chaque contenu d'un menu étant à l'intérieur d'une balise "content". ?>
        </div>
      </main>
    </div>
    <!-- Pied de page -->
    <footer>

    </footer>
    <!-- scripts JQuery, Popper, Angular et Bootstrap-->
    <script src="assets/js/jquery-3.4.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- mon script principal -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
