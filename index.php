<?php
require "inc.koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <header>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">INVIZT INDONESIA</a>
                </div>
                <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="index.php?p=projectlist">project</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?p=employeelist">employee</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?p=departmentlist">department</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?p=register">register</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="index.php?p=upload">upload</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="index.php?p=login">login</a>
  </li>
</ul>
        </nav>
    </header>

   

    <main>
        <?php

        $pages_dir = 'pages';
        if (!empty ($_GET['p'])) {

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>