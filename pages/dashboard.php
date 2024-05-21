<?php
require "inc.koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Latihan PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<body>
    <header>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">INVIZT INDONESIA</a>
                </div>
                <ul class="nav navbar-nav">
                    <a href="dashboaremployee.php">Home</a>
                    <a href="dashboaremployee.php?p=viewprofile">View Profile</a>
                    <a href="dashboaremployee.php?p=viewproject">View Project</a>
                    <a href="dashboaremployee.php?p=logout">Logout</a>
        </nav>
    </header>

    <main>
        <?php

        $pages_dir = 'pages';
        if (!empty($_GET['p'])) {

            $pages = scandir($pages_dir, 0);
            unset($pages[0], $pages[1]);

            $p = $_GET['p'];
            if (in_array($p . '.php', $pages)) {

                include ($pages_dir . '/' . $p . '.php');

            } else {

                echo 'Halaman tidak ditemukan! :(';

            }
        } else {

            include ($pages_dir . '/home.php');

        }

        ?>

        <?php
        if (!isset($_SESSION)) {
            session_start();

        }
        echo "Welcome, <b>" . $_SESSION["name"] . "</b><br>";
        echo "Anda login sebagai, <b>" . $_SESSION["role"] . "</b>";
        ?>
    </main>

    <footer>
        <div class="row border-top border-dark mx-xl-5 py-4">
            <div id="footer-text" class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left">
                    &copy; <a class="font-weight-semi-bold">invizt</a>. All Rights Reserved.
                </p>
            </div>
        </div>
    </footer>
</body>

</html>