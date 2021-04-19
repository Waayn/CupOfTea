<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/theme.css" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">

</head>
<body>
    <header>
        <div class="livraison">Livraison offerte à partir de 65€ d'achat !</div>
        <div>
            <a href="index.php"><img src="img/logo.png" alt="Logo Cup Of Tea"></a>
            <div>
                <p>Mon panier</p>
                <a href="index.php?page=cart"><i class="fas fa-shopping-cart"></i></a>
                <p id="prix-panier"></p>
            </div>
        </div>
        <div>
            <nav>
                <a href="index.php?page=listing">Thés</a>
                <a href="#">Grands Crus</a>
                <a href="#">Accessoires</a>
                <a href="#">épicerie</a>
                <a href="index.php?page=about">Notre Histoire</a>
                <?php if($tool->isConnected()) : ?>
                    <a href="index.php?page=logout">Déconnexion</a>
                    <a href="index.php?page=accueil"><span>Bonjour <?= $_SESSION['firstName'] ?></span></a>
                    <?php else : ?>
                        <!-- si je suis hors ligne j'ai accés à ses pages -->
                        <a href="index.php?page=register">Inscription</a>
                        <a href='#' id="myBtn">Connexion</a>
                <?php endif;?>  
            </nav>
        </div>
        <img src="img/ribbon.svg" alt="Elu meilleur thé">
    </header>
    <main>


    <?php if(isset($_POST['mail'])){
        $message = $form->controlLogin();
        foreach ($message as $mes) {
            if ($mes == 'Connexion réussie'){
                $tool->redirect('index.php?page=accueil');
            }
        }
    }
    ?>

    <?php if(isset($message)): ?>
        <div class="red">
            <?php foreach($message as $mes) : ?>
            <p><?= $mes ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif;?>



        <?php require $path ?>

        <div id="myModal" class="modal">
        <div class="modal-content">
            <h2>Se connecter</h2>
            
            <form method="POST">
                <label for="mail">Mail : </label>
                <input type="text" name="mail" id="mail"/>
                
                <label for="password">Mot de passe : </label>
                <input type="password" name="password" id="password"/>
                
                <input type="submit" value="Connexion"/>
            </form>
            
            <span class="close">&times;</span>
        </div>
    </div>

    </main>
    <script src="js/profile.js"></script>
    <script src="js/prix.js"></script>
        <footer>
        <div>
            <div> 
                <div>
                    <i class="fas fa-lock"></i>
                    <p>Paiement sécurisé</p>
                </div>
                <div>
                    <i class="fas fa-truck"></i>
                    <p>Livraison offerte</p>
                </div>
                <div>
                    <i class="fas fa-money-bill-alt"></i>
                    <p>Carte fidélité</p>
                </div>
                <div>
                    <i class="fas fa-phone"></i>
                    <p>Service Client</p>
                </div>
                <div>
                    <i class="fas fa-check-circle"></i>
                    <p>Garantie Qualité</p>
                </div>
            </div> 
        </div> 
        
        <div>
            <div>
                <p>Cup of tea</p>
                <a href="#">Notre histoire</a>
                <a href="#">Nos boutiques</a>
                <a href="#">Le thé de A à Z</a>
                <a href="#">Espace Clients Professionnels</a>
                <a href="#">Recrutement</a>
                <a href="#">Contactez-nous !</a>
                <a href="#">L'école du thé</a>
            </div>
            <div>
                <p>Commandez en ligne</p>
                <a href="#">Première visite</a>
                <a href="#">Aide - FAQ</a>
                <a href="#">Service client</a>
                <a href="#">Suivre ma commande</a>
                <a href="#">Conditions générales de vente</a>
                <a href="#">Informations légales</a>
            </div>
            <div>
                <p>Suivez-nous</p>
                <a href="#">Notre histoire</a>
                <a href="#">Nos boutiques</a>
                <a href="#">Le thé de A à Z</a>
                <a href="#">Espace Clients Professionnels</a>
            </div>
        </div>
    </footer>
</body>
</html>