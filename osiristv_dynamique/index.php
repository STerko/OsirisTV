<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><!--Stockage mode CDN-->
      <link rel="shortcut icon" href="medias/fav.png"/>
      <title>Accueil</title>
  </head>

  <body>

    <!--                 Barre de Navigation                 -->

    <?php require ( 'nav.php' ) ; ?>

    <!--                 Arborescence                 -->

    <nav aria-label="breadcrumb" class="p-3">
      <ol class="breadcrumb ">
        <li class="breadcrumb-item active" aria-current="page">Accueil</li>
      </ol>
    </nav>

    <!--                 Fenêtre de présentation du site                 -->

    <main class="container">

      <div class="bg-light p-5 rounded">
        <h1><a title="Accueil" href="index.php" >
        <img src="medias/Logo_OsirisTV2.png" alt="Logo OsirisTV" width="100" height="75"></a>Bienvenue sur Osiris TV</h1>
        <p class="lead">Le site de streaming idéal pour regarder vos films préférés. Bon visionnage !</p>
      </div>

      <!--                 Carousel affichant les infos minimales des dix premières œuvres rangées par ordre alphabétique de leur titre et avec une limite du nombre de réponses commençant à 0 et affichant jusqu’à la 10ème œuvre               -->

<?php

      //------------------------------------------------
      //                 Connexion    
      //------------------------------------------------

      $okcharset = mysqli_set_charset ( $connect , 'utf8' ) ;

      $Requete = "SELECT `titre` , `banniere` , `ido`
                  FROM `osiristv_oeuvre` 
                  ORDER BY `titre`
                  LIMIT 0 , 10"; 

      $ResSQL = mysqli_query ( $connect , $Requete ) or die ( mysqli_error($connect) ) ;

      $NbRes = mysqli_num_rows ( $ResSQL ) ;

    echo('<div id="carouselExampleDark" class="carousel slide w-50 mx-auto" data-bs-ride="carousel">
    <div class="carousel-indicators">' ) ;


    for ($i = 0 ; $i < $NbRes ; $i++) {
      
        if ($i == 0){

          echo('<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="'.$i.'" class="active" aria-current="true" aria-label="Slide"></button>');
     
        }else{
          
          echo ( '<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="'.$i.'" aria-label="Slide"></button>' ) ;  
        
        }
    } 
   

   echo ( ' </div>
              <div class="carousel-inner">') ;

    for ($i = 0 ; $i < $NbRes ; $i ++) {

      $tab = mysqli_fetch_array ( $ResSQL ) ;
      $titre1 = urlencode($tab['titre']);
      $titre2 = $tab['titre'];
      $banniere = $tab['banniere'] ;
      $ido = $tab['ido'];

      if($i == 0){

        echo (' <div class="carousel-item active" data-bs-interval="10000">
            <a title="'.$titre2.'" href="oeuvre.php?idoeuvre='.$ido.'&titre='.$titre1.'" style="color: white; text-decoration: none;">
              <img src="medias/bannieres/'.$banniere.'" class="d-block w-100" alt="'.$titre2.'">
              <div class="carousel-caption d-none d-md-block">
                <h5>'.$titre2.'</h5>
              </div>
            </a>
          </div>' ) ;

      }else{

        echo (' <div class="carousel-item">
            <a title="'.$titre2.'" href="oeuvre.php?idoeuvre='.$ido.'&titre='.$titre1.'" style="color: white; text-decoration: none;">
              <img src="medias/bannieres/'.$banniere.'" class="d-block w-100" alt="'.$titre2.'">
              <div class="carousel-caption d-none d-md-block">
                <h5>'.$titre2.'</h5>
              </div>
            </a>
          </div>' ) ;
      }
        
    }
        echo ('
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Précédent</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Suivant</span>
      </button>
    </div>');

      //-----------------------------------------------------------------------------
      //                 Affichage d'informations du site
      //-----------------------------------------------------------------------------      

      echo('<div class="bg-light p-5 rounded">
        <h2>Que proposons nous?</h2>
        <p class="lead">Osiristv est un site de streaming 100% gratuit accessible depuis plusieurs supports tel que votre ordinateur, votre tablette ou encore votre smartphone. Profitez donc de votre support préféré avec nos films disponibles en HD.</p>
      </div>');

      //-------------------------------------------------------------------------------------------------------------------------------------------------------------------------
      //                 Affichage de films rangés par leur ido et avec une limite du nombre de réponses commençant à 0 et affichant jusqu’au 6 ème film
      //-------------------------------------------------------------------------------------------------------------------------------------------------------------------------    

      echo('<h2>Séléction de films pouvant vous intéresser :</h2>


      <div class="row justify-content-md-center p-2">');



      $okcharset = mysqli_set_charset ( $connect , 'utf8' ) ;

      $Requete = "SELECT `ido` , `titre` , `image` 
                  FROM `osiristv_oeuvre` , `osiristv_type` 
                  WHERE osiristv_type.idt = osiristv_oeuvre.idt 
                  AND osiristv_type.idt = 1 
                  ORDER BY `ido`
                  LIMIT 0 , 6" ; 

      $ResSQL = mysqli_query ( $connect , $Requete ) or die ( mysqli_error($connect) ) ;

      $NbRes = mysqli_num_rows ( $ResSQL ) ;

    

        for ( $i = 1 ; $i <= $NbRes ; $i++ ) {

            $tab = mysqli_fetch_array ( $ResSQL ) ;
            $titre1 = urlencode($tab['titre']);
            $titre2 = $tab['titre'];
            $image = $tab['image'];
            $ido = $tab['ido'];
    
          echo ('<div class="col-sm-2 col-md--4">
          <div class="card text-center text-white bg-dark mb-3">
            <a title="'.$titre2.'" href="oeuvre.php?idoeuvre='.$ido.'&titre='.$titre1.'" style="color: white; text-decoration: none;">
              <img src="medias/affiches/'.$image.'.jpg" class="card-img-top" alt="'.$titre2.'">
              <div class="card-body">
                <p class="card-text">'.$titre2.'</p>
              </div>
            </a>
          </div>
        </div>');
        
      }
      
      echo('</div>');

      //-------------------------------------------------------------------------------------------------------------------------------------------------------------------------
      //                 Affichage de dessins-animés rangés par leur ido et avec une limite du nombre de réponses commençant à 0 et affichant jusqu’au 6 ème dessin-animé
      //----------------------------------------------------------------------------- --------------------------------------------------------------------------------------------     
  
          
      echo('<h2>Séléction de dessins-animés pouvant vous intéresser :</h2>
      
      <div class="row justify-content-md-center p-2">');

    $okcharset = mysqli_set_charset ( $connect , 'utf8' ) ;

    $Requete = "SELECT `ido` , `titre` , `image` 
                FROM `osiristv_oeuvre` , `osiristv_type` 
                WHERE osiristv_type.idt = osiristv_oeuvre.idt
                AND osiristv_type.idt = 2
                ORDER BY `ido`
                LIMIT 0 , 6"; 

    $ResSQL = mysqli_query ( $connect , $Requete ) or die ( mysqli_error($connect) ) ;

    $NbRes = mysqli_num_rows ( $ResSQL ) ;

      for ( $i = 1 ; $i <= $NbRes ; $i++ ) {

          $tab = mysqli_fetch_array ( $ResSQL ) ;
          $titre1 = urlencode($tab['titre']);
          $titre2 = $tab['titre'];
          $image = $tab['image'];
          $ido = $tab['ido'];
      
        echo ('<div class="col-sm-2 col-md--4">
        <div class="card text-center text-white bg-dark mb-3">
          <a title="'.$titre2.'" href="oeuvre.php?idoeuvre='.$ido.'&titre='.$titre1.'" style="color: white; text-decoration: none;">
            <img src="medias/affiches/'.$image.'.jpg" class="card-img-top" alt="'.$titre2.'">
            <div class="card-body">
              <p class="card-text">'.$titre2.'</p>
            </div>
          </a>
        </div>
      </div>');
      
      }


      echo('</div>');

      //-------------------------------------------------------------------------------------------------------------------------------------------------------------------------
      //                 Affichage d'acteurs rangés par leur ida et avec une limite du nombre de réponses commençant à 0 et affichant jusqu’au 6 ème acteur
      //-------------------------------------------------------------------------------------------------------------------------------------------------------------------------               

      echo('<h2>Acteurs Star de cette semaine :</h2>

      <div class="row justify-content-md-center p-2">');


    $okcharset = mysqli_set_charset ( $connect , 'utf8' ) ;

    $Requete = "SELECT `noma` , `prenoma` , `photo_a` , osiristv_acteur.ida , osiristv_oeuvre.ido
                FROM `osiristv_acteur` , `osiristv_oeuvre` , `osiristv_joue_par` 
                WHERE osiristv_acteur.ida = osiristv_joue_par.ida
                AND osiristv_oeuvre.ido = osiristv_joue_par.ido
                ORDER BY osiristv_acteur.ida
                LIMIT 0 , 6"; 

    $ResSQL = mysqli_query ( $connect , $Requete ) or die ( mysqli_error($connect) ) ;

    $NbRes = mysqli_num_rows ( $ResSQL ) ;

    for ( $i = 1 ; $i <= $NbRes ; $i++ ) {

        $tab = mysqli_fetch_array ( $ResSQL ) ;
        $nomacteur1 = urlencode($tab['noma']);
        $nomacteur2 = $tab['noma'];
        $prenomacteur1 = urlencode($tab['prenoma']);
        $prenomacteur2 = $tab['prenoma'];
        $photoacteur = $tab['photo_a'];
        $ida = $tab['ida'];
        $ido = $tab['ido'];

      echo ('<div class="col-sm-2 col-md--4">
      <div class="card text-center text-white bg-dark mb-3">
        <a title="'.$prenomacteur2.' '.$nomacteur2.'" href="acteur.php?idoeuvre='.$ido.'&idacteur='.$ida.'&prenom='.$prenomacteur1.'&nom='.$nomacteur1.'" style="color: white; text-decoration: none;">
          <img src="medias/acteurs/'.$photoacteur.'.jpg" class="card-img-top" alt="'.$prenomacteur2.' '.$nomacteur2.'">
          <div class="card-body">
            <p class="card-text">'.$prenomacteur2.' '.$nomacteur2.'</p>
          </div>
        </a>
      </div>
      </div>');

    }echo('</div>');

      $ok = mysqli_free_result ( $ResSQL ) ;

      $ok = mysqli_close ( $connect ) ;


      ?>

      <hr>

      <!--                 Footer                 -->

      <footer class="py-3 my-4 border-top">
        <p>&copy; Terkowsky Sarah</p>
      </footer>


    </main>

    <!--                 Stockage mode CDN                 -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html> 