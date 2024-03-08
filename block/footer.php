<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/designsystem.css">
</head>
<body>


<footer>
        <div class="footer-content">
            <h3>Contacts</h3>
            <p>Email: Salamvoyage@gmail.com</p>
            <p>Téléphone: +782251774</p>
        </div>
        <div class="footer-content">
            <h3>Liens</h3>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">À propos</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="footer-content">
            <h3>Newsletter</h3>
            <form action="#">
                <input type="email" placeholder="Votre adresse email">
                <button type="submit">S'abonner</button>
            </form>
        </div>
    </footer>

    <style>
body{
    box-sizing: border-box;
    margin: 00;
    padding: 00;
}
footer {
    margin:   3rem 00 00  00;
    background-color: var(--bleu);
    color: #fff;
    padding: 20px 0;
    display: flex;
    justify-content: space-around;
}

.footer-content {
    width: 30%;
}

.footer-content h3 {
    color: var(--orange);
    border-bottom: 2px solid #fff;
    padding-bottom: 5px;
}

.footer-content p, .footer-content ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

.footer-content ul li {
    margin-bottom: 10px;
}

.footer-content ul li a {
    color: #fff;
    text-decoration: none;
}

.footer-content form {
    margin-top: 10px;
}

.footer-content input[type="email"] {
    width: 100%;
    padding: 8px;
    border: none;
    border-radius: 4px;
    margin-bottom: 5px;
}

.footer-content button {
    background-color: var(--orange);
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.footer-content button:hover {
    background-color: #fff;
    color: var(--bleu);
}
    </style>
</body>
</html>