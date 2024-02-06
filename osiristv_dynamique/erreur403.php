<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><!--Stockage mode CDN-->
      <link rel="shortcut icon" href="medias/fav.png"/>
      <title>Erreur403</title>
  </head>

    

  <body>

    <!--                 Barre de Navigation                 -->

    <?php require ( 'nav.php' ) ; ?>

    <!--                 Arborescence                 -->

    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="p-3">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a title="Accueil" href="index.html" style="color: rgb(0, 0, 0); text-decoration: none; font-weight: bold;">Accueil</a></li>
        <li class="breadcrumb-item active" aria-current="page">Erreur403</li>
      </ol>
    </nav>

    <!--                 Affichage de l'errreur 403                 -->

    <main class="container">


    <a title="Erreur403" href="erreur403.php"><img src="medias/403.png" class="rounded mx-auto d-block" alt="erreur 403"></a>


    <h2>Stop! L'accès à cette page est interdit aux visiteurs. Merci de bien vouloir revenir à la page d'accueil.</h2>

    <br>

    <!--                 Bouton de retour vers l'accueil               -->
    
    <div class="d-grid gap-2 d-md-flex p-3 justify-content-md-center">
      <a class="btn btn-dark btn-lg btn-outline-danger" title="Accueil" href="index.php" style="color: rgb(255, 255, 255); text-decoration: none; font-weight: bold;" role="button">Accueil</a>
    </div>

    <!--                Footer                -->

    <footer class="py-3 my-4 border-top">
      <p>&copy; Terkowsky Sarah</p>
    </footer>

    </main>

    <!--                 Stockage mode CDN                 -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
  
</html>
