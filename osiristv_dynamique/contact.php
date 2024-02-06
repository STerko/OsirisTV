<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><!--Stockage mode CDN-->
        <link rel="shortcut icon" href="medias/fav.png"/>
        <title>Nous contacter</title>
    </head>

    <body>

      <!--                 Barre de Navigation                 -->

      <?php require ( 'nav.php' ) ; ?>

      <!--                 Arborescence                -->
    
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="p-3">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a title="Accueil" href="index.html" style="color: rgb(0, 0, 0); text-decoration: none; font-weight: bold;">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nous contacter</li>
          </ol>
        </nav>
    
        <!--                 Affichage du formulaire                -->

          <main class="container">


        <h2>Pour nous contacter, merci de bien vouloir remplir le formulaire suivant</h2>
        
        <hr>
        <br>

        <div class="row">

          <form action="envoie_mail/envoie_mail.php" method="get">

        <!--                 Affichage de l'entrée du formulaire correspondant au nom de l'utilisateur                -->

            <div class="mb-3 row">
                <label for="exampleInputNom" class="col-sm-2 col-form-label" style="color: rgb(0, 0, 0); font-weight: bold;">Votre nom</label>
                <div class="col-sm-5">
                <input type="text" name="nom" class="form-control" id="exampleInputNom" placeholder="Plenozas" required="required">
                </div>
              </div>

              <!--                 Affichage de l'entrée du formulaire correspondant au prénom de l'utilisateur                -->

              <div class="mb-3 row">
                <label for="exampleInputPrénom" class="col-sm-2 col-form-label" style="color: rgb(0, 0, 0); font-weight: bold;">Votre prénom</label>
                <div class="col-sm-5">
                <input type="text" name="prenom" class="form-control" id="exampleInputPrénom" placeholder="Jean" required="required">
                </div>
              </div>

              <!--                 Affichage de l'entrée du formulaire correspondant à l'addresse email universitaire de l'utilisateur                -->

              <div class="mb-3 row">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label" style="color: rgb(0, 0, 0); font-weight: bold;">Votre adresse email</label>
                <div class="col-sm-5">
                  <input type="email"  name="exped" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jean.plenozas5@etu.univ-lorraine.fr" required="required">
                  <div id="emailHelp" class="form-text">Votre email ne sera partagé avec personne.</div>
                </div>
              </div>

              <!--                 Affichage de l'entrée du formulaire correspondant à l'addresse email universitaire du destinataire                -->

              <div class="mb-3 row">
                <label for="exampleInputEmail2" class="col-sm-2 col-form-label" style="color: rgb(0, 0, 0); font-weight: bold;">Adresse email du destinataire</label>
                <div class="col-sm-5">
                  <input type="email" name="dest" class="form-control" id="exampleInputEmail2" placeholder="Marie.france8@etu.univ-lorraine.fr" required="required">
                </div>
              </div>

              <!--                 Affichage de l'entrée du formulaire correspondant à l'objet du message de l'utilisateur                -->

              <div class="mb-3 row ">
                <label for="selection" class="col-sm-2 col-form-label" style="color: rgb(0, 0, 0); font-weight: bold;">Objet</label>
                <div class="col-sm-5">
                  <select class="form-select" name="objet" aria-label="Default select example" id="selection">
                  <option selected>Choisir l'option qui vous concerne</option>
                  <option value="J'ai besoin d'informations">J'ai besoin d'informations</option>
                  <option value="J'ai un problème">J'ai un problème</option>
                  <option value="J'aurais une question sur un sujet">J'aurais une question sur un sujet</option>
                  <option value="Autres">Autres</option>
                  </select>
                </div>
             </div>

             <!--                 Affichage de l'entrée du formulaire correspondant au message de l'utilisateur                -->

            <div class="mb-3 row">
                <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label" style="color: rgb(0, 0, 0); font-weight: bold;">Votre message</label>
                <div class="col-sm-7">
                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>

            <!--                 Affichage des cases à cocher du formulaire                -->

            <div class="row mb-3">
                <div class="col-sm-10 offset-sm-2">
                    <div class="form-check">
                        <input class="form-check-input" name="notifs" type="checkbox" value="oui" id="flexCheckDefault1">
                        <label class="form-check-label" for="flexCheckDefault1">
                          J'accepte de recevoir des notification par email
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="conditions" type="checkbox" value="oui" id="flexCheckDefault2">
                        <label class="form-check-label" for="flexCheckDefault2">
                            J'accepte les Conditions Générales et la politique de confidentialité
                        </label>
                    </div>
                </div>
            </div>

                <!--                 Affichage du niveau de satisfaction du formulaire                -->

                <label for="customRange2" class="form-label" style="color: rgb(0, 0, 0); font-weight: bold;">Niveau de satisfaction</label>
                <input type="range" name="avis" class="form-range" min="0" max="5" id="customRange2">
        
            
            <!--                 Affichage des boutons envoyer et rénitialiser du formulaire                -->

            <button type="submit" class="btn btn-primary mb-5" style="color: rgb(255, 255, 255); text-decoration: none; font-weight: bold;">Envoyer</button>
            <button type="reset" class="btn btn-primary mb-5" style="color: rgb(255, 255, 255); text-decoration: none; font-weight: bold;">Rénitialiser</button>

          </form>
        </div>

          <!--                 Footer                -->

          <footer class="py-3 my-4 border-top">
            <p>&copy; Alan Wilhelm</p>
          </footer>

         </main> 

          <!--                 Stockage mode CDN                 -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>