<?php //link avec la base de donner 
require('../traitement/BDD.php');
 ?>



<?php
// LA PARTIE QUI COLLECTE LES DONNER (AJOUT)

//stockage de donnée
if(isset($_POST['save_AJOUT'])){
 $heure_reservation =  $_POST['heure_reservation'];
    $mode_transport =  $_POST['mode_transport'];
      $ville_depart =  $_POST['ville_depart'];
       $date_depart =  $_POST['date_depart'];
      $ville_arrive =  $_POST['ville_arrive'];
       $date_arrive =  $_POST['date_arrive'];
              $prix =  $_POST['prix'];
            $status =  $_POST['status'];
           
          
if( !empty($heure_reservation) && !empty($mode_transport) && !empty($ville_depart) &&
    !empty($date_depart) &&  !empty($ville_arrive) && !empty($prix) &&
    !empty($status)) {
   
        $connexion = connect();

    $requette = "INSERT INTO Billet (heure_reservation,mode_transport,date_depart,ville_depart,date_arrive,ville_arrive,prix,status) 
    VALUE(:heure_reservation,:mode_transport,:date_depart,:ville_depart,:date_arrive,:ville_arrive,:prix,:status)";
     
     $requette_cours = $connexion->prepare($requette);

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
        header("location: ../pages/index.php");
     }

}else {
    echo "tous les champs sont obligatoires";
}

}
    
?>







<?php /*
// LA PARTIE QUI COLLECTE LES DONNER (AJOUT)

//stockage de donnée
if(isset($_POST['save_AJOUT'])){
    function validate($verifie){
        $verifie = trim($verifie);
        $verifie = stripcslashes($verifie);
        $verifie = htmlspecialchars($verifie);
        return $verifie;}
        
// RECUPERATION DES DONNÉES

        $heure_reservation =  validate($_POST['heure_reservation']);
        $mode_transport =  validate($_POST['mode_transport']);
        $depart =  validate($_POST['depart']);
        $arrive = validate ($_POST['arrive']);
        $prix =  validate($_POST['prix']);
        $status =  validate($_POST['status']);
        $telephone =  validate($_POST['telephone']);

var_dump($heure_reservation,$telephone);
echo $status;

// LA REQUETE
$requette = "INSERT INTO Billets (heure_reservation,mode_transport,depart,arrive,prix,status,telephone) VALUE(:heure_reservation,:mode_transport,:depart,:arrive,:prix,:status,:telephone)";
$requette_cours = $connexion->prepare($requette);
// Tableau de rangement des données
$donnee = [
 ':heure_reservation' => $heure_reservation,
 ':mode_transport' => $mode_transport ,
 ':depart' => $depart,
  ':arrive' => $arrive  ,
   ':prix' => $prix,
  ':status' => $status ,
  ':telephone' => $telephone   
];

//Execution de la requette 
 $requette_cours->execute($donnee);
 if ($query_execute) {
    $_SESSION['message'] = "Reservation reussi";
    header('Location:index.php');
    exit(0);
} else {
    $_SESSION['message'] = "Réservation incorrect";
    header('Location:index.php');
    exit(0);
}
}*/
?>