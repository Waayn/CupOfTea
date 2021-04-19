<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Produit : Blue of London</title>
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/title.png"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amaranth:wght@400;700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    
</head>
<body>
    
    <main>
        <div class="container">
            <section class="meilleur-the">
                <h2>Le meilleur du thé</h2>
                <div class="dispo-row">
                    <div>
                        <p id='nameProduct'><?= $product['name'] ?></p>
                        <!-- <p>Thé noir à la bergamote</p> -->
                        <!-- <p>Réf : 133742</p> -->
                        <p id="idProduct">ID: <?= $product['id'] ?></p>
                    </div>
                    <div>
                        <div class="dispo-etoiles">
                            <i class="fas fa-star yellow"></i>
                            <i class="fas fa-star yellow"></i>
                            <i class="fas fa-star yellow"></i>
                            <i class="fas fa-star yellow"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <a href="#">Voir les 56 avis</a>
                    </div>
                </div>
                <div class="dispo-row">
                    <img src=<?= "img/product/".$product['picture'] ?> alt=<?= "img/product/".$product['picture'] ?>>
                    <div class="dispo-select">
                        <select id="poids-select">
                            <option value="100g">Sachet de 100g</option>
                            <!-- <option value="500g">Sachet de 500g</option> -->
                            <!-- <option value="1kg">Sachet de 1kg</option> -->
                        </select>
                        <p id="prix-sachet"><?= $product['price']."€" ?></p>
                        <a class="add-panier" id='add-panier'>Ajouter au panier</a>
                        <div class="dispo-heart">
                            <i class="fas fa-heart red"></i>
                            <a href="#">Ajouter à ma liste d'entrée</a>
                        </div>
                    </div>
                </div>
                <div class="lorem">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, laborum nesciunt perspiciatis quis suscipit neque distinctio facere vitae fugit doloribus cupiditate quas voluptas iusto aperiam quo amet porro fuga rem sequi consequatur. Mollitia, tempora autem in soluta magnam fugiat placeat perferendis libero. Autem, inventore ut aperiam beatae explicabo sit voluptates illo eum adipisci quisquam molestiae cumque esse ipsum ad sunt eveniet quidem. Earum, mollitia placeat aperiam asperiores deserunt excepturi quos quisquam labore facere odit eius!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, laborum nesciunt perspiciatis quis suscipit neque distinctio facere vitae fugit doloribus cupiditate quas voluptas iusto aperiam quo amet porro fuga rem sequi consequatur. Mollitia, tempora autem in soluta magnam fugiat placeat perferendis libero. Autem, inventore ut aperiam beatae explicabo sit voluptates illo eum adipisci quisquam molestiae cumque esse ipsum ad sunt eveniet quidem. Earum, mollitia placeat aperiam asperiores deserunt excepturi quos quisquam labore facere odit eius!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, laborum nesciunt perspiciatis quis suscipit neque distinctio facere vitae fugit doloribus cupiditate quas voluptas iusto aperiam quo amet porro fuga rem sequi consequatur. Mollitia, tempora autem in soluta magnam fugiat placeat perferendis libero. Autem, inventore ut aperiam beatae explicabo sit voluptates illo eum adipisci quisquam molestiae cumque esse ipsum ad sunt eveniet quidem. Earum, mollitia placeat aperiam asperiores deserunt excepturi quos quisquam labore facere odit eius!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, laborum nesciunt perspiciatis quis suscipit neque distinctio facere vitae fugit doloribus cupiditate quas voluptas iusto aperiam quo amet porro fuga rem sequi consequatur. Mollitia, tempora autem in soluta magnam fugiat placeat perferendis libero. Autem, inventore ut aperiam beatae explicabo sit voluptates illo eum adipisci quisquam molestiae cumque esse ipsum ad sunt eveniet quidem. Earum, mollitia placeat aperiam asperiores deserunt excepturi quos quisquam labore facere odit eius!</p>
                </div>
            </section>
        </diV>
    </main>
        
    <script type="module" src="js/cart.js"></script>
</body>
</html>