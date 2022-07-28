<?php
$currentPage = $_SERVER ["REQUEST_URI"];

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../assets/css/style.css">
  <title>MITA <?= $titles ?></title>
</head>
<body>
    <header >
    <nav class="bg-green-700 px-20 py-5 text-white  fixd w-ful ">
        <div class="container mx-auto flex flex-col md:flex-row justify-center md:justify-between">
            <div class="">
                <a href="/"></a>
                <img class="w-25 h-10" src="assets/img/mito.png" alt="">
            </div>
            <div class="  space-x-10">
                <a href="/" class="<?= $currentPage === "/" ? "active" : "" ?>">Accueil</a>
                <a href="Product.php" class="<?= $currentPage === "/Product.php" ? "text-red-500 underline" : "" ?>">Produits</a>
                <a href="Contact.php" class="<?= $currentPage === "/Contact.php" ? "active underline" : "" ?>">Contact</a>
            </div>
        </div>
    </nav>

    <div class="bg-red-500 hero py-5 " id="hero" style="background-image: url('../assets/img/mito-header.jpeg')">
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium suscipit quis iure sequi earum, fugit provident modi tempore deserunt 
            dolorem cum corporis commodi quisquam non numquam optio natus odit quia explicabo pariatur. Perspiciatis, nulla eaque. Pariatur ducimus optio 
            itaque ipsum eum tempora. Excepturi labore vel architecto nihil dolor similique repellendus aliquam illo, saepe itaque mollitia. Explicabo dolorem dicta error, 
            fugit aliquid nobis incidunt reiciendis, ipsam tempora eius debitis modi magni fuga quod numquam eos accusamus! Dolores obcaecati at ipsum et cupiditate! 
            Maxime veniam rem voluptatibus, non at eligendi culpa impedit placeat eos numquam eius, dolorum ab consequuntur cumque beatae odit.
        </p>

    </div>
    </header>
<main class="py-8">
