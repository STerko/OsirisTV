<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><!--Stockage mode CDN-->
        <link rel="shortcut icon" href="medias/fav.png"/>
        <title>A propos</title>
    </head>

    <body>

      <!--                 Barre de Navigation                 -->


      <?php require ( 'nav.php' ) ; ?>

        <!--                 Arborescence                -->
    
          <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="p-3">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a title="Accueil" href="index.html" style="color: rgb(0, 0, 0); text-decoration: none; font-weight: bold;">Accueil</a></li>
              <li class="breadcrumb-item active" aria-current="page">A propos</li>
            </ol>
          </nav>

          <!--                 Affichage des questions fréquemment posées par les utilisateurs                -->

          <main class="container">




    <div class="row">




          <h2>Questions fréquemment posées par nos utilisateurs :</h2>

        <hr>
        <br>


      <div class="accordion" id="accordionExample1">
        <div class="accordion-item">
          <h2 class="accordion-header" id="heading1">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
              Si je ne trouve pas mon film préféré, que dois-je faire?
            </button>
          </h2>
          <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample1">
            <div class="accordion-body">
              Ne vous en faites pas, si votre film favori ne fait pas encore parti de notre catalogue, laissez nous votre avis et nous analyserons votre requête pour ajouter votre film dans le futur.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="heading2">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
              En cas de disfonctionnement du site web, serais-je prévenu à l'avance?
            </button>
          </h2>
          <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample1">
            <div class="accordion-body">
              Dans ce cas là, nous prévoyons d'informer nos utilisateurs via nos réseaux sociaux tel que twitter ou facebook     
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="heading3">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
              Prévoyez-vous d'ajouter de nouveaux films à l'avenir dans votre catalogue?
            </button>
          </h2>
          <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample1">
            <div class="accordion-body">
              Oui! En effet, nous sommes d'ailleurs sur le point de rajouter toute une nouvelle collection de films dans la semaine qui arrive et parmi eux se trouve des films venant tout juste de sortir comme "Sonic 2, le film", qui devrait plair à la plupart des utilisateurs.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="heading4">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
              Y a-t-il une restriction d'âge minimum pour accéder à ce site?
            </button>
          </h2>
          <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample1">
            <div class="accordion-body">
              Non, il n'y a pas de restriction d'âge sur notre site web mais il est fortement conseillé de ne pas laisser son enfant sans surveillance sur le site, car certains films déconseillés comportent des scènes pouvant choquer.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="heading5">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
              Si je veux poser une question sur un sujet, que dois-je faire?
            </button>
          </h2>
          <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample1">
            <div class="accordion-body">
              Pour cela, nous avons une catégorie spécialement faite pour cela qui est <a title="Nous contacter" href="contact.php" style="color: rgb(0, 0, 0); text-decoration: none; font-weight: bold;">"Nous contacter"</a>. Vous aurez juste à remplir un formulaire avec ce que vous souhaitez nous faire part et notre équipe se chargera de répondre à votre demande dans les plus brefs délais.
            </div>
          </div>
        </div>
      </div>

        <!--                 Affichage des sources des images utilisées                -->


     <hr>


      <h2>Source des images utilisées :</h2>

      <hr>
      <br>

      <!--                 Affichage des sources des affiches                -->

      <div class="accordion" id="accordionExample2">
        <div class="accordion-item">
          <h2 class="accordion-header" id="heading6">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
              Affiches
            </button>
          </h2>
          <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample2">
            <div class="accordion-body">

              <table class="table table-dark table-hover">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Source de l'image</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td><a title="Iron man" href="https://www.affiches-et-posters.com/films--cinema-at-3/poster-film-iron-man-1-p-55309.html" style="color: white; text-decoration: none;">Iron man</a></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td><a title="Mon Voisin Totoro" href="https://www.amazon.fr/Affiche-Cin%C3%A9ma-Originale-Grand-Format/dp/B07GJX3SFK" style="color: white; text-decoration: none;">Mon Voisin Totoro</a></td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td><a title="Lego Ninjago, le film" href="https://www.amazon.fr/Poster-Lego-Ninjago-Movie-70/dp/B073WMB7WG" style="color: white; text-decoration: none;">Lego Ninjago, le film</a></td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td><a title="Ça" href="https://fr.shopping.rakuten.com/offer/buy/4163220776/ca-affiche-cinema-originale-120x160-cm-pliee.html" style="color: white; text-decoration: none;">Ça</a></td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td><a title="Demon Slayer" href="https://www.mangaspace.fr/saison-3-de-demon-slayer-sera-t-elle-la-saison-finale/" style="color: white; text-decoration: none;">Demon Slayer</a></td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td><a title="Fight Club" href="https://www.amazon.fr/Laur-UK-Affiche-Bordure-Diff%C3%A9rentes/dp/B07WYJ5MZ2" style="color: white; text-decoration: none;">Fight Club</a></td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td><a title="Pulp Fiction" href="https://www.amazon.fr/1art1%C2%AE-36889-Fiction-Principale-Tarantino/dp/B000NN91MM" style="color: white; text-decoration: none;">Pulp Fiction</a></td>
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td><a title="Moi moche et méchant" href="https://www.ecranlarge.com/films/850343-moi-moche-et-mechant/photos" style="color: white; text-decoration: none;">Moi moche et méchant</a></td>
                  </tr>
                  <tr>
                    <th scope="row">9</th>
                    <td><a title="Interstellar" href="https://www.affiches-et-posters.com/films--cinema-at-3/affiche-film-interstellar-p-24296.html" style="color: white; text-decoration: none;">Interstellar</a></td>
                  </tr>
                  <tr>
                    <th scope="row">10</th>
                    <td><a title="Le Seigneur des Anneaux - La Communauté de l'anneau" href="https://www.affiches-et-posters.com/films--cinema-at-3/affiche-film-seigneur-des-anneaux-communaute-l-anneau-p-2897.html" style="color: white; text-decoration: none;">Le Seigneur des Anneaux - La Communauté de l'anneau</a></td>
                  </tr>
                  <tr>
                    <th scope="row">11</th>
                    <td><a title="Jupiter : Le Destin de l'univers" href="https://www.ecranlarge.com/films/864608-jupiter-le-destin-de-l-univers/photos" style="color: white; text-decoration: none;">Jupiter : Le Destin de l'univers</a></td>
                  </tr>
                  <tr>
                    <th scope="row">12</th>
                    <td><a title="Le Hobbit: La désolation de Smaug" href="https://www.cinepassionmeyzieu.com/wp-content/cache/hyper-cache/cinepassionmeyzieu.com/produit/le-hobbit-la-desolation-de-smaug/index.html" style="color: white; text-decoration: none;">Le Hobbit: La désolation de Smaug</a></td>
                  </tr>
                  <tr>
                    <th scope="row">13</th>
                    <td><a title="Jumanji : Bienvenue dans la jungle" href="https://www.allocine.fr/film/fichefilm_gen_cfilm=210318.html" style="color: white; text-decoration: none;">Jumanji : Bienvenue dans la jungle</a></td>
                  </tr>
                  <tr>
                    <th scope="row">14</th>
                    <td><a title="Astérix : Le Secret de la potion magique" href="https://www.allocine.fr/film/fichefilm-244560/photos/detail/?cmediafile=21559069" style="color: white; text-decoration: none;">Astérix : Le Secret de la potion magique</a></td>
                  </tr>
                  <tr>
                    <th scope="row">15</th>
                    <td><a title="Your Name" href="https://www.allocine.fr/film/fichefilm_gen_cfilm=249877.html" style="color: white; text-decoration: none;">Your Name</a></td>
                  </tr>
                  <tr>
                    <th scope="row">16</th>
                    <td><a title="Raiponce" href="https://leslecturessucrees.com/2018/10/20/mes-films-disney-pixar-preferes/affiche-raiponce-01/" style="color: white; text-decoration: none;">Raiponce</a></td>
                  </tr>
                  <tr>
                    <th scope="row">17</th>
                    <td><a title="Barbie princesse Raiponce" href="https://cineday.orange.fr/films/barbie-princesse-raiponce-CNT0000009wWq7/photos/barbie-princesse-raiponce-affiche-9ad8e3450a40f89781dbab17dbfda54c.html" style="color: white; text-decoration: none;">Barbie princesse Raiponce</a></td>
                  </tr>
                  <tr>
                    <th scope="row">18</th>
                    <td><a title="Dora et la Cité perdue" href="https://www.allocine.fr/film/fichefilm-242125/photos/" style="color: white; text-decoration: none;">Dora et la Cité perdue</a></td>
                  </tr>
                  <tr>
                    <th scope="row">19</th>
                    <td><a title="En avant" href="https://www.disneyphile.fr/affiches-en-avant-pixar/" style="color: white; text-decoration: none;">En avant</a></td>
                  </tr>
                  <tr>
                    <th scope="row">20</th>
                    <td><a title="La Reine des neiges" href="http://antreducinema.fr/produit/la-reine-des-neiges-affiches-de-films-danimation-40x60-copie/" style="color: white; text-decoration: none;">La Reine des neiges</a></td>
                  </tr>
                  <tr>
                    <th scope="row">21</th>
                    <td><a title="Spider-Man : No Way Home" href="https://www.disneyphile.fr/les-affiches-de-spider-man-no-way-home/" style="color: white; text-decoration: none;">Spider-Man : No Way Home</a></td>
                  </tr>
                  <tr>
                    <th scope="row">22</th>
                    <td><a title="Shang-Chi et la Légende des Dix Anneaux" href="https://www.cine-feuilles.ch/film/6905-shang-chi-et-la-legende-des-dix-anneaux" style="color: white; text-decoration: none;">Shang-Chi et la Légende des Dix Anneaux</a></td>
                  </tr>
                  <tr>
                    <th scope="row">23</th>
                    <td><a title="Pirates des Caraïbes - La Malédiction du Black Pearl" href="https://www.allocine.fr/film/fichefilm-46117/photos/" style="color: white; text-decoration: none;">Pirates des Caraïbes - La Malédiction du Black Pearl</a></td>
                  </tr>
                  <tr>
                    <th scope="row">24</th>
                    <td><a title="Les Mondes de Ralph" href="https://www.senscritique.com/film/les_mondes_de_ralph/421678/images" style="color: white; text-decoration: none;">Les Mondes de Ralph</a></td>
                  </tr>
                </tbody>
              </table>

            </div>
          </div>
        </div>

        <!--                 Affichage des sources des acteurs                -->

        <div class="accordion-item">
          <h2 class="accordion-header" id="heading7">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
              Acteurs
            </button>
          </h2>
          <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionExample2">
            <div class="accordion-body">

              <table class="table table-dark table-hover">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Source de l'image</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td><a title="Robert Downey Jr." href="https://fr.wikipedia.org/wiki/Robert_Downey_Jr." style="color: white; text-decoration: none;">Robert Downey Jr.</a></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td><a title="Chika Sakamoto" href="https://japanese-voiceover.fandom.com/wiki/Chika_Sakamoto" style="color: white; text-decoration: none;">Chika Sakamoto</a></td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td><a title="Dave Franco" href="https://www.allocine.fr/personne/fichepersonne-202607/photos/detail/?cmediafile=21113534" style="color: white; text-decoration: none;">Dave Franco</a></td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td><a title="Jackie Chan" href="https://www.allocine.fr/personne/fichepersonne_gen_cpersonne=3593.html" style="color: white; text-decoration: none;">Jackie Chan</a></td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td><a title="Bill Skarsgard" href="https://consent.yahoo.com/v2/collectConsent?sessionId=3_cc-session_e734d909-bc22-4733-8873-3ce70283736c" style="color: white; text-decoration: none;">Bill Skarsgard</a></td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td><a title="Natsuki Hanae" href="https://www.nautiljon.com/people/hanae+natsuki.html" style="color: white; text-decoration: none;">Natsuki Hanae</a></td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td><a title="Brad Pitt" href="https://fr.wikipedia.org/wiki/Brad_Pitt" style="color: white; text-decoration: none;">Brad Pitt</a></td>
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td><a title="John Travolta" href="https://fr.wikipedia.org/wiki/John_Travolta" style="color: white; text-decoration: none;">John Travolta</a></td>
                  </tr>
                  <tr>
                    <th scope="row">9</th>
                    <td><a title="Steve Carell" href="https://www.imdb.com/name/nm0136797/" style="color: white; text-decoration: none;">Steve Carell</a></td>
                  </tr>
                  <tr>
                    <th scope="row">10</th>
                    <td><a title="Pierre Coffin" href="https://fr.wikipedia.org/wiki/Pierre_Coffin" style="color: white; text-decoration: none;">Pierre Coffin</a></td>
                  </tr>
                  <tr>
                    <th scope="row">11</th>
                    <td><a title="Matthew McConaughey" href="https://fr.wikipedia.org/wiki/Matthew_McConaughey" style="color: white; text-decoration: none;">Matthew McConaughey</a></td>
                  </tr>
                  <tr>
                    <th scope="row">12</th>
                    <td><a title="Edward Norton" href="https://fr.wikipedia.org/wiki/Edward_Norton" style="color: white; text-decoration: none;">Edward Norton</a></td>
                  </tr>
                  <tr>
                    <th scope="row">13</th>
                    <td><a title="Channing Tatum" href="https://www.allocine.fr/personne/fichepersonne_gen_cpersonne=126186.html" style="color: white; text-decoration: none;">Channing Tatum</a></td>
                  </tr>
                  <tr>
                    <th scope="row">14</th>
                    <td><a title="Mila Kunis" href="https://fr.wikipedia.org/wiki/Mila_Kunis" style="color: white; text-decoration: none;">Mila Kunis</a></td>
                  </tr>
                  <tr>
                    <th scope="row">15</th>
                    <td><a title="Benedict Cumberbatch" href="https://www.allocine.fr/personne/fichepersonne_gen_cpersonne=164427.html" style="color: white; text-decoration: none;">Benedict Cumberbatch</a></td>
                  </tr>
                  <tr>
                    <th scope="row">16</th>
                    <td><a title="Peter Jackson" href="https://fr.wikipedia.org/wiki/Peter_Jackson" style="color: white; text-decoration: none;">Peter Jackson</a></td>
                  </tr>
                  <tr>
                    <th scope="row">17</th>
                    <td><a title="Dwayne Johnson" href="https://fr.wikipedia.org/wiki/Dwayne_Johnson" style="color: white; text-decoration: none;">Dwayne Johnson</a></td>
                  </tr>
                  <tr>
                    <th scope="row">18</th>
                    <td><a title="Jack Black" href="https://www.allocine.fr/personne/fichepersonne_gen_cpersonne=21971.html" style="color: white; text-decoration: none;">Jack Black</a></td>
                  </tr>
                  <tr>
                    <th scope="row">19</th>
                    <td><a title="Christian Clavier" href="https://fr.m.wikipedia.org/wiki/Fichier:Christian_Clavier_Cannes_2013.jpg" style="color: white; text-decoration: none;">Christian Clavier</a></td>
                  </tr>
                  <tr>
                    <th scope="row">20</th>
                    <td><a title="Guillaume Briat" href="https://www.imdb.com/name/nm0108478/" style="color: white; text-decoration: none;">Guillaume Briat</a></td>
                  </tr>
                  <tr>
                    <th scope="row">21</th>
                    <td><a title="Mone Kamishiraishi" href="https://www.imdb.com/name/nm4759838/" style="color: white; text-decoration: none;">Mone Kamishiraishi</a></td>
                  </tr>
                  <tr>
                    <th scope="row">22</th>
                    <td><a title="Mandy Moore" href="https://fr.m.wikipedia.org/wiki/Fichier:Mandy_Moore_(40775469351)_(cropped).jpg" style="color: white; text-decoration: none;">Mandy Moore</a></td>
                  </tr>
                  <tr>
                    <th scope="row">23</th>
                    <td><a title="Jeffrey Tambor" href="https://www.allocine.fr/personne/fichepersonne_gen_cpersonne=2014.html" style="color: white; text-decoration: none;">Jeffrey Tambor</a></td>
                  </tr>
                  <tr>
                    <th scope="row">24</th>
                    <td><a title="Kelly Sheridan" href="https://www.allocine.fr/personne/fichepersonne_gen_cpersonne=409347.html" style="color: white; text-decoration: none;">Kelly Sheridan</a></td>
                  </tr>
                  <tr>
                    <th scope="row">25</th>
                    <td><a title="Anjelica Huston" href="https://www.allocine.fr/personne/fichepersonne_gen_cpersonne=6.html" style="color: white; text-decoration: none;">Anjelica Huston</a></td>
                  </tr>
                  <tr>
                    <th scope="row">26</th>
                    <td><a title="Isabela Moner" href="https://www.amazon.fr/Isabela-Moner-Glossy-Photo-Picture/dp/B07PYGRXZJ" style="color: white; text-decoration: none;">Isabela Moner</a></td>
                  </tr>
                  <tr>
                    <th scope="row">27</th>
                    <td><a title="Jeffrey Wahlberg" href="https://www.themoviedb.org/person/1826682-jeffrey-wahlberg/images/profiles?language=fr-FR" style="color: white; text-decoration: none;">Jeffrey Wahlberg</a></td>
                  </tr>
                  <tr>
                    <th scope="row">28</th>
                    <td><a title="Tom Holland" href="https://en.wikipedia.org/wiki/Tom_Holland" style="color: white; text-decoration: none;">Tom Holland</a></td>
                  </tr>
                  <tr>
                    <th scope="row">29</th>
                    <td><a title="Chris Pratt" href="https://fr.wikipedia.org/wiki/Chris_Pratt" style="color: white; text-decoration: none;">Chris Pratt</a></td>
                  </tr>
                  <tr>
                    <th scope="row">30</th>
                    <td><a title="Kristen Bell" href="https://fr.wikipedia.org/wiki/Kristen_Bell" style="color: white; text-decoration: none;">Kristen Bell</a></td>
                  </tr>
                  <tr>
                    <th scope="row">31</th>
                    <td><a title="Idina Menzel" href="https://unbonfilm.com/person/idina-menzel" style="color: white; text-decoration: none;">Idina Menzel</a></td>
                  </tr>
                  <tr>
                    <th scope="row">32</th>
                    <td><a title="Simu Liu" href="https://moviefit.me/fr/persons/126180-simu-liu" style="color: white; text-decoration: none;">Simu Liu</a></td>
                  </tr>
                  <tr>
                    <th scope="row">33</th>
                    <td><a title="Michelle Yeoh" href="https://fr.wikipedia.org/wiki/Michelle_Yeoh" style="color: white; text-decoration: none;">Michelle Yeoh</a></td>
                  </tr>
                  <tr>
                    <th scope="row">34</th>
                    <td><a title="Johnny Depp" href="https://www.elle.fr/People/La-vie-des-people/News/Boude-a-Hollywood-Johnny-Depp-prend-la-parole-pour-se-defendre-3943030" style="color: white; text-decoration: none;">Johnny Depp</a></td>
                  </tr>
                  <tr>
                    <th scope="row">35</th>
                    <td><a title="Rich Moore" href="https://www.imdb.com/name/nm0601781/" style="color: white; text-decoration: none;">Rich Moore</a></td>
                  </tr>
                  <tr>
                    <th scope="row">36</th>
                    <td><a title="Sarah Silverman" href="https://www.imdb.com/name/nm0798971/" style="color: white; text-decoration: none;">Sarah Silverman</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!--                 Affichage des sources des réalisateurs                -->

        <div class="accordion-item">
          <h2 class="accordion-header" id="heading8">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
              Réalisateurs
            </button>
          </h2>
          <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionExample2">
            <div class="accordion-body">

              <table class="table table-dark table-hover">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Source de l'image</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td><a title="Jon Favreau" href="https://cinenode.com/realisateur/jon-favreau/photos" style="color: white; text-decoration: none;">Jon Favreau</a></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td><a title="Hayao Miyazaki" href="https://en.wikipedia.org/wiki/Hayao_Miyazaki" style="color: white; text-decoration: none;">Hayao Miyazaki</a></td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td><a title="Charlie Bean" href="https://www.imdb.com/name/nm0063769/" style="color: white; text-decoration: none;">Charlie Bean</a></td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td><a title="Andrés Muschietti" href="https://celpox.com/celebs/andy-muschietti?ID=35281" style="color: white; text-decoration: none;">Andrés Muschietti</a></td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td><a title="Haruo Sotozaki" href="https://moviefit.me/fr/titles/521172" style="color: white; text-decoration: none;">Haruo Sotozaki</a></td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td><a title="David Fincher" href="https://www.telerama.fr/cinema/bientot-sur-netflix-voir-une-mysterieuse-serie-documentaire-signee-david-fincher-6992949.php" style="color: white; text-decoration: none;">David Fincher</a></td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td><a title="Quentin Tarantino" href="https://lapauseinfo.fr/quentin-tarantino-quitte-sa-carriere-de-cineaste-pour-devenir-un-ecrivain/" style="color: white; text-decoration: none;">Quentin Tarantino</a></td>
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td><a title="Pierre Coffin" href="https://www.imdb.com/name/nm1853544/" style="color: white; text-decoration: none;">Pierre Coffin</a></td>
                  </tr>
                  <tr>
                    <th scope="row">9</th>
                    <td><a title="Christopher Nolan" href="https://fr.wikipedia.org/wiki/Christopher_Nolan" style="color: white; text-decoration: none;">Christopher Nolan</a></td>
                  </tr>
                  <tr>
                    <th scope="row">10</th>
                    <td><a title="Peter Jackson" href="https://fr.wikipedia.org/wiki/Peter_Jackson" style="color: white; text-decoration: none;">Peter Jackson</a></td>
                  </tr>
                  <tr>
                    <th scope="row">11</th>
                    <td><a title="Lana Wachowski" href="https://www.sudouest.fr/culture/cinema/les-freres-wachowski-realisateurs-de-matrix-sont-devenus-des-soeurs-4369108.php" style="color: white; text-decoration: none;">Lana Wachowski</a></td>
                  </tr>
                  <tr>
                    <th scope="row">12</th>
                    <td><a title="Jake Kasdan" href="https://elcinema.com/en/person/1996083/" style="color: white; text-decoration: none;">Jake Kasdan</a></td>
                  </tr>
                  <tr>
                    <th scope="row">13</th>
                    <td><a title="Alexandre Astier" href="https://www.purepeople.com/article/alexandre-astier-bien-triste-mauvaise-nouvelle-pour-les-fans-de-kaamelott_a408806/1" style="color: white; text-decoration: none;">Alexandre Astier</a></td>
                  </tr>
                  <tr>
                    <th scope="row">14</th>
                    <td><a title="Makoto Shinkai" href="https://www.babelio.com/auteur/Makoto-Shinkai/244237" style="color: white; text-decoration: none;">Makoto Shinkai</a></td>
                  </tr>
                  <tr>
                    <th scope="row">15</th>
                    <td><a title="Byron Howard" href="https://www.ecranlarge.com/personnalite/730980-byron-howard" style="color: white; text-decoration: none;">Byron Howard</a></td>
                  </tr>
                  <tr>
                    <th scope="row">16</th>
                    <td><a title="Owen Hurley" href="https://cinenode.com/realisateur/owen-hurley" style="color: white; text-decoration: none;">Owen Hurley</a></td>
                  </tr>
                  <tr>
                    <th scope="row">17</th>
                    <td><a title="James Bobin" href="https://en.wikipedia.org/wiki/James_Bobin" style="color: white; text-decoration: none;">James Bobin</a></td>
                  </tr>
                  <tr>
                    <th scope="row">18</th>
                    <td><a title="Dan Scalon" href="https://mulderville.net/fr/evenements/1559/en-avant-(onward)-rencontre-avec-dan-scanlon-et-kori-rae" style="color: white; text-decoration: none;">Dan Scalon</a></td>
                  </tr>
                  <tr>
                    <th scope="row">19</th>
                    <td><a title="Chris Buck" href="https://fr.wikipedia.org/wiki/Chris_Buck" style="color: white; text-decoration: none;">Chris Buck</a></td>
                  </tr>
                  <tr>
                    <th scope="row">20</th>
                    <td><a title="Jon Watts" href="https://filmow.com/jon-watts-ii-a288903/" style="color: white; text-decoration: none;">Jon Watts</a></td>
                  </tr>
                  <tr>
                    <th scope="row">21</th>
                    <td><a title="Daniel Destin Cretton" href="https://www.binged.com/person/destin-daniel-cretton/" style="color: white; text-decoration: none;">Daniel Destin Cretton</a></td>
                  </tr>
                  <tr>
                    <th scope="row">22</th>
                    <td><a title="Gore Verbinski" href="https://www.ladepeche.fr/article/2017/02/16/2518562-gore-verbinski-predestine-a-etre-realisateur-de-films-d-horreur.html" style="color: white; text-decoration: none;">Gore Verbinski</a></td>
                  </tr>
                  <tr>
                    <th scope="row">23</th>
                    <td><a title="Rich Moore" href="https://www.chacuncherchesonfilm.fr/film/1686-zootopie" style="color: white; text-decoration: none;">Rich Moore</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!--                 Affichage des sources des bannières                -->

        <div class="accordion-item">
          <h2 class="accordion-header" id="heading9">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
              Bannières
            </button>
          </h2>
          <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordionExample2">
            <div class="accordion-body">
  
              <table class="table table-dark table-hover">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Source de l'image</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td><a title="Astérix : Le Secret de la potion magique" href="https://video-a-la-demande.orange.fr/film/ASTERIXLESEW0146339/asterix-le-secret-de-la-potion-magique" style="color: white; text-decoration: none;">Astérix : Le Secret de la potion magique</a></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td><a title="Barbie princesse Raiponce" href="https://www.programme-television.org/films-telefilms/dessin-anime/barbie-princesse-raiponce" style="color: white; text-decoration: none;">Barbie princesse Raiponce</a></td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td><a title="Ça" href="https://www.youtube.com/watch?v=OyHSf20v39M" style="color: white; text-decoration: none;">Ça</a></td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td><a title="Demon Slayer" href="https://freakingeek.com/demon-slayer-kimetsu-no-yaba-le-film-le-train-de-linfini-la-suite-de-la-serie-au-cinema/" style="color: white; text-decoration: none;">Demon Slayer</a></td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td><a title="Dora et la Cité perdue" href="https://www.paperblog.fr/8976319/cinema-dora-et-la-cite-perdue/" style="color: white; text-decoration: none;">Dora et la Cité perdue</a></td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td><a title="En avant" href="https://freakingeek.com/en-avant-le-nouveau-dessin-anime-pixar/" style="color: white; text-decoration: none;">En avant</a></td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td><a title="Fight Club" href="https://www.lemagducine.fr/cinema/films-classiques/arretons-de-parler-du-fight-club-67799/" style="color: white; text-decoration: none;">Fight Club</a></td>
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td><a title="Interstellar" href="https://www.fhstheflash.com/4145/entertainment/movies-tv/interstellar/" style="color: white; text-decoration: none;">Interstellar</a></td>
                  </tr>
                  <tr>
                    <th scope="row">9</th>
                    <td><a title="Iron man" href="https://pix-geeks.com/film/iron-man/" style="color: white; text-decoration: none;">Iron man</a></td>
                  </tr>
                  <tr>
                    <th scope="row">10</th>
                    <td><a title="Jumanji : Bienvenue dans la jungle" href="https://antredeluciole.fr/2018/01/05/cinema-jumanji-une-suite-drole-et-efficace/" style="color: white; text-decoration: none;">Jumanji : Bienvenue dans la jungle</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!--                 Affichage des sources des images erreur 403/404                -->

        <div class="accordion-item">
          <h2 class="accordion-header" id="heading10">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
              Pages erreur 403 / 404
            </button>
          </h2>
          <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordionExample2">
            <div class="accordion-body">
  
              <table class="table table-dark table-hover">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Source de l'image</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td><a title="Erreur 403" href="https://www.pngegg.com/en/png-zicmj" style="color: white; text-decoration: none;">Erreur 403</a></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td><a title="Erreur 404" href="https://www.pngegg.com/en/png-ebvdc" style="color: white; text-decoration: none;">Erreur 404</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>


      </div>
    </div>

    <!--                 Footer                 -->

      <footer class="py-3 my-4 border-top">
        <p>&copy; Alan Wilhelm</p>
      </footer>


    </main>

    <!--                 Stockage mode CDN                 -->


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>