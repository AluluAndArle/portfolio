

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benji "DiZ" CV</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<header>
    <ul>
        <li class="navigation-item is-active">
            <a class="navigation-link" href="#">Home</a>
        </li>
            <li class="navigation-item">
                <a class="navigation-link" href="#">About</a>
            </li>
            <li class="navigation-item">
                <a class="navigation-link" href="#">Skills</a>
            </li>
            <li class="navigation-item">
                <a class="navigation-link" href="#">Contact</a>
            </li>
        </ul>
    </div>
</header>
    <main>
    <h1 id="category">About me</h1>

        <div class="container">
            <div>
                <img src="img/Lucca.jpg" id="pfp" alt="Lucca"></img> <br>
                <br>
            </div>
            <div>
                À propos <br>
                <br>
                Je m'appelle Benjamin ! Certains me connaissent sous le nom de DiZ ou Alulu... <br>
                J'ai commencé à apprendre le code de manière sérieuse depuis quelque temps. <br>
                J'aime juste le code, c'est un monde où je peux m'amuser; montrer ma créativité <br>
                mais aussi me surpasser et apprendre de mes erreurs de manière quotidienne.
            </div>
        </div>
        <h1 id="category">Skills</h1>
        <div class="container">
            <div> 
                <div>
                    <div class="barreProgresseVide">
                        <div class="barrehtml"></div>
                    </div>
                </div>
                <div class="barreProgresseVide">
                        <div class="barrecss"></div>
                    </div>
                <div class="barreProgresseVide">
                        <div class="barrephp"></div>
                    </div>
                <div class="barreProgresseVide">
                        <div class="barremisc"></div>
                    </div>
                </div>                    
            <div id="skills">
                HTML <br>
                CSS <br>
                PHP <br>
                MISC. 
            </div>
        </div>
        <h1 id="category">Contact</h1>
        <div class="container3">
            <div>
                <h2>Me contacter</h2>
            </div>
            <div>
                <form action="sendmsg.php" method="post">
                    Email    <input type="email" name="email" value=""> <br>
                    Subject <input type="text" name="subject" value=""> <br>
                    Message <input type="text" name="message" value=""> <br>
                    <button type="submit" name="send">Envoyer</button>
                </form>


            </div>
        </div>
    </main>

    <footer>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima magni obcaecati unde eos magnam explicabo quibusdam, quas dolor, aperiam beatae officiis quasi sapiente molestias.
    </footer>
<script type="text/javascript">
window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
})
</script>

</body>
</html>