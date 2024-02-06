<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><!--Stockage mode CDN-->
        <link rel="shortcut icon" href="medias/fav.png"/>
        <title>

          <?php 
          
            $titre1 = $_GET['titre'];
            echo($titre1);
          
          ?>

        </title>
    </head>
    
    <body>

      <!--                 Barre de Navigation                 -->

      <?php   require ( 'nav.php' ) ;

          

      //------------------------------------------------
      //                 Connexion    
      //------------------------------------------------
      
      include_once('bdd.php');

      $connect = mysqli_connect ( SERVER , LOGIN , PASSWORD , BASE ) or die ( mysqli_connect_error($connect) ) ;

        $okcharset = mysqli_set_charset ( $connect , 'utf8' ) ;

        $Requete1 = "SELECT `titre` 
                     FROM `osiristv_oeuvre` " ; 

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
              
            echo($titre1);

            ?>
          
          </li>
          </ol>
        </nav>

        <?php

        //------------------------------------------------------------------------------
        //                 Affichage des informations du film                 
        //------------------------------------------------------------------------------

      

      $oeuvre = $_GET['idoeuvre'];

      $Requete2 = "SELECT *
                  FROM `osiristv_oeuvre` 
                  WHERE osiristv_oeuvre.ido = '$oeuvre' " ;
      
      $ResSQL2 = mysqli_query ( $connect , $Requete2 ) or die ( mysqli_error($connect) ) ;

      $tab2 = mysqli_fetch_array ( $ResSQL2 ) ;
      $titre2 = urlencode ($_GET['titre']);
      $image = $tab2['image'] ;
      $age_requis = $tab2['age_requis'] ;
      $synopsis = $tab2['synopsis'] ;
      $duree = $tab2['duree'] ;
      $annee = $tab2['annee'] ;
      $bande_annonce = $tab2['bande_annonce'];
      $note_presse = $tab2['note_presse'];
      $source = $tab2['source_note_presse'];
      $long = $tab2['longueur_be'];
      $note_global = $tab2['note_global'];

      //-----------------------------------------------------------------------------
      //                 Requête pour l'affichage des informations de l'acteur
      //-----------------------------------------------------------------------------

      $Requete3 ="SELECT `noma` , `prenoma` , osiristv_acteur.ida , osiristv_oeuvre.ido
                  FROM `osiristv_acteur` , `osiristv_oeuvre` , `osiristv_joue_par` 
                  WHERE osiristv_acteur.ida = osiristv_joue_par.ida
                  AND osiristv_oeuvre.ido = osiristv_joue_par.ido
                  AND osiristv_oeuvre.ido = '$oeuvre' " ;
      
      $ResSQL3 = mysqli_query ( $connect , $Requete3 ) or die ( mysqli_error($connect) ) ;
      $NbRes3 = mysqli_num_rows ( $ResSQL3 );

      //-----------------------------------------------------------------------------
      //                 Requête pour l'affichage des informations du réalisateur
      //-----------------------------------------------------------------------------

      $Requete4 ="SELECT `nom_r` , `prenom_r` , osiristv_realisateur.idr , osiristv_oeuvre.ido
                  FROM `osiristv_realisateur` , `osiristv_oeuvre` , `osiristv_realise_par` 
                  WHERE osiristv_realisateur.idr = osiristv_realise_par.idr
                  AND osiristv_oeuvre.ido = osiristv_realise_par.ido
                  AND osiristv_oeuvre.ido = '$oeuvre' " ;
      
      $ResSQL4 = mysqli_query ( $connect , $Requete4 ) or die ( mysqli_error($connect) ) ;

      $tab4 = mysqli_fetch_array ( $ResSQL4 ) ;
      $nomrealisateur1 = urlencode ($tab4['nom_r']) ;
      $nomrealisateur2 = $tab4['nom_r'] ;
      $prenomrealisateur1 = urlencode ($tab4['prenom_r']) ;
      $prenomrealisateur2 = $tab4['prenom_r'] ;
      $idr = $tab4['idr'];
      $ido = $tab4['ido'];

      //---------------------------------------------------------------------------------------------------------------------------
      //                 Requête pour l'affichage des pays de production d’une œuvre choisie par l’utilisateur
      //---------------------------------------------------------------------------------------------------------------------------

      $Requete5 ="SELECT `nompays`
                  FROM `osiristv_pays` , `osiristv_produit` , `osiristv_oeuvre`
                  WHERE osiristv_pays.idpays = osiristv_produit.idpays
                  AND osiristv_oeuvre.ido = osiristv_produit.ido
                  AND osiristv_oeuvre.ido = '$oeuvre'  
                  ORDER BY `nompays` ";
      
      $ResSQL5 = mysqli_query ( $connect , $Requete5 ) or die ( mysqli_error($connect) ) ;      

      $NbRes5 = mysqli_num_rows ( $ResSQL5 );

      //-------------------------------------------------------------------------------------------------------------------------------------------------------------------------
      //             Requête pour l'affichage des genres d’une œuvre choisie par l’utilisateur et rangés par ordre alphabétique de leur nom
      //-------------------------------------------------------------------------------------------------------------------------------------------------------------------------

      $Requete6 ="SELECT `nomgenre` , osiristv_genre.idg
                  FROM `osiristv_genre` , `osiristv_appartient` , `osiristv_oeuvre`
                  WHERE osiristv_genre.idg = osiristv_appartient.idg
                  AND osiristv_oeuvre.ido = osiristv_appartient.ido
                  AND osiristv_oeuvre.ido = '$oeuvre'
                  ORDER BY `nomgenre`";

      $ResSQL6 = mysqli_query ( $connect , $Requete6 ) or die ( mysqli_error($connect) ) ;

      $NbRes6 = mysqli_num_rows ( $ResSQL6 );

      //-----------------------------------------------------------------------------
      //                  Afficahge du titre de l'oeuvre choisi
      //-----------------------------------------------------------------------------

        echo('<div class="card mb-3 p-5" style="max-width: 100%; border-style: none;">
          <div class="row g-0">
            <div class="col-md-3">
                <a title="'.$titre1.'" href="oeuvre.php?idoeuvre='.$ido.'&titre='.$titre2.'"> <img src="medias/affiches/'.$image.'.jpg" class="img-fluid rounded-start" alt="'.$titre1.'"></a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h2 class="card-title" style="color: rgb(0, 0, 0); text-decoration: none; font-weight: bold;">'.$titre1);

                //-----------------------------------------------------------------------------
                //    Condition IF pour l'age requis , n'affiche pas si l'age requis < 10
                //-----------------------------------------------------------------------------
                
                if($age_requis >= 10){

                  echo(' <span class="badge bg-dark">-'.$age_requis.'</span>');

                }else{
                
                  echo('</h2>');

                }

                //-----------------------------------------------------------------------------
                //                Affichage du synopsis et du réalisateur
                //-----------------------------------------------------------------------------
                
                 
                echo('<h5> Synopsis :</h5>

                <p>'.$synopsis.'</p>
                
                <p class="card-text">De <a title="'.$prenomrealisateur2.' '.$nomrealisateur2.'" href="realisateur.php?idoeuvre='.$ido.'&idrealisateur='.$idr.'&prenom='.$prenomrealisateur1.'&nom='.$nomrealisateur1.'" style="color: rgb(0, 0, 0); text-decoration: none; font-weight: bold;">'.$prenomrealisateur2.' '.$nomrealisateur2.'</a> avec ');


                //-----------------------------------------------------------------------------
                //    Condition IF / ELSE pour afficher les deux acteurs si ils sont 2
                //-----------------------------------------------------------------------------


                if($NbRes3 > 1){
                  
                  for($a = 0 ; $a < $NbRes3 ; $a++){

                    $tab3 = mysqli_fetch_array ( $ResSQL3 ) ;
                    $nomacteur1 = urlencode($tab3['noma']) ;
                    $nomacteur2 = $tab3['noma'] ;
                    $prenomacteur1 = urlencode($tab3['prenoma']) ;
                    $prenomacteur2 = $tab3['prenoma'] ;
                    $ida = $tab3['ida'];
                    $ido = $tab3['ido'];

                    echo('<a title="'.$prenomacteur2.' '.$nomacteur2.'" href="acteur.php?idoeuvre='.$ido.'&idacteur='.$ida.'&prenom='.$prenomacteur1.'&nom='.$nomacteur1.'" style="color: rgb(0, 0, 0); text-decoration: none; font-weight: bold;">'.$prenomacteur2.' '.$nomacteur2.'</a>, ');

                  }

                  echo('</p>');

                }else{

                  $tab3 = mysqli_fetch_array ( $ResSQL3 ) ;
                  $nomacteur1 = urlencode($tab3['noma']) ;
                  $nomacteur2 = $tab3['noma'] ;
                  $prenomacteur1 = urlencode($tab3['prenoma']) ;
                  $prenomacteur2 = $tab3['prenoma'] ;
                  $ida = $tab3['ida'];
                  $ido = $tab3['ido'];

                  echo('<a title="'.$prenomacteur2.' '.$nomacteur2.'" href="acteur.php?idoeuvre='.$ido.'&idacteur='.$ida.'&prenom='.$prenomacteur1.'&nom='.$nomacteur1.'" style="color: rgb(0, 0, 0); text-decoration: none; font-weight: bold;">'.$prenomacteur2.' '.$nomacteur2.'</a></p>');
                
                }

                //-----------------------------------------------------------------------------
                //      Affichage de l'année de production et la durée de l'oeuvre
                //-----------------------------------------------------------------------------
                

                echo('<p class="card-text">Date : '.$annee.' / Durée : '.$duree.' min</p>
                <p class="card-text">Pays de production : ');
                
                //-----------------------------------------------------------------------------
                //    Condition IF / ELSE pour affciher les différents pays de production
                //-----------------------------------------------------------------------------
                
                if( $NbRes5 > 1 ){

                  for($p = 0 ; $p < $NbRes5 ; $p++){

                    $tab5 = mysqli_fetch_array ( $ResSQL5 ) ;
                    

                    echo($tab5['nompays'].' / ');

                  }

                }else{

                  $tab5 = mysqli_fetch_array ( $ResSQL5 ) ;
                  
                  echo($tab5['nompays'].'</p>');

                }echo('<h5>');


                //-----------------------------------------------------------------------------
                //         Boucle FOR pour afficher tous les genres d'une oeuvre
                //-----------------------------------------------------------------------------


                  for($g = 0 ; $g < $NbRes6 ; $g++ ){
                    
                    $tab6 = mysqli_fetch_array ( $ResSQL6 ) ;
                    $idgenre = $tab6['idg'];
                    $nomgenre1 = urlencode($tab6['nomgenre']);
                    $nomgenre2 = $tab6['nomgenre'];
                    
                    echo('
                    
                    <a title="'.$nomgenre2.'" href="genres.php?idgenre='.$idgenre.'&nomgenre='.$nomgenre1.'"><span class="badge bg-secondary">'.$nomgenre2.'</span></a>
                    
                    ');
    
                  }

                echo('</h5>

                <br>');
                
                
                
        //------------------------------------------------------------------------------
        //                 Affichage des boutons des fenêtres modals              
        //------------------------------------------------------------------------------       
                  
                
                echo('<button type="button" class="btn btn-dark btn-lg" data-bs-toggle="modal" data-bs-target="#m1" style="color: rgb(255, 255, 255); text-decoration: none; font-weight: bold;">Bande annonce</button>
                <button type="button" class="btn btn-dark btn-lg" data-bs-toggle="modal" data-bs-target="#m2" style="color: rgb(255, 255, 255); text-decoration: none; font-weight: bold;">Note presse</button>
                
               </div>
            </div>
          </div>
        </div>

        <hr>');

        //------------------------------------------------------------------------------
        //                 Affichage du faux lecteur              
        //------------------------------------------------------------------------------   

        echo('<main class="container">
        
        <h2 style="text-align: center;">Regarder en Full HD</h2>
        <p class="text-center"><span class="fs-3 text-muted">Merci de bien vouloir vous inscrire afin de pouvoir regarder le film en entier.</span></p>

        <div class="card mb-3 p-5" style="max-width: 100%; border-style: none; align-items: center;">
          <div class="row g-0">
             <img src="medias/lecteur.jpg" class="img-fluid rounded-start" alt="Leceteur">
          </div>
        </div>

        <hr>');


        //---------------------------------------------------------------------------------------------------------
        //              Requête pour l'affichage des commentaires d’une œuvre et rangés par leur idc            
        //---------------------------------------------------------------------------------------------------------
        
        $Requete7 ="SELECT `pseudonyme` ,  `email` , `pdp` , `commentaire` , `date` , `note` 
                    FROM `osiristv_commente` , `osiristv_utilisateur` , `osiristv_oeuvre`
                    WHERE osiristv_utilisateur.idu = osiristv_commente.idu
                    AND osiristv_oeuvre.ido = osiristv_commente.ido
                    AND osiristv_oeuvre.ido = '$oeuvre'
                    ORDER BY `idc`";

        $ResSQL7 = mysqli_query ( $connect , $Requete7 ) or die ( mysqli_error($connect) ) ;

        $NbRes7 = mysqli_num_rows ( $ResSQL7 );

        
        echo('<h2 class="p-5">Commentaires :</h2>');

        //-----------------------------------------------------------------------------
        //        CBoucle FOR pour afficher les commentaires de l'oeuvre
        //-----------------------------------------------------------------------------

        for($c = 0 ; $c < $NbRes7 ; $c++ ){

        $tab7 = mysqli_fetch_array ( $ResSQL7 ) ;
        $pseudonyme = $tab7['pseudonyme'] ;
        $email = $tab7['email'] ;
        $pdp = $tab7['pdp'];
        $commentaire = $tab7['commentaire'];
        $date = $tab7['date'];
        $note = $tab7['note'];


        //------------------------------------------------------------------------------------------------------------
        //    Condition IF pour la barre de progrès qui change de couleur en fonction de la note globale
        //------------------------------------------------------------------------------------------------------------


        if ($note_global <= 2 ){

          $couleur = 'danger';  
        }
        elseif($note_global > 2 && $note_global <= 4){

          $couleur = 'warning';
        }
        else {

          $couleur = 'success';
        }


        echo('<div class="bg-light p-5 rounded">
          <h3><img src="medias/utilisateurs/'.$tab7['pdp'].'.jpg" alt="photo de profil de'.$tab7['pseudonyme'].'" width="50" height="50">  '.$tab7['pseudonyme'].' <span class="fs-5 text-muted">'.$tab7['email'].'</span></h3>
          <h6>'.$tab7['note'].' / 5 ☆</h6>
          <p class="lead">'.$tab7['commentaire'].'</p>
          <p><small class="text-muted">'.$tab7['date'].'</small></p>
        </div>
        
        <br>');

        }

        //------------------------------------------------------------------------------
        //                 Affichage de la fenêtre modal m1                
        //------------------------------------------------------------------------------
       
       
        echo('
        <div class="modal fade" id="m1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1" style="color: rgb(0, 0, 0); text-decoration: none; font-weight: bold;">'.$titre1.'</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <iframe width="560" height="315" src="'.$bande_annonce.'" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>Synopsis</h3>
                <p>'.$synopsis.'</p>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
              </div>
            </div>
          </div>
        </div>');

        //------------------------------------------------------------------------------
        //                 Affichage de la fenêtre modal m2                
        //------------------------------------------------------------------------------
        
        echo('
        <div class="modal fade" id="m2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Note presse</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>
                    '.$note_presse.'
                </p>
                <p>Source : <a title="Source" href="'.$source.'" style="color: rgb(0, 0, 0); text-decoration: none; font-weight: bold;">cliquez ici</a></p>
                
                <hr>
                
                <h5 class="modal-title" id="exampleModalLabel3">Note global</h5>
                <br>
                <div class="progress">
                  <div class="progress-bar progress-bar-striped bg-'.$couleur.' progress-bar-animated" role="progressbar" style="width: '.$long.'%" aria-valuemin="0" aria-valuemax="100">'.$note_global.' / 5 ☆</div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
              </div>
            </div>
          </div>
        </div>');


        $ok = mysqli_free_result ( $ResSQL1 ) ;
        $ok = mysqli_free_result ( $ResSQL2 ) ;
        $ok = mysqli_free_result ( $ResSQL3 ) ;
        $ok = mysqli_free_result ( $ResSQL4 ) ;
        $ok = mysqli_free_result ( $ResSQL5 ) ;
        $ok = mysqli_free_result ( $ResSQL6 ) ;
        $ok = mysqli_free_result ( $ResSQL7 ) ;

        $ok = mysqli_close ( $connect ) ;

        ?>

        <!--                 Footer                 -->

        <footer class="py-3 my-4 border-top">
          <p>&copy; Terkowsky Sarah</p>
        </footer>


      </main>'

      <!--                 Stockage mode CDN                 -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      </body>
</html>