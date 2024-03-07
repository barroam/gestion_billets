<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/designsystem.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
<nav class="navbar">
<div>
    <img class="logo" src="../img/lion.png" alt="logo">
    <h1 class="titre"> <span>Salam</span> Voyage</h1>
    
</div>
<ul>
    <li><a href="../pages/accueil.php">Accueil</a></li>
    <li><a href="../pages/index.php">Réservation</a></li>
    <li><a href="../pages/propos.php">Apropos</a></li>
    <li><a href="../pages/profil.php">Profil</a></li>

</ul>


</nav>



<style>
    body{
        margin: 00;
        padding: 00;
        background-color: var(--font-color);
    }
    nav{

        display: grid;
        grid-template-columns: repeat(2,1fr);
        background-color: var(--bleu);
        color: var(--orange);
    }
    nav div {
        margin-right: 40%;
        display: flex;
        justify-content: center;
        
    
    }
    nav div:hover{
   background-color:var(--orange);
    }
    nav div h1 span {
      color: white;
    }
    nav div h1 span:hover{
        color: var(--bleu);
    }
    nav div h1{
        color: white;
    }
    nav ul{
        display: grid;
        grid-template-columns: repeat(4,1fr);
        margin-right: 35%;
        align-items: center;
        gap: 10%;
    }
    nav ul li a{
        text-decoration: none;
        list-style: none;
        font-size:1.3rem ;
        color: white;
        font-weight: 700;
       padding: 12%;
      
        
        
    }
    nav ul li a:hover{
     background-color:var(--orange) ;
     color: var(--bleu);
     border: 0.1rem solid  white;
     
    }
    nav ul li{
    list-style: none;
    }
    .logo{
        width: 4rem;
        height: auto;

        
    }
   
</style>
</body>
</html>