<?php
    include_once 'header.php';
?>
    <title>Accueil</title>
</head>
<body id="body">
    <nav>
        <div class="home">
            <a href="home.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQtRe6Xu75Ao7h9HZiGH3fQh289cX0QBTsSE_VBNfRl5dRdBowO5EfvfgXH6tYikDIuTU&usqp=CAU"></a>
        </div>
    </nav>

    <section id="WelcomeMsg">
        <div class="welcome center">
            <h3>Bienvenue !</h3>
            <p>
                Un billet est un article court, voire très court, dans lequel un journaliste exprime une opinion,
                un point de vue décalé et humoristique, une vision inattendue ou démystificatrice sur un fait
                d'actualité. Il peut aussi s'indigner. On trouve donc à la fois une leçon morale et des traits
                d'esprit...
            </p>
            <p style="font-weight: bold; font-style: italic;">Pour publier un commentaire, il faudra être modérateur. Le formulaire ci-dessous vous permettra
                de vous connecter à votre compte.
            </p>
        </div>
    </section>
    
    <section id="LoginForm">
        <div id="form" class="center">
            <div>
                <span id = "form_header">
                    <label>Connexion</label>
                </span>
                <br>
                <form action="verifConn.inc.php" method="post">
                    <div class="formElements"> Numéro d'identifiant
                    </div>
                    <br>
                    <div class="form-group">
                        <input  type="text" name="ID" id="numID" placeholder="Identifiant">
                        <br>
                    </div>
                    <label class="formElements" for="mot_de_passe">Mot de passe</label>
                    <br>
                    <div class="form-group">
                        <input  type="password" name="Pwd" id="mot_de_passe" placeholder="Mot de passe">
                        <br>
                    </div>
                    <br>
                    <div id="centerButton" class="form-group">			
                        <input class="btn btn-info" type="Submit" value="Me connecter" name="Submit">
                    </div>
                    <br>
                </form>
            </div>
        </div>
        <?php
        require_once 'classes.php';



        if ($msg = isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p class='center'>Veuillez remplir tout les champs !</p>";
            }
            else if ($_GET["error"] == "badcredentials") {
                echo "<p class='center'>Vérifiez que le mot de passe ou (et) le nom d'utilisateur est correct!</p>";
            }
        }
        ?>

    </section>

</body>
</html>