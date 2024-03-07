
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
    <!-- La formulaire de réservation de billet -->
<h1>Réservation</h1>
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

</body>
</html>