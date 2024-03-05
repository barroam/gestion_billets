<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar">
<div>
    <img src="Mbarrodivoyage/lion.png" alt="">
    <h1 class="titre"> <span>MBARRODI</span>Voyage</h1>
</div>
<ul>
    <li><a href="accueil.php">Accueil</a></li>
    <li><a href="index.php">Voyage</a></li>
    <li><a href="propos.php">Apropos</a></li>
</ul>
</nav>



<style>
    nav{
        display: grid;
        grid-template-columns: repeat(2,1fr);
        background-color: wheat;
    }
    nav ul{
        display: grid;
        grid-template-columns: repeat(3,1fr);
    }
</style>
</body>
</html>