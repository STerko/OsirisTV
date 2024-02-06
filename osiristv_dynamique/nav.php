<!--                 Affichage de la barre de navigation                 -->


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a title="Accueil" class="navbar-brand" href="index.php">
          <img src="medias/Logo_OsirisTV.png" alt="Logo OsirisTV" width="60" height="44">
        </a>
            
        <a title="Accueil" class="navbar-brand" href="index.php">Accueil</a>
  
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a title="Types" class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Types
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">


              <?php
        
       
    
      //------------------------------------------------
      //                 Connexion    
      //------------------------------------------------
      
      include('bdd.php');

      $connect = mysqli_connect ( SERVER , LOGIN , PASSWORD , BASE ) or die ( mysqli_connect_error($connect) ) ;
    
      $okcharset = mysqli_set_charset ( $connect , 'utf8' ) ;

            $Requete = "SELECT `idt` , `nomtype` 
                        FROM `osiristv_type` 
                        ORDER BY `nomtype`" ; 
    
            $ResSQL = mysqli_query ( $connect , $Requete ) or die ( mysqli_error($connect) ) ;
    
            $NbRes = mysqli_num_rows ( $ResSQL ) ;
            
            
            //-----------------------------------------------------------------------------
            //          Affichage des informations de la liste déroulante des types
            //-----------------------------------------------------------------------------
    
            
            for ( $i = 1 ; $i <= $NbRes ; $i++ ) {
    
                $tab = mysqli_fetch_array ( $ResSQL ) ;
                $idtype = urlencode ($tab['idt']);
                $nomtype1 = urlencode ($tab['nomtype']);
                $nomtype2 = $tab['nomtype'];
    
                echo ('<li><a title="'.$nomtype2.'" class="dropdown-item" href="types.php?idtype='.$idtype.'&nomtype='.$nomtype1.'">'.$nomtype2.'</a></li>');
            }
              
            echo('</ul>
            </li>
            <li class="nav-item dropdown">
              <a title="Genres" class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Genres
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">');

              

      //-----------------------------------------------------------------------------
      //          Affichage des informations de la liste déroulante des genres
      //----------------------------------------------------------------------------- 
    
    
        $okcharset = mysqli_set_charset ( $connect , 'utf8' ) ;
    
            $Requete = "SELECT `idg` , `nomgenre` 
                        FROM `osiristv_genre` 
                        ORDER BY `nomgenre`" ; 
    
            $ResSQL = mysqli_query ( $connect , $Requete ) or die ( mysqli_error($connect) ) ;
    
            $NbRes = mysqli_num_rows ( $ResSQL ) ;
    
            
    
            for ( $i = 1 ; $i <= $NbRes ; $i++ ) {
    
                $tab = mysqli_fetch_array ( $ResSQL ) ;
                $idgenre = urlencode($tab['idg']);
                $nomgenre1 = urlencode($tab['nomgenre']);
                $nomgenre2 = $tab['nomgenre'];
    
                echo ('<li><a title="'.$nomgenre2.'" class="dropdown-item" href ="genres.php?idgenre='.$idgenre.'&nomgenre='.$nomgenre1.'">'.$nomgenre2.'</a></li>');
            }
    
    
    
        $ok = mysqli_free_result ( $ResSQL ) ;
    
        
        
    
      ?>
              
              </ul>
            </li>
            <li class="nav-item">
              <a title="Nous Contacter" class="nav-link" href="contact.php">Nous contacter</a>
            </li>
            <li class="nav-item">
              <a title="A propos" class="nav-link" href="apropos.php">A propos</a>
            </li>
          </ul>
          <form class="d-flex" >
            <input class="form-control me-2" type="search" placeholder="Rechercher.." aria-label="Search">
            <button type="submit" class="btn btn-light"><img src="medias/loupe.png" alt="loupe" /></button>
          </form>
        </div>
      </div>
    </nav>






               



















