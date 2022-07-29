<?php
$currentPage = $_SERVER ["REQUEST_URI"];
var_dump($currentPage)

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="assets/css/style.css">
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
                <a href="/" class="<?= $currentPage === "/php/projet%20MITA/" ? "text-green-500 active" : "" ?>">Accueil</a>
                <a href="Product.php" class="<?= $currentPage === "/php/projet%20MITA/Product.php" ? "active underline text-green-500" : "" ?>">Produits</a>
                <a href="Contact.php" class="<?= $currentPage === "/php/projet%20MITA/Contact.php" ? "text-green-500 active underline" : "" ?>">Contact</a>
            </div>
        </div>
    </nav>

    <div class=" hero py-5 align-items self-center" id="hero">
        <h2 class="text-green-500 font-bold">Le leader français du Bio</h2>
        <h1 class="font-black">Bienvenue chez Mito</h1>

    </div>
    </header>
<main class="py-8">
