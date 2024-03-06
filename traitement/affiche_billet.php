
<?php
           //link avec la base de donner 
          include('../traitement/BDD.php');
          
          $getbillets = connect()->prepare("SELECT * FROM Billet");
          $getbillets->execute();
           $billet = $getbillets->fetchAll();
          

           foreach ( $billet as $billet) {
            ?>
            <div >
                <section class="container">
                <p> <h4>Billet N°</h4><?= $billet['id']?> </p>
                <div class="box_p"> 
            <p><h4>Date de réservation</h4><?= $billet['heure_reservation']?> </p>
            <p><h4> Transport</h4><?= $billet['mode_transport']?> </p> 
        </div>

           <div class="box">   <p><h4>Ville de depart</h4><?= $billet['ville_depart']?> </p>
            <p><h4>Date_depart</h4><?= $billet['date_depart']?> </p> 
        </div>

          <div class="box">
          <p><h4>Ville d'arrivée</h4><?= $billet['ville_arrive']?> </p>
            <p><h4>Date_d'arrivée</h4><?= $billet['date_arrive']?> </p>
          </div>
            
          <div class="box">
          <p><h4>Montant</h4><?= $billet['prix']?> </p>
            <p><h4>status</h4><?= $billet['status']?> </p>
          </div>
           
                </section>
       
        <style>
            .container{
            margin: 1%;
             background-color: wheat;
             display: flex;
             justify-content: space-around;
             font-size: 0.7rem;
            }
            .box_p{
                grid-template-columns: repeat(3,1fr);
            }
            .box{
                grid-template-columns: repeat(2,1fr);
            }
        </style>
            </div>
            <?php
           }
     ?>