<?php

require_once __DIR__ . '/Models/Categoria.php';
require_once __DIR__ . '/Models/Prodotto.php';
require_once __DIR__ . '/Models/Cibo.php';
require_once __DIR__ . '/Models/Cuccia.php';
require_once __DIR__ . '/Models/Giochi.php';


$categoriaGatti = new Categoria(
    'Gatti',
    '😺'
);

$categoriaCani = new Categoria(
    'Cani',
    '🐶'
);


$prodotti = [];

$prodotti[] = new Prodotto(
    'Prodotto 1',
    'Descrizione prodotto 1',
    14.50,
    4,
    $categoriaCani
);

$prodotti[] = new Cibo(
    'Prodotto 2',
    'Descrizione Cibo 1',
    33.12,
    1,
    $categoriaGatti,
    'Coniglio',
    true
);

$prodotti[] = new Cuccia(
    'Prodotto 3',
    'Descrizione Cuccia 1',
    20,
    12,
    $categoriaCani
);

$prodotti[] = new Giochi(
    'Prodotto 4',
    'Descrizione Gioco 1',
    132,
    100,
    $categoriaCani
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
</head>

<body>
    <?php
    foreach ($prodotti as $index => $prodotto) {
    ?>
        <div>
            <p><?php echo $prodotto->nome ?></p>
            <span><?php echo $prodotto->categoria->nome ?></span>
            <span><?php echo $prodotto->categoria->icona ?></span>
            <p><?php echo $prodotto->descrizione ?></p>
            <p> $ <?php echo $prodotto->prezzo ?></p>
            <p> Ancora <?php echo $prodotto->quantita ?> disponibili </p>
            <p>Numero Seriale: <?php echo $prodotto->numeroId ?></p>
            <p>Codice a barre: <?php echo $prodotto->codiceABarre ?></p>
        </div>
    <?php
    }
    ?>
</body>

</html>