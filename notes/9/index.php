<?php
// https://www.youtube.com/watch?v=TBUgZ84tTgU&list=PL4cUxeGkcC9gksOX3Kd9KPo-O68ncT05o&index=9

// loops

$ninjas = ['shaun', 'ryu', 'yoshi'];

// for ($i = 0; $i < count($ninjas); $i++) {
//     echo $ninjas[$i] . '<br />';
// }

// foreach($ninjas as $ninja){
//     echo $ninja . '<br />';
// }

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 40],
    ['name' => 'lightning bolt', 'price' => 2]
];

// foreach($products as $product){
//     echo $product['name'] . ' - ' . $product['price'];
//     echo '<br />';
// }

// $i = 0;

// while ($i < count($products)) {
//     echo $products[$i]['name'];
//     echo '<br />';
//     $i++;
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials</title>
</head>

<body>

    <h1>Products</h1>
    <ul>
        <?php foreach ($products as $product) { ?>

            <h3><?php echo $product['name']; ?></h3>
            <p>$<?php echo $product['price']; ?></p>

        <?php } ?>
    </ul>

</body>

</html>