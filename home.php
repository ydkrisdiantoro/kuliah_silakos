<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/b4_sidebar.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <title>Silakos</title>
</head>

<body>
    
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sidebarNavigation" data-sidebarClass="navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Silakos</a>
        <button class="navbar-toggler leftNavbarToggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img width="100%" src="silakos.jpg"><br>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="home.php?username="<?php $username ?>>Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">"
                    <a class="nav-link" href="profile.php?username="<?php $username ?>>Profile</a>
                </li> ?>
                <li class="nav-item">
                    <a class="nav-link disabled" href="cost.php?username="<?php $username ?>>Cost</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kelompok4.php?username="<?php $username ?>>Our Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="index.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <!--  -->

    <h2 class="text-center m-l-16 m-t-16 m-r-16" style="margin-top: 45%">Selamat Datang <?php $username = $_GET['username']; echo $username; ?> di Silakos 
        <h4 class="text-center m-l-16 m-t-16 m-r-16">(Sistem Pengelolaan Indekos)</h4>
    </h2>
    <h5 class="text-center m-l-16 m-t-16 m-r-16">Tekan garis tiga di pojok kiri atas untuk melihat menu navigasi dan mulai melakukan pengelolaan indekos.</h5>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="js/b4_sidebar.js"></script>
</body>

</html>