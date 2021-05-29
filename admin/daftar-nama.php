<?php include("../konekin.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Silakos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/b4_sidebar.css">
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
                        <img width="100%" src="../silakos.jpg"><br>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Daftar Deadline Anak Kos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="data-lengkap.php">Data Lengkap Anak Kos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="../index.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <h4 style="margin: 16px">Daftar Anak Kos</h4>
    <table border="1" width="90%" align="center" style="margin: 16px">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Tanggal Masuk</th>
                <th>Tanggal Keluar</th>
            </tr>
        </thead>
        <tbody>
                <?php
                    $sql = "SELECT p.nama, s.tgl_masuk, s.tgl_keluar from pengguna as p, sewa as s";
                    $query = mysqli_query($db, $sql);
                    while ($data = mysqli_fetch_array($query)) {
                        echo "<tr>";
                        echo "<td>".$data['nama']."</td>";
                        echo "<td>".$data['tgl_masuk']."</td>";
                        echo "<td>".$data['tgl_keluar']."</td>";
                        echo "</tr>";
                    }
                ?>
        </tbody>
    </table>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="js/b4_sidebar.js"></script>
</body>
</html>