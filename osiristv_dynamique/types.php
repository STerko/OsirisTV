<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="shortcut icon" href="medias/fav.png"/>
        <title>
          
          <?php 
          
          $nomtype2 = $_GET['nomtype'];
          echo($nomtype2);
          
          ?>

          </title>
    </head>
   

    <body>

      <!--                 Barre de Navigation                -->

      <?php 
      
      
      require ( 'nav.php' ) ;

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

            $nomtype = $_GET['nomtype'];
            echo($nomtype);
          
            ?>

            </li>
          </ol>
        </nav>
  
        <?php
  
        
      //-----------------------------------------------------------------------------
      //           Affichage de toutes les oeuvres appartenant au type choisi
      //-----------------------------------------------------------------------------  

        
        
        echo('<main class="container">

          <h2>Voici donc la séléction de '.$nomtype.'(s) qui sont disponibles pour le moment :</h2>
            
          <hr>
          <br>
    

          <div class="row">

            <div class="row justify-content-md-center p-2">');


        
            
        $idtype = $_GET['idtype'];

        $Requete = "SELECT `titre`,`image`, osiristv_oeuvre.ido 
                    FROM `osiristv_oeuvre`,`osiristv_type`
                    WHERE osiristv_type.idt = osiristv_oeuvre.idt
                    AND osiristv_type.idt = '$idtype'
                    ORDER BY `titre` " ;

        $ResSQL = mysqli_query ( $connect , $Requete ) or die ( mysqli_error($connect) ) ;

        $NbRes = mysqli_num_rows ( $ResSQL );

        for($i = 0 ; $i < $NbRes ; $i ++){

        $tab = mysqli_fetch_array ( $ResSQL ) ;
        $ido = urlencode($tab['ido']);
        $titre1 = urlencode($tab['titre']);
        $titre2 = $tab['titre'];
        $image = $tab['image'];

          echo('<div class="col-sm-3 col-md--4">
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

        echo('</div>
          </div>');

        $ok = mysqli_free_result ( $ResSQL ) ;

        $ok = mysqli_close ( $connect ) ;
              
      ?>

          <!--                 Footer               -->

          <footer class="py-3 my-4 border-top">
            <p>&copy; Terkowsky Sarah</p>
          </footer>

         
        </main>

        <!--                 Stockage mode CDN                 -->


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
    
</html>