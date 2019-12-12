<?php require_once 'vendor/autoload.php'; ?>
<?php require_once 'includes/config.php'; ?>
<?php
session_start();
?>
<?php
require_once ('db.php');
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>NEWCO</title>
    <link rel="stylesheet" href="public/css/app.css">
</head>
<body>
<div id="app">
    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light pt-5 pb-4">
            <a class="navbar-brand" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Stages</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Alternances</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="company.php">Entreprise</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Categories</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./users.php">Utilisateurs</a>
                    </li>
                </ul>

                <form class="form-inline">
                    <input class="form-control px-3" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success mr-5 px-3" type="submit">Search</button>

                    <?php if(!isset($_SESSION["id"])) { ?>
                        <a class="btn btn-outline-success" href="./sign-in.php">Sign in</a>

                        <a action="./sign-up.php">
                            <input class="btn btn-outline-success mr-2" type="button" value="Sign-up" onclick="window.location.href='./sign-up.php'" />
                        </a>
                    <?php } else { ?>
                        <form action="./sign-out.php">
                            <input class="btn btn-outline-success mr-2" type="button" value="Sign-out" onclick="window.location.href='./sign-out.php'" />
                        </form>

                        <form action="./user.php">
                            <input class="btn btn-outline-success mr-2" type="button" value="My Account" onclick="window.location.href='./user.php'" />
                        </form>
                    <?php } ?>



                </form>
            </div>
        </nav>
    </header>

    <main id="main">