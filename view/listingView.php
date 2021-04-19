<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des produits</title>
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/title.png"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amaranth:wght@400;700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    
</head>
<body>
    <main>
        <div class="container">
            <h2>Notre carte des thés</h2>
                <section class="notre-selection selection-margin">
                        <?php
                        foreach ($categories as $category) : ?>
                            <div class='presentation-the'>
                                <h3><?= $category['name'] ?></h3>
                                <p><?= $category['content'] ?></p>
                                <div class="products" id=<?= $category['id'] ?>>
                                    <?php
                                    foreach ($products as $product) : ?>
                                        <div class=product>
                                            <?php if($product['category_id'] === $category['id']) : ?>
                                                <h4><?= $product['name']?></h4>
                                                <img src=<?= "img/product/".$product['picture'] ?> alt=<?= "img/product/".$product['picture'] ?>>
                                                <p><?= $product['content'] ?></p>
                                                <p class='prix'><?= $product['price']."€" ?></p>
                                                <a href=<?= "index.php?page=product&productId=".$product['id'] ?>>Voir ce produit</a>
                                            <?php endif; ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div> 
                            </div>
                        <?php endforeach; ?>
                <section>
                
        </div>
    </main>
        
</body>
</html>