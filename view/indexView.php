<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Cup of Tea - Accueil</title>
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/title.png"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
    <link rel="stylesheet" href="css/theme.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amaranth:wght@400;700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    
</head>
<body>

    <main>
        <div class="container">
            
            <section class="section-carousel">
                <h1>C'est noël, profitez-en</h1>
                <img src="img/offre-noel.jpg" alt="Offre de noël">
                <p>* Pour toute commande effectuée avant le 20 décembre</p>
                <div class="carousel">
                    <div>
                        <img src="img/slider/1.jpg" alt="Boutique de noël">
                    </div>
                    <div>
                        <img src="img/slider/2.jpg" alt="Les thés numéro 25">
                    </div>
                </div>
            </section>
            
            <section class="choose-tea">
                <h2>Choisissez votre thé</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, ipsam, quos, tenetur repudiandae quasi maxime excepturi harum voluptas similique recusandae corporis fuga beatae modi ratione deleniti reiciendis exercitationem. Excepturi sint magnam voluptatem. Voluptatum, magnam atque pariatur voluptate ipsum quia eligendi consectetur rem earum expedita esse voluptas doloribus facilis provident animi at illum totam inventore.</p>
                <div>
                    <?php foreach ($categories as $category) :?>
                        <a href=<?="index.php?page=listing#".$category['id']?>>
                            <img src=<?= "img/tea/".$category['picture'] ?> alt=<?= "img/tea/".$category['picture'] ?>>
                            <p><?= $category['name'] ?></p>
                        </a>
                    <?php endforeach; ?>
                </div>
            </section>
            
            <section class="notre-selection">
                <h2>Notre sélection</h2>
                <div>
                    <div>
                        <h3>Notre nouveauté</h3>
                        <img src="img/product/product1.jpg" alt="Thé du hammam">
                        <h4>Thé du hammam</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, vitae debitis voluptas aperiam facere quo. Voluptatem, quod nostrum dolor obcaecati repellat omnis odio esse rerum praesentium deserunt nulla aliquam pariatur.</p>
                        <p>A partir de</p>
                        <p class="prix">8,50€</p>
                        <a href="index.php?page=product&productId=19">Voir ce produit</a>
                    </div>
                    <div>
                        <h3>Notre best-seller</h3>
                        <img src="img/product/product2.jpg" alt="Infusion herboriste">
                        <h4>Infusion herboriste</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, vitae debitis voluptas aperiam facere quo. Voluptatem, quod nostrum dolor obcaecati repellat omnis odio esse rerum praesentium deserunt nulla aliquam pariatur.</p>
                        <p>A partir de</p>
                        <p class="prix">7,60€</p>
                        <a href="#">Voir ce produit</a>
                    </div>
                    <div>
                        <h3>Notre coup de cœur</h3>
                        <img src="img/product/product3.jpg" alt="Blue of London">
                        <h4>Blue of London</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, vitae debitis voluptas aperiam facere quo. Voluptatem, quod nostrum dolor obcaecati repellat omnis odio esse rerum praesentium deserunt nulla aliquam pariatur.</p>
                        <p>A partir de</p>
                        <p class="prix">9,00€</p>
                        <a href="index.php?page=product&productId=16">Voir ce produit</a>
                    </div>
                </div>
            </section>
            
        </div>
    </main>
        
    
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    
    <script type="text/javascript">
                $(document).ready(function(){
                    $('.carousel').slick({
                        infinite: true,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots:true,
                        arrows:false
                    });
                 });
    </script>
</body>
</html>

