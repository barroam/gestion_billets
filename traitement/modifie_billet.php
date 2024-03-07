<?php //link avec la base de donner 
require('../traitement/BDD.php');
require('../block/header.php');?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

if (isset($_GET['id'])) {
    $id = $_GET['id']; 
    $getbillets = connect()->prepare("SELECT * FROM Billet WHERE id=$id");
    $getbillets->execute();
    $billet = $getbillets->fetchAll();

$nom_complet = $billet[0]['nom_complet'];
$telephone = $billet[0]['telephone'];
$heure_reservation= $billet[0]['heure_reservation'];
$mode_transport= $billet[0]['mode_transport'];
$date_depart= $billet[0]['date_depart'];
$ville_depart= $billet[0]['ville_depart'];
$date_arrive= $billet[0]['date_arrive'];
$ville_arrive= $billet[0]['ville_arrive'];
$prix = $billet[0]['prix'];
$status = $billet[0]['status'];
}
?>

<form action="" method="post">
<input class="item" type="text" name="nom_complet" value="<?= $nom_complet?>" ><br>
<input class="item" type="number" name="telephone" value="<?= $telephone?>"><br>
    <input class="item" type="text" name="mode_transport" value="<?= $mode_transport?>"><br>
    <input class="item" type="text" name="ville_depart"value="<?= $ville_depart?>"  > <br>
    <input class="item" type="datetime-local" name="date_depart" ><br>
    <input class="item" type="text" name="ville_arrive" value="<?= $ville_arrive?>"> <br>
    <input class="item" type="datetime-local" name="date_arrive"><br>
    <input class="item" type="number" name="prix" value="<?= $prix?>"><br>
    <input class="item" type="text" name="status" value="<?= $status?>" ><br>
    <input class="item" type="datetime-local" name="heure_reservation" ><br>
    <button type="submit" name="save_MODIFIE">Modifier la réservation</button>
</form>





<?php
if(isset($_POST[ 'save_MODIFIE'])){
    
$id = $_POST['save_MODIFIE'];
$nom_complet = $_POST['nom_complet'];
$telephone = $_POST['telephone'];
$heure_reservation = $_POST['heure_reservation'];
$mode_transport = $_POST['mode_transport'];
$date_depart = $_POST['date_depart'];
$ville_depart = $_POST['ville_depart'];
$date_arrive = $_POST['date_depart'];
$ville_arrive = $_POST['ville_arrive'];
$prix = $_POST['prix'];
$status = $_POST['status'];



}
?>    




</body>
</html>



