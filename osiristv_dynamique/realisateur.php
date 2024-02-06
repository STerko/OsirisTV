<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><!--Stockage mode CDN-->
        <link rel="shortcut icon" href="medias/fav.png"/>
        <title>

          <?php 
          
          $nomrealisateur2 = $_GET['nom'];
          $prenomrealisateur2 = $_GET['prenom'];
          echo($prenomrealisateur2.' '.$nomrealisateur2);
          
          ?>

          </title>
    </head>
    
    <body>

      <!--                 Barre de Navigation                 -->

      <?php require ( 'nav.php' ) ;   

      //------------------------------------------------
      //                 Connexion    
      //------------------------------------------------
      
      include_once('bdd.php');

      $connect = mysqli_connect ( SERVER , LOGIN , PASSWORD , BASE ) or die ( mysqli_connect_error($connect) ) ;

      $okcharset = mysqli_set_charset ( $connect , 'utf8' ) ;

      $Requete1 = "SELECT `nomtype` 
                  FROM `osiristv_type` 
                  ORDER BY `nomtype` " ; 

      $ResSQL1 = mysqli_query ( $connect , $Requete1 ) or die ( mysqli_error($connect) ) ;

      $NbRes1 = mysqli_num_rows ( $ResSQL1 ) ;

      //------------------------------------------------
      //                 Arborescence    
      //------------------------------------------------ 
      
      ?>


        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="p-3">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a title="Accueil" href="index.php" style="color: rgb(0, 0, 0); text-decoration: none; font-weight: bold;">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">
             
            <?php

            echo($prenomrealisateur2.' '.$nomrealisateur2);
          
            ?>

            </li>
          </ol>
        </nav>


       <?php
        
        //-----------------------------------------------------------------------------
      //                 Affichage des informations du réalisateur
      //-----------------------------------------------------------------------------  
   
    
    
        $okcharset = mysqli_set_charset ( $connect , 'utf8' ) ;

        $ido = urlencode ($_GET['idoeuvre']);
        $idrealisateur = $_GET['idrealisateur'];
    
            $Requete = "SELECT osiristv_realisateur.idr , `nom_r` , `prenom_r` , `age_r` , `nationalite_r` , `photo_r`
                        FROM `osiristv_realisateur` , `osiristv_oeuvre` , `osiristv_realise_par` 
                        WHERE osiristv_realisateur.idr = osiristv_realise_par.idr
                        AND osiristv_oeuvre.ido = osiristv_realise_par.ido
                        AND osiristv_oeuvre.ido = '$ido'"; 

    
            $ResSQL = mysqli_query ( $connect , $Requete ) or die ( mysqli_error($connect) ) ;
    
            $NbRes = mysqli_num_rows ( $ResSQL ) ;

            for ( $i = 1 ; $i <= $NbRes ; $i++ ) {
    
                $tab = mysqli_fetch_array ( $ResSQL ) ;
                $idr = $tab['idr'];
                $nomrealisateur1 = urlencode($tab['nom_r']);
                $prenomrealisateur1 = urlencode($tab['prenom_r']);
                $agerealisateur = $tab['age_r'];
                $nationaliterealisateur = $tab['nationalite_r'];
                $photorealisateur = $tab['photo_r'];

    
                echo ('<div class="card mb-3 p-5" style="max-width: 100%; border-style: none;">
                <div class="row g-0">
                  <div class="col-md-3">
                      <a title="'.$prenomrealisateur2.' '.$nomrealisateur2.'" href="realisateur.php?idoeuvre='.$ido.'&idrealisateur='.$idr.'&prenom='.$prenomrealisateur1.'&nom='.$nomrealisateur1.'"><img src="medias/realisateurs/'.$photorealisateur.'.jpg" class="img-fluid rounded-start" alt="'.$prenomrealisateur2.' '.$nomrealisateur2.'"></a>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h2 class="card-title" style="color: rgb(0, 0, 0); text-decoration: none; font-weight: bold;">'.$prenomrealisateur2.' '.$nomrealisateur2.'</h2>
                      
                      <br> 
      
                      <h5>Informations :</h5>
      
                      <p>Age : '.$agerealisateur.' ans</p>
      
                      <p>Nationalité : '.$nationaliterealisateur.'</p>
                
                     </div>
                  </div>
                </div>
              </div>
      
              <hr>');
            }
            
    
        
        //-----------------------------------------------------------------------------
        //                 Affichage des films que la personne a réalisé     
        //-----------------------------------------------------------------------------         
    
    
        $okcharset = mysqli_set_charset ( $connect , 'utf8' ) ;
    
            $Requete = "SELECT osiristv_oeuvre.ido , `titre` , `image`
                        FROM `osiristv_realisateur` , `osiristv_oeuvre` , `osiristv_realise_par` 
                        WHERE osiristv_realisateur.idr = osiristv_realise_par.idr
                        AND osiristv_oeuvre.ido = osiristv_realise_par.ido
                        AND osiristv_realisateur.idr = '$idr'"; 

    
            $ResSQL = mysqli_query ( $connect , $Requete ) or die ( mysqli_error($connect) ) ;
    
            $NbRes = mysqli_num_rows ( $ResSQL ) ;
    
            

            echo ('<main class="container">
        
            <h2 style="text-align: center;">A réalisé le(s) film(s) :</h2>

            <div class="row justify-content-md-center p-2">');



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
    
    
        $ok = mysqli_free_result ( $ResSQL ) ;
    
        $ok = mysqli_close ( $connect ) ;
        
    
      ?>


        <!--                 Footer                -->

        <footer class="py-3 my-4 border-top">
          <p>&copy; Terkowsky Sarah</p>
        </footer>


      </main>

      <!--                 Stockage mode CDN                 -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      </body>
</html>