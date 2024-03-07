<?php
 

 require('../block/header.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Vos Billets</h1>

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
              
                <div class="box_p"> 
                <p><h4>Billet N°</h4>
                <h3><?= $billet['id']?> </h4></p>
            <p><h4>Nom complet</h4> <h3><?= $billet['nom_complet']?></h3> </p>
            <p><h4> Numéro de téléphone</h4> <h3><?= $billet['telephone']?></h3> </p> 
        </div>

        <div class="L_box">
        <div class="box"> 
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
           
          <div class="box_trait">
            <a href="../traitement/modifie_billet.php?id=<?= $billet['id']?> "> <i class="fa-solid fa-pen-to-square" style="color: #3011bc;"> </i> </a> 
            <a href="del.php?id=<?= $billet['id']?> "> <i class="fa-solid fa-trash" style="color: #fe7a15;"> </i></i> </a> 
          </div>
        </div>  
                </section>
           

        <style>
            .container{
            margin: 1%;
             background-color: #CAD8DF;
             display:grid;
             grid-template-rows: repeat(2,1fr);
             font-size: 0.85rem;
             border: 0.1rem solid black ;
             padding: 1.2%;
             row-gap: 1%;
            }
            div .container .box_p p {
               display: grid;
               grid-template-rows: repeat(2,1fr);
            }
            .L_box{
                background-color: #fff;
                display: flex;
                justify-content: space-between;
                padding: 1%;
                margin-top: -4%;
                border: 0.0852rem solid black ;
            }

            .box_p{
                background-color: #fff;
                display: flex;
                justify-content: space-around;
                align-items: center;
                height: 50%;
                padding: 1%;
                border: 0.0852rem solid black ;
            }
            .box{
              
                text-align: center;
               
            }
            .box_trait{
                display: grid;
                grid-template-rows: repeat(2,1fr);
                align-items: center;
                padding: 1%,
            }
            .fa-solid{
                font-size: 2rem;
            }
         
          
        </style>
            </div>
            <?php
           }
     ?>
</body>
</html>
