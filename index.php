<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
            <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-around">
              <?php
                $xml = simplexml_load_file('source.xml');
                $id = $_GET['id'];
                foreach ($xml as $pages) {
              ?>
                    <a href="index.php?id=<?= $pages['id'] ?>"><?= $pages->menu ?></a>
              <?php } ?>
            </nav>
            <?php
              echo '<br>';
              switch ($id) {
                  case 1:
                      echo $xml->page[0]->title;
                      echo $xml->page[0]->content;
                      break;
                  case 2:
                      echo $xml->page[1]->title;
                      echo $xml->page[1]->content;
                      break;
                  case 3:
                      echo $xml->page[2]->title;
                      echo $xml->page[2]->content;
                      break;
                  case 4:
                      echo $xml->page[3]->title;
                      echo $xml->page[3]->content;
                      break;
                  default:
                      echo $xml->page[0]->title;
                      echo $xml->page[0]->content;
                      break;
              }
            ?>
          </header>
          <!-- Contenu principal - Corps de la page -->
          <main>

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
