<?php
    $xml = simplexml_load_file('source.xml');
    $id = $_GET['id'];
    $display = $xml->page[$id - 1];
    if (!$display){
        $display = $xml->page[0];
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
      <link rel="stylesheet" href="assets/css/mickael.css">
      <link rel="stylesheet" href="assets/css/sonia.css">
      <link rel="stylesheet" href="assets/css/victor.css">
      <link rel="stylesheet" href="assets/css/romain.css">
      <title><?= $display->title ?></title>
  </head>
  <body>
    <!-- Entête -->
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-dark d-flex justify-content-between">
        <div class="">
          <a id="logo" href="index.php">Maçonnerie Ocordo</a>
        </div>
        <div class="">
          <?php
            $xml = simplexml_load_file('source.xml');
            $id = $_GET['id'];
            foreach ($xml as $pages){
          ?>
          <?php if($pages['id']>1){ ?>
          <a href="index.php?id=<?= $pages['id'] ?>"><?= $pages->menu ?></a>
          <?php } ?>
          <?php } ?>
        </div>
      </nav>
    </header>
    <!-- Conteneur principal -->
    <div class="container-fluid">
      <!-- Contenu principal - Corps de la page -->
      <main>
        <div class="d-flex flex-column">
        <?= $display->content ?>
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
