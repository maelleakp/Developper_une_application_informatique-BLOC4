<?php include('function.php'); ?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Negosud</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="../asset/css/style.css">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <header class="col">
            <img src="../asset/img/logo-blanc.png" style="height:70px">
        </header>
    </div>
    <nav id="navbar">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a id="navbar-btn" class="nav-link text-end" href="#">X</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="stock.php">inventaires</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="product.php">Articles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="customer.php">Clients</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="provider.php">Fournisseurs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?exit=1">Déconnexion</a>
            </li>
        </ul>
    </nav>
    <div class="row justify-content-center">
        <div class="col-10">
            <?php
            if(isset($_GET['msg'])){

                switch ($_GET['msg']){
                    case '500':
                        echo '<div class="alert alert-danger" role="alert">Accès interdit!</div>';
                        break;
                    case 'add_ok':
                        echo '<div class="alert alert-success" role="alert">Ajout terminé!</div>';
                        break;
                    case 'upd_ok':
                        echo '<div class="alert alert-success" role="alert">Mise à jour terminée!</div>';
                        break;
                    default:
                        echo '<div class="alert alert-success" role="alert">Opération ok</div>';
                        break;
                }
            }