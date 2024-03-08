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
    <li><a href="../pages/accueil.php">Accueil </a></li>
    <li><a href="../pages/index.php">Réserver</a></li>
    <li><a href="../traitement/affiche_billet.php">Billets </a></li>
   
</ul>

<li><a href="../pages/profil.php">Profil </a></li>
</nav>



<style>
    body{
        margin: 00;
        padding: 00;
        background-color: var(--font-color);
    }
    nav{

        display: grid;
        grid-template-columns: repeat(3,1fr);
        background-color: var(--bleu);
        color: var(--orange);
    }
    nav div {
    
        display: flex;
        justify-content: center;
        margin-right: 40%;
        background-color:var(--orange);
    
    }
    nav div:hover{
        background-color: #fff;
   
    }
   
    nav div h1{
        color: white;
    }
    nav div h1:hover{
        color: var(--orange);
    }
    nav ul{
        display: grid;
        grid-template-columns: repeat(3,1fr);
        margin-right: 45%;
        align-items: center;
        gap: 10%;
    }
    nav ul li a{
        text-decoration: none;
        list-style: none;
        font-size:1.3rem ;
        color: white;
        font-weight: 700;

    }


    nav ul li a:hover{
     
     color: white;
     border-bottom: #fff 3px solid;
    
    
    }

    .navbar li{
display: flex;
        list-style: none;
        align-items: center;
        margin-left: 45%;
    }

        .navbar li a{
        text-decoration: none;
       align-items: center;
        font-size:1.3rem ;
        color: white;
        font-weight: 700; padding: 7%;
    }
    .navbar li a:hover{
        background-color: var(--orange);
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