<?php require('../block/header.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/designsystem.css">
</head>
<body>
    <div class="img_fond">
      <div class="overlay">

      <section class="coord"> 
      <div class="coord_mail"> <p>Salamvoyage@gmail.com </p>
    </div> 

        <div class="coord_icon"> <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-linkedin">
        <i class="fa-solid fa-envelope"></i>
        </i>
    </div> 
    </section> 
<div class="all_text">
<h1 class="titre_header" >Bienvenue dans Salam Voyage  ! </h1> 
   
   <h5 class="text_header">Embarquez pour des voyages enchantés et créez des souvenirs
    inoubliables avec notre plateforme de voyage en ligne,
     où chaque destination est une invitation à l'émerveillement.</h5>
    
     <a href="index.php" class="button_reserver">Réserver</a>
</div>
    
  </div>
</div>

<!-- -->
<section class="cont_all">
  <div> 
    <h3>  Voyages en Famille avec Salam Voyage. </h3>
    <p>
    Parcourez nos destinations de rêve, sélectionnées spécialement pour les familles en quête d'évasion et de détente. De magnifiques plages aux paysages enchanteurs en passant par des villes chargées d'histoire, nous avons tout ce qu'il faut pour satisfaire les désirs de chaque membre de votre famille.

<br> Laissez-vous inspirer par nos suggestions de séjours sur mesure, conçues pour vous offrir un voyage sans stress et rempli de moments magiques. Avec <span> Salam Voyage</span> , vous pouvez vous attendre à des services personnalisés, une attention particulière portée aux détails et une équipe dévouée prête à rendre votre expérience de voyage inoubliable.

<br> Que vous soyez une famille de globe-trotters chevronnés ou des aventuriers occasionnels en quête de nouvelles découvertes, notre site vitrine est votre compagnon idéal pour planifier votre prochaine escapade en famille. Rejoignez-nous et commencez à créer des souvenirs qui dureront toute une vie.
  </p>
  </div>
  <div><img src="../img/photo_famille.jpg" class="photo_mifa" alt="photo_famille"></div>
</section>

<a href="index.php" class=" voyage">Réserver</a>

<section class="cont_all">

<div><img src="../img/photo_couple1.jpg" class="photo_mifa" alt="photo_famille"></div>

  <div> 
    <h3>  Nos Destinations de Rêve en Couple </h3>
    <p>
    Découvrez nos destinations soigneusement sélectionnées pour les couples en quête d'évasion et de détente. Des plages ensoleillées aux paysages pittoresques, en passant par des villes chargées d'histoire, nous avons tout ce qu'il faut pour combler vos désirs. <br>

Laissez-vous inspirer par nos suggestions de séjours sur mesure, conçues pour vous offrir une escapade romantique sans stress, remplie de moments magiques. Avec <span> Salam Voyage</span> , attendez-vous à des services personnalisés et une équipe dévouée pour rendre votre voyage inoubliable. <br>

Que vous soyez des voyageurs expérimentés ou des explorateurs occasionnels en quête de nouvelles aventures, notre site vitrine est là pour vous aider à planifier votre prochaine escapade en couple. Rejoignez-nous et commencez à créer des souvenirs qui vous lieront pour toujours.
    </p>
  </div>
  
</section>
<a href="index.php" class=" voyage">Réserver</a>

<section class="cont_all">
  <div> 
    <h3>  Découvrez le Monde en Solitaire  </h3>
    <p>
    
Parcourez nos destinations uniques, spécialement sélectionnées pour les voyageurs solitaires en quête d'aventure et de découverte. Des retraites paisibles aux destinations exotiques, nous avons tout ce qu'il vous faut pour une expérience de voyage inoubliable. <br>

Laissez-vous inspirer par nos suggestions de séjours personnalisés, conçues pour vous offrir une expérience authentique et enrichissante. Avec <span> Salam Voyage</span> , vous pouvez vous attendre à un service attentionné et à une équipe dédiée pour rendre votre voyage mémorable. <br>

Que vous soyez un explorateur intrépide ou un voyageur occasionnel en quête de nouvelles expériences, notre site vitrine est votre compagnon idéal pour planifier votre prochaine aventure en solo. Rejoignez-nous et partez à la découverte de nouveaux horizons tout en créant des souvenirs qui vous accompagneront toute votre vie. </p>
  </div>
  <div><img src="../img/fond.jpg" class="photo_mifa" alt="photo_famille"></div>
</section>
<a href="index.php" class=" voyage">Réserver</a>

    <style>
.cont_all{
  display: grid;
  grid-template-columns: repeat(2,1fr);
  margin: 6%;
  align-items: center;
  gap: 5%;
}

 .voyage{
  padding: 0.5%;
 
  background-color: var(--orange); /* Couleur de fond du bouton */
  color: #fff; /* Couleur du texte du bouton */
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s, color 0.3s;
  align-items: center;
  margin: 0 auto;
  display: flex;
  justify-content: center;
  font-size: 1.3rem;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  width: 10%;
  text-decoration: none;
 }
 .voyage:hover{
  background-color: var(--bleu); /* Couleur de fond du bouton au survol */
  color: #ffffff;
 }
section div h3 {
  margin: 2%;
  color:var(--orange) ;
}
section div p{
  margin: 3%;
  word-spacing: 0.45rem;
  width: 90%;
}
section div p span {
  color: var(--orange);
}
.photo_mifa{
  height: 25rem;
  width: auto;
  text-align: start;
 
}



        .img_fond{
            background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),url(../img/pexels-andrea-piacquadio-3769146.jpg);
            background-size:  cover;
            background-position: center; 
            background-repeat: no-repeat; 
        }
      
       

.overlay {
  background-color: rgba(0, 0, 0, 0.5); /* Fond légèrement plus foncé */
  align-items: center;
  color: white; /* Couleur du texte */
  padding: 0.71%;
}

.overlay a:hover {
  background-color: var(--bleu); /* Couleur de fond du bouton au survol */
  color: #ffffff; /* Couleur du texte du bouton au survol */
}
.coord{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 0.3%;
    color: var(--orange);
}
.coord_mail{
    align-items: center;
    margin: 1%;
}
.text_header{

   padding: 0 23% ;
   font-size: 1.3rem;
    display: flex;
    justify-content: center;
    text-align: center;
    align-items: center;
}

.titre_header{
            padding: 0.21%;
            text-align: center;
            color: var(--orange);
        }
        .titre_header:hover{
          color: var(--bleu);
        }
        .button_reserver{
          padding: 1.5%;
  background-color: var(--orange); /* Couleur de fond du bouton */
  color: #fff; /* Couleur du texte du bouton */
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s, color 0.3s;
  align-items: center;
  margin: 0 auto;
  display: flex;
  justify-content: center;
  font-size: 1.3rem;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  width: 10%;
  text-decoration: none;
        }

.all_text{
  margin: 1% 15%;
  padding: 2%;
}
.all_text:hover{
  border-radius: 1%;
  box-shadow: 1px 1px 4px 4px rgba(0, 0, 0, 1.5);
  opacity: 1.5; 
}

    </style>
</body>
</html>

<?php require('../block/footer.php');?>