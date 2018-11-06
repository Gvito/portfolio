<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Gino Vito - Développeur Web Junior - Portfolio</title>
  <meta name="description" content="Portfolio de Gino VITO à la recherche d'un stage/emploi en tant que Développeur Web !">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Lobster" rel="stylesheet">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>

<!-- //////////////////////////////////////// START HEADER /////////////////////////////////////////////////// -->

<!-- heading of the page-->
<header id="myHeader">
  <!-- navigation on the page -->
  <nav class="topnav" id="myTopnav">
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
     <i class="fa fa-bars"></i>
    </a>
      <ul class="desktop">
        <li> <a href="#main" title="Accueil">Accueil</a> </li>
        <li> <a href="#projects" title="Projets">Projets</a> </li>
        <li> <a href="#about" title="A Propos">A propos</a> </li>
        <li> <a href="#competence" title="Compétences">Compétences</a> </li>
        <li> <a href="#contact" title="Contact">Contact</a> </li>
      </ul>
  </nav>
</header>

<!-- //////////////////////////////////////// END HEADER /////////////////////////////////////////////////// -->

<!-- //////////////////////////////////////// START MAIN /////////////////////////////////////////////////// -->
<main id="main">
 <!-- section home with img, name and job -->
 <section id="home" class="home">
   <div id="layer">
   </div>
   <!-- picture home -->
   <div id="homeContainer">
     <img src="img/moi.png" alt="img home" width="245" height="200">
     <!-- my name -->
     <h1> Gino Vito </h1>
     <!-- job select -->
     <h2> Développeur web junior </h2>
     <!-- social networks -->
     <div class="iconesocial">
       <!-- twitter -->
       <a id="itwitter" href="https://twitter.com/Gvito_"> <i class="fab fa-twitter-square"></i> </a>
       <!-- linkedin -->
       <a id="ilink" href="https://www.linkedin.com/in/gino-vito-a093b916b/"> <i class="fab fa-linkedin"></i> </a>
       <!-- github -->
       <a id="igithub" href="https://github.com/Gvito"> <i class="fab fa-github-square"></i> </a>
     </div>
   </div>
 </section>
 <!-- section my projects -->
  <section id="projects">
    <!-- title project -->
    <h3> Projets back</h3>
    <!-- all projects -->
    <div class="allprojets">
      <!-- first project -->
      <article class="firstprojet">
        <a href="https://github.com/Gvito/E-commerce-TerreDeGeek"><img src="img/tdg.png" alt="tdg" width="200" height="200">
        <h4> TerreDeGeek (en formation)</h4>
        </a>
      </article>
      <!-- seconde project -->
      <article class="secondeprojet">
        <a href="https://github.com/Gvito/PA-Twitter"><img src="img/patwitter.png" alt="patwitter" width="200" height="200">
        <h4> Page d'accueil Twitter (en formation)</h4>
        </a>
      </article>
      <!-- third project -->
      <article class="thirdprojet">
        <a href="https://github.com/Gvito/Page-Home-p-tisserie"><img src="img/patisserie.png" alt="patisserie" width="200" height="200">
        <h4> Page d'accueil Pâtisserie Responsive (en formation) </h4>
        </a>
        <!-- <span id="navabout"></span> -->
      </article>
    </div>

    <hr id="separator">

    <h3> Projets Front</h3>
    <!-- all projects -->
    <div class="allprojets">
      <!-- first project -->
      <article class="firstprojet">
        <a href="https://github.com/Gvito/E-commerce-TerreDeGeek"><img src="img/tdg.png" alt="tdg" width="200" height="200">
        <h4> TerreDeGeek (en formation)</h4>
        </a>
      </article>
      <!-- seconde project -->
      <article class="secondeprojet">
        <a href="https://github.com/Gvito/PA-Twitter"><img src="img/patwitter.png" alt="patwitter" width="200" height="200">
        <h4> Page d'accueil Twitter (en formation)</h4>
        </a>
      </article>
      <!-- third project -->
      <article class="thirdprojet">
        <a href="https://github.com/Gvito/Page-Home-p-tisserie"><img src="img/patisserie.png" alt="patisserie" width="200" height="200">
        <h4> Page d'accueil Pâtisserie Responsive (en formation) </h4>
        </a>
        <!-- <span id="navabout"></span> -->
      </article>
    </div>
  </section>
 <!-- section about me -->
 <section id="about">
   <!-- me and CV download -->
   <div class="aboutfirst">
     <!-- title -->
     <h3>A propos</h3>
     <!-- text on me -->
     <p>Bienvenue sur mon Portfolio ! Je m'appelle Gino Vito, un jeune Développeur Web qui veut grandir et
       apprendre dans le monde de l'informatique ! Après mes études scolaires, j'ai réalisé une formation de Développeur
       Web pour acquérir de bonne connaissance du langage numérique.
     </p>
     <!-- button for CV download -->
     <a href="img/CVGino.pdf"> Télécharger mon CV </a>
   </div>
   <!-- my trainings -->
   <div class="aboutseconde">
     <!-- title -->
     <h3 class="mobile">Formations</h3>
     <!-- training Simplon -->
     <article class="simplontraining">
       <p>Dans cette formation, j'ai appris les fonctionnalités d'un site internet, comment le réaliser avec les outils adéquates.
       </p>
       <div class="simplontitle">
         <h4>Développeur Web - <br> Simplon Roubaix, ADEP</h4>
         <h5>Septembre 2018- Avril 2019 / Formation de 6 mois</h5>
       </div>
     </article>
     <!-- Stage in your compagny :) -->
     <article class="stage">
       <div class="stagetitle">
         <h4>Stage dans <br> vôtre entreprise !</h4>
         <h5>Avril - Mai 2019 / Stage d'un mois</h5>
       </div>
       <p>Je voudrai réaliser un stage dans vôtre entreprise pour améliorer mes compétences et mes
         connaissances en langages numériques.
       </p>
       <span id="navcompetence"></span>
     </article>
     <!-- soon -->
     <article class="soontraining">
       <p>djoi qjdoq qsjdq pokdq psojd qpo jdkqpjd qojd qspoj dpqj dpq
         pjdpqjdqpokdp qojdpqdk poqjdpq ojdqĵdpq jdjqp oj dqpojs dpqjdpqo jsdqkns,cqo
         qdkqdpo jqkdq ojdojd qpos kjdpo qjsdp qdpoq jdpqj dodnjqk dpqndp qndqp dqndp</p>
       <div class="soontitle">
         <h4>à venir</h4>
       </div>
     </article>
   </div>
 </section>
<!-- section competence acquired -->
 <section id="competence">
   <!-- title competence -->
   <h3> Compétences </h3>
   <!-- skillbar on my capacity -->
   <div class="compet">
   <div class="allskillbar">
     <!-- skillbar html-->
     <div class="skillbar" data-percent="70">
       <span class="skillbartitle"> HTML 5</span>
       <p class="skillbarbar" style="background: #61e786; width: 70%;"></p>
     </div>
     <!-- skillbar css-->
     <div class="skillbar" data-percent="50">
       <span class="skillbartitle"> CSS </span>
       <p class="skillbarbar" style="background: #61e786; width: 50%;"></p>
     </div>
     <!-- skillbar php-->
     <div class="skillbar" data-percent="15">
       <span class="skillbartitle"> PHP </span>
       <p class="skillbarbar" style="background: #61e786; width: 15%;"></p>
     </div>
     <!-- skillbar javascript-->
     <div class="skillbar" data-percent="10">
       <span class="skillbartitle"> Javascript </span>
       <p class="skillbarbar" style="background: #61e786; width: 10%;"></p>
     </div>
     <!-- skillbar git/github-->
     <div class="skillbar" data-percent="45">
       <span class="skillbartitle"> Git / Github </span>
       <p class="skillbarbar" style="background: #61e786; width: 45%;"></p>
     </div>
     <!-- skillbar anglais -->
     <div class="skillbar" data-percent="30">
       <span class="skillbartitle"> Anglais </span>
       <p class="skillbarbar" style="background: #61e786; width: 30%;"></p>
     </div>
   </div>
   <!-- about me on my skill -->
   <div class="aboutskill">
     <i id="idesktop"class="fas fa-laptop"></i>
     <p>
       Je souhaite mettre en avant mes compétences acquises pour l'obtention
       d'un stage afin de valider ma formation de Déveleppeur Web. Ayant débuter dans ce domaine, mon but est d'apprendre d'avantage dans vôtre entreprise.
     </p>
     <i id="ibook"class="fas fa-book"></i>
   </div>
 </div>
 </section>
 <!-- section form contact -->
 <section id="contact">
   <!-- title contact -->
   <h3>Contact</h3>
   <!-- form contact -->
   <form action="/action_page.php" target="_self" method="post">
    <fieldset>
     <input type="text" name="name" placeholder="Nom">
     <br>
     <input type="email" name="mail" placeholder="Email">
     <br>
     <input type="text" name="sujet" placeholder="Object">
     <br>
     <textarea name="message" placeholder="Message.." style="height:7em;"></textarea>
     <br><br>
     <input type="submit" value="Envoyé">
    </fieldset>
   </form>
 </section>
</main>

<!-- //////////////////////////////////////// END MAIN /////////////////////////////////////////////////// -->

<!-- //////////////////////////////////////// START FOOTER /////////////////////////////////////////////////// -->

<footer>
  <!-- Coryright -->
  <h5> © 2018 Gino Vito </h5>
</footer>

<!-- //////////////////////////////////////// END FOOTER  /////////////////////////////////////////////////// -->

  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <!-- navbar -->
  <script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

<!-- head scroll -->
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
