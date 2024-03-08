
<style>
/*::after

<div class="ajout"><a href="ajout_idee.php" class="btn_ajout_idee ">Ajouter des idées</a> </div>
<!--Voici le Bouton qui te permettre d'ajouter-->
   <!--affiche le message si l'inscription est reussi ou pas  -->
   <?php if (isset($_SESSION['message'])) : ?>
                    <h1><?= $_SESSION['message']; ?></h1>
                <?php 
            unset($_SESSION['message']);
            endif; ?>
<div class="cont">
<?php 
$query = "SELECT * FROM Idee ";
$query_run = $connexion->prepare($query);
$query_run->execute();
$result = $query_run->fetchAll(PDO::FETCH_ASSOC);
//var_dump($result);
if($result)
{
    foreach ($result as $row) {
        ?>
        
        <div class="block">
        <h3 class="idee"> Idee N°<?= $row['id'] ;?></h3>      
    <h2 class="titre">Titre: <?= $row['titre'] ;?></h2>
    <h3 class="categorie">Catégorie:<?= $row['categorie'] ;?></h3>
    <p class="description"><?= $row['descript'] ;?></p>
    <h4 class="date_envoi"><?= $row['date_envoi'] ;?></h4>
    <div class="modifie_supprimer">
    <div><a href="modifie_idee.php?id=<?= $row['id'] ;?>" class="btn_modifier_idee ">Modifier </a> </div>
    <form action="base_donnee.php" method="POST">
    <button type="submit" name="supprimer_idee" value="<?= $row['id'] ;?>" class="btn_supprimer_idee" >Supprimer </button>
    </form>
    </div>

    <?php
    }
}
else {
  ?>

<div class="cont">
    <h2 class="titre">ERREUR</h2>
    <h3 class="categorie">ERREUR</h3>
    <p class="description">ERREURp>
    <h4 class="date_envoi">ERREUR</h4>
</div>

<?php
}
?> 
</div>

</div>



<!-- le bon -->

<?php 
 $requette = "SELECT * FROM Clients ";
 $requette_cours = $connexion->prepare($requette);
 $requette_cours->execute();
 $requette_cours->fetchAll(PDO::FETCH_ASSOC);
 $resultat = $requette_cours;
  if ($resultat){

  foreach ($resultat as $row){

    ?>
    <div class="block">
         <h2 class="items">date de reservation<?= $row['heure_reservation'] ;?></h2>
         <h2 class="items">mode de transport<?= $row['mode_transport'] ;?></h2>
         <h2 class="items">date de départ<?= $row['depart'] ;?></h2>
         <h2 class="items">date d'arrivée<?= $row['arrive'] ;?></h2>
         <h2 class="items">prix<?= $row['prix'] ;?></h2>
         <h2 class="items">status<?= $row['status'] ;?></h2>
         <h2 class="items">numero de téléphone<?= $row['telephone'] ;?></h2>
    </div> 
    <?php
  }

  }
  
else {
   ?> 
<div class="cont">
    <h2 class="titre">ERREUR</h2>
    <h3 class="categorie">ERREUR</h3>
    <p class="description">ERREURp>
    <h4 class="date_envoi">ERREUR</h4>
</div>

<?php
}

?>

            </div>


*/

</style>
