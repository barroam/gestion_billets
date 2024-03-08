<?php
          include('BDD.php');
          $connexion = connect();

if (isset($_GET['id'])){


 $id = $_GET['id'] ;
 
     $query="DELETE FROM Billet WHERE id=:id";
     $query_run = $connexion->prepare($query);
     $data = [':id' =>$id ];
     $query_run->execute($data);

     if ($query_run) {
         
             header('location:affiche_billet.php');
         } else {
             echo "Erreur lors de la modification.";
  }

}
?>