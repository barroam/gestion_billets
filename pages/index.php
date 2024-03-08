
<?php require('../block/header.php');?>
<?php require('../traitement/ajout_billet.php');?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>



<div class="reservation-block">
<h1>Prêt pour l'aventure ?</h1>
<h3>Explorez de nouveaux horizons, découvrez des cultures fascinantes et créez des souvenirs inoubliables.</h3>
 
</div>
    <section class="cont-reserver"> 
<div>
<form action="../traitement/ajout_billet.php" method="post">
<input class="item" type="text" name="nom_complet" placeholder="Votre nom complet"><br>
<input class="item" type="number" name="telephone" placeholder="Votre Numéro de téléphone"><br>
    <input class="item" type="text" name="mode_transport" placeholder="Mode de transport"><br>
    <input class="item" type="text" name="ville_depart" placeholder="Ville de départ du voyage"> <br>
    <input class="item" type="datetime-local" name="date_depart" ><br>
    <input class="item" type="text" name="ville_arrive" placeholder="Ville d'arrivée du voyage"> <br>
    <input class="item" type="datetime-local" name="date_arrive"><br>
    <input class="item" type="number" name="prix" placeholder="Le coût du voyage"><br>
    <input class="item" type="text" name="status" placeholder="Statut du voyage"><br>
    <input class="item" type="datetime-local" name="heure_reservation" ><br>
    <button type="submit" name="save_AJOUT">S'inscrire</button>
</form>
</div>

<div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943170.122019635!2d-17.147752291067416!3d14.46383448275436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec172f5b3c5bb71%3A0x5a46a55099615940!2zU8OpbsOpZ2Fs!5e0!3m2!1sfr!2ssn!4v1709818799923!5m2!1sfr!2ssn" width="750" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

    </section>
    <!-- La formulaire de réservation de billet -->

<style>
.reservation-block{
    align-items: center;
    text-align: center;
}
.reservation-block h1{
    color: var(--orange);
}

    .cont-reserver{
        
        
        display: grid;
        grid-template-columns: repeat(2,1fr);
        align-items: center;
        margin: 3%;
    
    
    }
    .item{
        padding: 1%;
        margin: 1%;
        width: 80%;
        background-color: #9FCBF8;
       
    }
    .item:hover{
background-color: #fff;
    }
    button{
        align-items: center;
        text-align: center;
        width: 82%;
        padding: 1%;
        margin: 1%;
        background-color: var(--orange);
    }
    iframe{
     /* Ajustez la hauteur de la carte selon vos besoins */
    border-radius: 10px; /* Vous pouvez ajuster le rayon de bordure */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Définit l'ombre de la boîte */
    transition: box-shadow 0.3s ease; 
    }

</style>
</body>
</html>
<?php require('../block/footer.php');?>