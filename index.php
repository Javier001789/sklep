<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header class="flex-container topvan">
        <img src="img.webp" alt="logo" id="logo">
        <form action="search.php" method="get">
            <input type="text" name="search" id="search" placeholder="wyszukiwania produkt">
            <input type="submit" value="Szukaj">
        </form>
        <div>
            <a href="cart.php" id="cart">Koszyk</a>
            <a href="login.html">Dodaj Produkt</a>
        </div>
    </header>
    <main class="flex-container-wrap">

        <?php
        include "display_products.php";
        ?>
    </main>
</body>

</html>