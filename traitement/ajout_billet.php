<?php //link avec la base de donner 
require('../traitement/BDD.php');
 ?>



<?php
// LA PARTIE QUI COLLECTE LES DONNER (AJOUT)

//stockage de donnée
if(isset($_POST['save_AJOUT'])){
       $nom_complet = $_POST['nom_complet'];
       $telephone = $_POST['telephone'];
 $heure_reservation =  $_POST['heure_reservation'];
    $mode_transport =  $_POST['mode_transport'];
      $ville_depart =  $_POST['ville_depart'];
       $date_depart =  $_POST['date_depart'];
      $ville_arrive =  $_POST['ville_arrive'];
       $date_arrive =  $_POST['date_arrive'];
              $prix =  $_POST['prix'];
            $status =  $_POST['status'];
           
if( !empty($nom_complet) && !empty($telephone) && !empty($heure_reservation) && !empty($mode_transport) && !empty($ville_depart) &&
    !empty($date_depart) &&  !empty($ville_arrive) && !empty($prix) && !empty($status)) {
      
        $connexion = connect();
    $requette = "INSERT INTO Billet ( nom_complet,telephone,heure_reservation,mode_transport,date_depart,ville_depart,date_arrive,ville_arrive,prix,status) 
    VALUE(:nom_complet,:telephone,:heure_reservation,:mode_transport,:date_depart,:ville_depart,:date_arrive,:ville_arrive,:prix,:status)"; 
   
   $requette_cours = $connexion->prepare($requette);
    $requette_cours->bindvalue(':nom_complet',$nom_complet);
    $requette_cours->bindvalue(':telephone',$telephone);
    $requette_cours->bindvalue(':heure_reservation',$heure_reservation);
    $requette_cours->bindvalue(':mode_transport',$mode_transport);
    $requette_cours->bindvalue(':date_depart',$date_depart);
    $requette_cours->bindvalue(':ville_depart',$ville_depart);
    $requette_cours->bindvalue(':date_arrive',$date_arrive);
    $requette_cours->bindvalue(':ville_arrive',$ville_arrive);
    $requette_cours->bindvalue(':prix',$prix);
    $requette_cours->bindvalue(':status',$status);
    $result = $requette_cours->execute();
    
     if(!$result){
        echo "Un probléme est survenu ,l'enregistrement n' a pas été effectué";
     }else {
        echo " vous etes bien enregistres Votre identifiant est : " .$connexion->lastinsertId() ;
        header("location: ../traitement/affiche_billet.php");
     }

}else {
    echo "tous les champs sont obligatoires";
}

}
    
?>
