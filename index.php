<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/mickael.css">
      <link rel="stylesheet" href="assets/css/sonia.css">
      <link rel="stylesheet" href="assets/css/victor.css">
      <link rel="stylesheet" href="assets/css/romain.css">
      <title>Projet PHP</title>
  </head>
  <body>
      <!-- Conteneur principal -->
      <div class="container-fluid">
          <!-- Entête -->
          <header>

          </header>
          <!-- Contenu principal - Corps de la page -->
          <main>
            <?php
              $fichier = 'source.xml'; //recupération du ficher dans une variable
              $xml = simplexml_load_file($fichier); //chargement du fichier
              foreach($xml as $pages){
              echo $pages->menu;
              echo $pages->title;
              echo $pages->content;
              }
            ?>
          </main>
          <!-- Pied de page -->
          <footer>

          </footer>
      </div>
      <!-- scripts JQuery, Popper, Angular et Bootstrap-->
      <script src="assets/js/jquery-3.4.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- mon script principal -->
      <script src="assets/js/main.js"></script>
  </body>
</html>
